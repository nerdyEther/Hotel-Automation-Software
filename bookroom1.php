<html>
<?php
$conn = new mysqli("localhost", "root", "", "iwp");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$room = $_POST["rooms"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];

$swimming = isset($_POST["swimming"]) ? "true" : "false";
$in = strtotime($checkin);
$out = strtotime($checkout);
$diff = abs($out - $in);
$years = floor($diff / (365 * 60 * 60 * 24));
$months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
$sql = "SELECT * FROM temp_session";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$phone = $row[0];
$name = $row[2];
$id = $row[4];
$status = "Waiting";
$Room_no = "To be Provided";
$price = 0;
if (strcmp($room, "Single bed Non AC") == 0) {
	$price = $price + 500;
} else if (strcmp($room, "Double bed Non AC") == 0) {
	$price = $price + 1000;
} else if (strcmp($room, "Single bed AC") == 0) {
	$price = $price + 1500;
} else if (strcmp($room, "Double bed AC") == 0) {
	$price = $price + 2000;
}
$price = $price * $days;
$additional = 0;

if (strcmp($swimming, "true") == 0) {
	$additional = $additional + 300;
}
$sqlt = "SELECT * from book_id";
$result = mysqli_query($conn, $sqlt);
$row = mysqli_fetch_row($result);
$t = $row[0];
$price = $price + $days * $additional;
$sql = "INSERT INTO user_room_book VALUES ('$phone', '$name', '$id', '$room', '$checkin', '$checkout', '$days', '$swimming', '$status', '$price', '$t','$Room_no')";
mysqli_query($conn, $sql);
$t = $t + 1;
$sqlt = "DELETE from book_id";
mysqli_query($conn, $sqlt);
$sqlt = "INSERT INTO book_id VALUES ('$t')";
mysqli_query($conn, $sqlt);
header("Location: bookroom2.php");
?>

</html>