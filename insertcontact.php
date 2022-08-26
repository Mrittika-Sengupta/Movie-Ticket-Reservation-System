
<?php
	require_once "conn.php";


$name= $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];


$sql = "INSERT INTO contact VALUES ('$name', '$email', '$subject','$message')";
if (mysqli_query($conn, $sql)) {
echo "THANKS FOR CONTACTING US";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</br>
<a href ="contact.php"> GO BACK </a>