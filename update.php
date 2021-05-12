<?php 
    include('process.php');

    //Get the ID 
    $id = $_GET['id'];

    //Display the data 
    $sql = "SELECT * FROM user WHERE id='$id'";
    $res = mysqli_query($connect, $sql);
    if($res==True)
    {
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            //Get this data
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $location = $row['location'];
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Simple CRUD ops</title>
  </head>
  <body>
    <div class="d-flex justify-content-center mt-4">
        <form action="" method = "POST">
            
            <div class="mb-3">
                <label class="form-label">Enter your Name..</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Enter your Location..</label>
                <input type="text" class="form-control" name="location" value="<?php echo $location; ?>">
            </div>

            <div class="row mt-5">
                <div class="col form-group">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>

<?php 
    //Check if the update button is clicked
    if(isset($_POST['update']))
    {
        //Get the entered values
        $name = $_POST['name'];
        $location = $_POST['location'];

        $sql2 = "UPDATE user SET name='$name', location='$location' WHERE id=$id";
        $res2 = mysqli_query($connect, $sql2);
        if($res2==True)
        {
            $_SESSION['update-user-data'] = "Data has been updated successfully";
            header("location:".SITE_URL.'manage.php');
        }
        else
        {
            $_SESSION['update-user-data'] = "Data updation failed";
            header("location:".SITE_URL.'manage.php');
        }
    }
?>

