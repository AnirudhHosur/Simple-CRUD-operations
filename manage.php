<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <title> Admin Manager </title>
    </head>

    <body>

        <div class="d-flex justify-content-center mt-2">
            <?php 
                if(isset($_SESSION['update-user-data']))
                {
                    echo $_SESSION['update-user-data'];
                    unset($_SESSION['aupdate-user-datadd']);
                }
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
            ?>

            <label class="form-label">Click here to go back.. </label>
            <a href="index.php" class="btn btn-danger" name="back"> Go Back </a>
        </div>

        <div class="container mt-5">
            <div class="row text-center" style="border-bottom: 1px solid #333333;">

                <div class="col-3">
                <label> S.No </label>
                </div>

                <div class="col-3">
                <label> Name </label>
                </div>

                <div class="col-3">
                <label> Location </label>
                </div>

                <div class="col-3">
                <label> Actions </label>
                </div>

            </div>
        </div>
    </body>
</html>
            
    
<?php
    include('process.php');
    

    //Here we shall display list of admins
    $sql = "SELECT * FROM user";
    $res = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($res);
    $sn = 1;
    if($res==True)
    {
        if($count>0)
        {
            //Data exists
            while($row=mysqli_fetch_assoc($res))
            {
                $id = $row['id'];
                $name = $row['name'];
                $location = $row['location'];
                ?>
                        <div class="container mt-5">
                            <div class="row text-center">

                                <div class="col-3">
                                <label> <?php echo $sn++;?> </label>
                                
                                </div>

                                <div class="col-3">
                                <label> <?php echo $name;?> </label>
                                </div>

                                <div class="col-3">
                                <label> <?php echo $location;?> </label>
                                </div>

                                <div class="col-3">
                                    <a href="update.php?id=<?php echo $id;?>" class="btn btn-info"> Update </a>
                                    <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger"> Delete </a>
                                </div>

                            </div>
                        </div>
                <?php
            }
        }
    }
    else
    {
        //Data does not exist
    }
?>





