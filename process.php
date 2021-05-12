<?php 
    //Connect to dB
    // Start the session 
    session_start();

    define('SITE_URL', 'http://localhost/CRUD/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'crud');

    $connect = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //dB connection
    $db_select = mysqli_select_db($connect, DB_NAME) or die(mysqli_error());

    //Check weather the same button has been pressed in index.php
    if(isset($_POST['save']))
    {
        //button has been pressed
        $name = $_POST['name'];
        $location = $_POST['location'];

        $sql = "INSERT INTO user SET name='$name', location='$location'";
        $res = mysqli_query($connect, $sql);

        if($res==True)
        {
            $_SESSION['add']="Admin Added Sucessfully";
            header("location:".SITE_URL.'manage.php');
        }
        else{
            $_SESSION['add']="Admin Could not be added Sucessfully";
            header("location:".SITE_URL.'manage.php');
        }
    }



    //Check weather the update button was clicked
    if(isset($_POST['update']))
    {
        //Update button was clicked

    }
?>