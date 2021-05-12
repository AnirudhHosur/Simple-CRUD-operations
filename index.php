<?php include('process.php'); ?>

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
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Enter your Location..</label>
                <input type="text" class="form-control" name="location">
            </div>

            <div class="row mt-5">
                <div class="col form-group">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
            </div>
        </form>

    </div>

    
    
  </body>
</html>



