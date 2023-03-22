<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $n = $_POST['Name'];
    $e = $_POST['Email'];
    $a = $_POST['Address'];

    $q = "insert into student(SNAME,SEMAIL,SADDRESS) values('$n','$e','$a')";

    $result = mysqli_query($con, $q);

    if ($result) {
        header('location:display.php');
    } else {
        echo 'Fail to save data';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create</title>
</head>

<body>
    <div class="container mt-3">
        <form action="#" method="post">
            <div class="mb-3">
                <input type="text" name="Name" placeholder="Entern your name" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="email" name="Email" placeholder="Entern your Email" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="text" name="Address" placeholder="Entern your Address" autocomplete="off">
            </div>

            <input type="submit" value="Save" name="submit" class="btn btn-primary">
        </form>
    </div>

    

</body>

</html>