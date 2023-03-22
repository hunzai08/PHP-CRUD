<?php 
 include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Display</title>
</head>

<body>
    <div class="container mt-3">
        <a href="create.php" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Click</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $q = "select * from student";
                $result = mysqli_query($con,$q);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo ' <tr>
                    <th >'.$row['SID'].'</th>
                    <td >'.$row['SNAME'].'</td>
                    <td>'.$row['SEMAIL'].'</td>
                    <td>'.$row['SADDRESS'].'</td>
                    <td>
                    <button><a href="update.php? updateid='.$row['SID'].'" class="btn btn-success">Update</a></button>
                    <button><a href="delete.php? deleteid='.$row['SID'].'" class="btn btn-danger">Delete</a></button>
                    </td>
                    </tr> ';
                }
            ?>
  
        </tbody>
    </table>
    </div>
    

</body>

</html>