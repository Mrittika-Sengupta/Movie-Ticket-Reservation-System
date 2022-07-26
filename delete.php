<?php
$conn = mysqli_connect("localhost","root","","movieticket");
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM movie WHERE movie_id='$id' ";
    $sql_run= mysqli_query($conn,$sql);

    if ($sql_run)
    {
        echo '<script> alert("DATA DELETED"); </script>';
        header("location:delete_movie.php");

    }
    else
    {
        echo '<script> alert("DATA NOT DELETED"); </script>';
    }
}

?>