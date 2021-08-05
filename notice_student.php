<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "onlinecourse");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student | Notice Board</title>
    
      
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <?php include('includes/header.php');
    include('includes/menubar.php'); ?>
    <!-- LOGO HEADER END-->


    <div style="background-color:black;text-align:center;height:50Px;">
        <h3 style="text-align:center;color:white;">Notice Board</h3>

    </div>

    <div class="mid_section" style="height: 600px;">
       
       
    </div>



    <?php include('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>