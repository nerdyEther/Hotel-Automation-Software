<!DOCTYPE html>
<html>

<head>
	<title>User Room Book</title>
</head>
<style>
	body {
		margin: 0;
		background: #f2f2f2;
	}

	table {
		font-size: 22px;
	}

	#td1 {
		background-color: #0085F1;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}

	td {
		text-align: left;
	}

	th {
		font-weight: bold;
		text-align: left;
	}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 22%;
		font-size: 24px;
		background-color: #0085F1;
		text-decoration: none;
		position: fixed;
		height: 100%;
		overflow: auto;
	}

	li {
		color: white;
	}

	li a {
		display: block;
		color: white;
		padding: 8px 16px;
		text-decoration: none;
	}

	li a:active {
		background-color: #e6b800;
		color: white;
		text-decoration: underline;
	}

	li a:hover {
		background-color: #e6b800;
		color: white;
		text-decoration: underline;
	}

	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19);
	}
</style>

<body>

	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">SKYLINE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="catering.php">Catering</a></li>
		<li><a href="index.php">Logout</a></li>

	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>

		<form class="basic_box" action="catering1.php" method="post">
			<table>
				<br><br>
				<tr>
					<th colspan="3">
						<p style="font-size: 28px; text-align: center; text-decoration: underline;">Catering Details</p>
					</th>
				</tr>


			</table>
			<table>
				<br>
				<tr>
					<th>Meals</th>
					<th>Service Cost per day</th>
				</tr>

				<tr>
					<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
					<td style="text-align: center;">150</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="lunch" value="on">Lunch</td>
					<td style="text-align: center;">300</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
					<td style="text-align: center;">120</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="dinner" value="on">Dinner</td>
					<td style="text-align: center;">250</td>
					<br>
				</tr>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="catering1.php" method="post">
							<input type="number" name="book_id">
					</td>
					<td style="text-align: center;"><button type="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>