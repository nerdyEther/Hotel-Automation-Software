<html>
<?php
$conn = new mysqli("localhost", "root", "", "iwp");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$breakfast = isset($_POST["breakfast"]) ? "true" : "false";
$lunch = isset($_POST["lunch"]) ? "true" : "false";
$snacks = isset($_POST["snacks"]) ? "true" : "false";
$dinner = isset($_POST["dinner"]) ? "true" : "false";


$bookidn = $_POST["book_id"];


$sqlbc = "SELECT * from confirmed_booking";
$result = mysqli_query($conn, $sqlbc);
while ($row = mysqli_fetch_row($result)) {
	if ($bookidn == $row[9]) {
		$price = $row[8];
		$days = $row[6];
	}
}


$additional = 0;

if (strcmp($breakfast, "true") == 0) {
	$additional = $additional + 150;
}
if (strcmp($lunch, "true") == 0) {
	$additional = $additional + 300;
}
if (strcmp($snacks, "true") == 0) {
	$additional = $additional + 120;
}
if (strcmp($dinner, "true") == 0) {
	$additional = $additional + 250;
}


$price = $price + $days * $additional;

$sql = "UPDATE user_room_book SET price = '$price' WHERE book_id = $bookidn";
mysqli_query($conn, $sql);

$sql = "UPDATE confirmed_booking SET price = '$price' WHERE book_id = $bookidn";
mysqli_query($conn, $sql);

header("Location: catering2.php");
?>

</html>