<?php
  include('includes/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body
        {
            
           background-image: linear-gradient(rgba(4,4,4,0.1),rgba(7,7,7,0.1)),url(images/bgtask2.jpg);
           
           
        }
       
       
        .task
        {
            font-size: 20px;
            color:gray;
        }
        .taskh1
{
    font-size: 50px;
    color:rgba(0,0,0,0.7);
}
   
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="course">
        <h1 class="taskh1">Tasks We Offer</h1>
        <h3 class="box-title"><a href="add-task.php"><button type="button" class="btn btn-block btn-primary btn-sm">Add Apartment Detail</button></a></h3>
        <p class="task">Choose any task suitable for you</p>

        <div class="row">
        <?php
                $ret=mysqli_query($con,"SELECT * from tasks");
                $link=0;
                $col=1;
                while ($row=mysqli_fetch_array($ret)) {
                   
                    $link=$link+1;
                   
                   
                ?>
                <?php if($link==1){?>

            <div class='course-col1'>
                <a href="dashboard1.php"><h3><?php echo $row['task_name'];?></h3></a>
                <p>
                <?php echo $row['task_details'];?>
                </p>
            </div>
            <?php } ?>
            <?php if($link==4){?>

            <div class='course-col4'>
                <a href="dashboard3.php"><h3><?php echo $row['task_name'];?></h3></a>
                <p>
                <?php echo $row['task_details'];?>
                </p>
            </div>
            <?php } ?>
            <?php if($link==3){?>

            <div class='course-col2'>
                <a href="dashboard4.php"><h3><?php echo $row['task_name'];?></h3></a>
                <p>
                <?php echo $row['task_details'];?>
                </p>
            </div>
            <?php } ?>
            <?php if($link==2){?>

            <div class='course-col3'>
                <a href='dashboard2.php'><h3><?php echo $row['task_name'];?></h3></a>
                <p>
                <?php echo $row['task_details'];?>
                </p>
            </div>
            <?php } ?>
            <?php if($link>4){?>

            <div class='course-col4'>
                <a href=""><h3><?php echo $row['task_name'];?></h3></a>
                <p>
                <?php echo $row['task_details'];?>
                </p>
            </div>
            <?php } ?>
            






            <?php } ?>

        </div>
    </section>




</body>
</html>

