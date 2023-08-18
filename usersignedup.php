<html>

<body><?php
		$conn = new mysqli("localhost", "root", "", "iwp");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$phone = $_POST["phone"];
		$name = $_POST["name"];
		$dob = $_POST["dob"];
		$t = rand(1, 1000);


		$sql = "INSERT INTO frequent_user(token_no, name, phone) VALUES('$t',  '$name', '$phone' )";
		if ($conn->query($sql) == TRUE) {
			header("Location: user_created.php");
		} else {
			header("Location: user_not_created.php");
		}
		?>
</body>

</html>