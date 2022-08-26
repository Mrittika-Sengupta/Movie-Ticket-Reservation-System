<?php
include_once 'conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE movie set movie_id='" . $_POST['movie_id'] . "',movie_name='" . $_POST['movie_name'] . "', seats='" . $_POST['seats']
 . "', ticket_price='" . $_POST['ticket_price'] . "', start_time='" . $_POST['start_time'] . "' ,end_time='" . $_POST['end_time'] 
 . "', date='" . $_POST['date'] . "' WHERE movie_id='" . $_POST['movie_id'] . "'");

$message = "<p style = ' color : green;'> 'Record Modified Successfully </p>";
}
$result = mysqli_query($conn,"SELECT * FROM movie WHERE movie_id ='" . $_GET['id'] . "'");

$row= mysqli_fetch_array($result);
?>


<html>
<head>
<title>Update MOVIE Data</title>
</head>
<body>


<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="movie_list.php">PLEASE CLICK HERE IF YOU HAVE FINISHED EDITING</a> 
</div>
<br>
<br>

<input type="hidden" name="movie_id" class="txtField" value="<?php echo $row['movie_id']; ?>">

MOVIE NAME <br>
<input type="text" name="movie_name"  value="<?php echo $row['movie_name']; ?>">
<br>
SEATS AVAILABLE <br>
<input type="text" name="seats" class="txtField" value="<?php echo $row['seats']; ?>">
<br>
TICKET PRICE<br>
<input type="text" name="ticket_price" class="txtField" value="<?php echo $row['ticket_price']; ?>">
<br>
START TIME<br>
<input type="time" name="start_time" class="txtField" value="<?php echo $row['start_time']; ?>">
<br>
END TIME<br>
<input type="time" name="end_time" class="txtField" value="<?php echo $row['end_time']; ?>">
<br>
DATE <br>
<input type="date" name="date" class="txtField" value="<?php echo $row['date']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>

</body>
</html>