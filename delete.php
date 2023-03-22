<?php
    include 'config.php';
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        $q = "delete from student where SID=$id";
        $result = mysqli_query($con,$q);
        if($result)
        {
            header('location:display.php');
        }
        else
        {
            echo 'Not deleted';
        }

    }
?>