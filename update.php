<?php 
    include 'config.php';
    $id = $_GET['updateid'];
    $sq = "select * from student where SID=$id";
    $rt = mysqli_query($con,$sq);
    $row = mysqli_fetch_assoc($rt);
    $idd = $row['SID'];
    $name = $row['SNAME'];
    $email = $row['SEMAIL'];
    $address = $row['SADDRESS'];

    if (isset($_POST['submit'])) {
        $n = $_POST['Name'];
        $e = $_POST['Email'];
        $a = $_POST['Address'];
    
        $q = "update student set SNAME='$n',SEMAIL='$e',SADDRESS='$a' where SID='$idd'";
    
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
                <input type="text" name="id" value="<?php echo $idd; ?>" placeholder="Entern your ID" autocomplete="off">
            </div>
            <div class="mb-3">
                <input type="text" name="Name" value="<?php echo $name; ?>" placeholder="Entern your name" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="email" name="Email" value="<?php echo $email; ?>" placeholder="Entern your Email" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="text" name="Address" value="<?php echo $address; ?>" placeholder="Entern your Address" autocomplete="off">
            </div>

            <input type="submit" value="Update" name="submit" class="btn btn-primary">
        </form>
    </div>

    

</body>

</html>