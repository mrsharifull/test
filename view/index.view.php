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
            <div class="col-md-10 mx-auto my-5">
                <div class="card">
                    <?php
                        if(isset($_GET['success'])){
                            $success = $_GET['success'];
                            printf("<span class='alert alert-success'>%s</span>",$success);
                        }elseif(isset($_GET['error'])){
                            $error = $_GET['error'];
                            printf("<span class='alert alert-danger'>%s</span>",$error);
                        }
                    ?>
                    <div class="card-header">
                        <h3 class="float-start">Category List</h3>
                        <a href="insert.php" class="btn btn-outline-primary btn-sm float-end">Create Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Upadeted At</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if($result->num_rows>0){
                                $count = 1;
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?=$count++?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['description']?></td>
                                <td>
                                    <span class="badge <?= $row['status'] ==1 ? 'bg-success' : 'bg-info'?>">
                                        <?= $row['status'] ==1 ? 'Active' : 'Deactive'?>
                                    </span>
                                </td>
                                <td><?=$row['created_at']?></td>
                                <td><?=$row['updated_at'] ?? "N/A" ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Vertical button group">
                                    <a href="edit.php?id=<?= $row['id'] ?>"class="btn btn-outline-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>"class="btn btn-outline-danger btn-sm">Delete</a>
                                    <a href="status.php?id=<?= $row['id'] ?>" class="btn <?= $row['status'] ==1 ? 'btn-outline-info' : 'btn-outline-success'?>  btn-sm"><?= $row['status'] ==1 ? 'Deactive' : 'Active'?></a>
                                    </div>

                                </td>
                            </tr>
                            <?php
                                }
                            }
                            
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>