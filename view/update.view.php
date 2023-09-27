<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto my-5">
                <div class="card">
                    <?php
                        if(isset($success)){
                            printf("<span class='alert alert-success'>%s</span>",$success);
                        }
                        if(isset($error)){
                            printf("<span class='alert alert-danger'>%s</span>",$error);
                        }
                    ?>
                    <div class="card-header">
                        <h3>Create Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="text" value="<?= $row['name'] ?>" name="name" class="form-control mb-4" placeholder="Enter Category Name">
                            <textarea name="description" class="form-control mb-4" placeholder="Enter Description" cols="30" rows="5"><?= $row['description'] ?></textarea>
                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-info w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>