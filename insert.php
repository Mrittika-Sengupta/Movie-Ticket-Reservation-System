
<?php
	require_once "conn.php";


$m_name= $_POST["m_name"];
$s_avail= $_POST["s_avail"];
$t_price= $_POST["t_price"];
$s_time= $_POST["s_time"];
$e_time= $_POST["e_time"];
$date= $_POST["date"];


$sql = "INSERT INTO movie VALUES ('','$m_name', '$s_avail', '$t_price','$s_time','$e_time','$date')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</br>
<a href ="reg_movie.php"> GO BACK </a>