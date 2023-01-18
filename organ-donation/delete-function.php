<?php 
    if (isset($_GET['organ_id'])) {
        $organ_id=$_GET['organ_id'];
        $query1="delete from trigger1 where organ_id='$organ_id'";
        $run1=mysqli_query($con,$query1);
        // if ($run1) {
        //     header('Location: student.php');
        // }
        // else{
        //     echo "Record not deleted. Frist of all delete record  from the child table then you can delete from here ";
        //     header('Refresh: 5; url=student.php');
        // }
    }
