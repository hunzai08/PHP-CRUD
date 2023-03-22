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
        <a href="createmarks.php" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">MID</th>
                <th scope="col">Subject</th>
                <th scope="col">Marks</th>
                <th scope="col">SID</th>
                <th scope="col">Click</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $q = "select * from marks";
                $result = mysqli_query($con,$q);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo ' <tr>
                    <th >'.$row['MID'].'</th>
                    <td >'.$row['Subject'].'</td>
                    <td>'.$row['Marks'].'</td>
                    <td>'.$row['SID'].'</td>
                    <td>
                    <button><a href="" class="btn btn-success">Update</a></button>
                    <button><a href="" class="btn btn-danger">Delete</a></button>
                    </td>
                    </tr> ';
                }
            ?>
  
        </tbody>
    </table>
    </div>
    

</body>

</html>