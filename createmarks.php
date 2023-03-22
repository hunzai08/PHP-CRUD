<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $s = $_POST['subject'];
    $m = $_POST['marks'];
    $sd = $_POST['student_id'];

    $q = "insert into marks(Subject,Marks,SID) values('$s','$m','$sd')";

    $result = mysqli_query($con, $q);

    if ($result) {
        header('location:displaymarks.php');
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
                <input type="text" name="subject" placeholder="Entern subject" autocomplete="off">
            </div>

            <div class="mb-3">
                <input type="number" name="marks" placeholder="Entern Marks" autocomplete="off">
            </div>

            <select name="student_id">
                <optgroup label="Student ID">
                    <?php 
                        $query = "select * from student";
                        $r = mysqli_query($con,$query);
                        while($row = mysqli_fetch_assoc($r))
                        {
                            ?>
                                <option value="<?php echo $row['SID'] ?>"><?php echo $row['SNAME']?></option>
                            <?php
                        }
                    ?>
                </optgroup>
                
            </select><br><br>

            <input type="submit" value="Save" name="submit" class="btn btn-primary">
        </form>
    </div>

    

</body>

</html>