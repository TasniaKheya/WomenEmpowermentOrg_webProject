<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbnName = "web_project";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbnName);
?>

<!DOCTYPE html>
<html>
<body>

<?php 

If(!$conn){ 
die("failed to connect … …".mysqli_connect_error());
}
?>

<?php

$email_ID = $_POST['mailid'];
$password = $_POST['password'];
$phoneNo = $_POST['phoneNo'];
$code = $_POST['code'];

$s = "select * from employee where email='$email_ID'";
$result = mysqli_query($conn, $s);
$resultCheck = mysqli_num_rows($result);
    if( $resultCheck ==1){
        echo "Email Already Taken";
    }
    else if($code!="11111")
    {
        echo 'Wrong  Code';
    }
    else
    {
        $reg = "insert into employee values ('$email_ID','password','phoneNo');";
        mysqli_query($conn, $reg);
        echo 'SUCCESS';
    }


?>

</body>
</html>
