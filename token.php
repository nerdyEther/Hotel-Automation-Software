<html>

<body>
	<?php
	$conn = new mysqli("localhost", "root", "", "iwp");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$bid = $_POST["token_no"];



	$sql = "SELECT * from frequent_user";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_row($result)) {
		if ($bid == $row[0]) {
			$name = $row[1];
			$phone = $row[2];
		}
	}





	$sql1 = "SELECT * from confirmed_booking";
	$result1 = mysqli_query($conn, $sql1);
	while ($row1 = mysqli_fetch_row($result1)) {
		
		if ($name == $row1[1] && $phone == $row1[0]) {
			$id1 = $row1[9];
			$newprice = $row1[8] * 0.9;
			$sql2 = "UPDATE confirmed_booking SET price = '$newprice' WHERE book_id='$id1'";
			mysqli_query($conn, $sql2);
			header("Location: user_payment.php");
		}
	}
	?>
</body>

</html>