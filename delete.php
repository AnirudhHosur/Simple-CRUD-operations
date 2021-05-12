<?php 
    include('process.php');

    //Get the id 
    $id = $_GET['id'];
    
    $sql = "DELETE FROM user WHERE id='$id'";
    $res = mysqli_query($connect, $sql);
    if($res==True)
    {
        $_SESSION['delete'] = "Record deleted succesfully";
        header("Location:".SITE_URL."manage.php");
    }
    else
    {
        $_SESSION['delete'] = "Record could not be deleted";
        header("Location:".SITE_URL."manage.php");
    }
?>