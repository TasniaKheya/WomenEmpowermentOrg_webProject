<?php
    session_start();
    error_reporting(0);
    include('includes\dbconn.php');

    if(isset($_POST['login']))
    {
        $adminuser=$_POST['username'];
        $password= $_POST['password'];

        $s="SELECT * from Employee where  empName='$adminuser' && empID='$password';";
        $a=mysqli_query($con,$s);
        $a_check = mysqli_num_rows($a);
        $ret=mysqli_fetch_array($a);
        
        if($a_check==1){
            $_SESSION['avmsaid']=$ret['empID'];
           header('location:index2.php');
        } else {
            $msg="Invalid Details, Please Try Again!";}
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>XYZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="myfile.html">HOME</a></li>
				<li><a class="homeblack" href="elogin.html">Employee Login</a></li>
				<li><a class="homered" href="alogin.html">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	
	<div class="imagee">
		<img src="images/login.png" width="800px" height="600px">
	</div>

	<div class="loginbox">
    <img src="assets/admin.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="POST">
			
        <?php if($msg){ echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";}  ?>
            <p>UserName : </p>
            <input type="text" class="form-control" name="username" placeholder="Username">
            <p>Password : </p>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
           
        </form>
        
    </div>
</body>
</html>