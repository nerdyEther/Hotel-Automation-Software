<!DOCTYPE html>
<html>

<head>
	<title>Confirm Room Book</title>
</head>
<style>
	body {
		margin: 0;
		background: #f2f2f2;
	}

	table {
		font-size: 22px;
	}

	p {
		font-size: 24px;
	}

	#td1 {
		background-color: #203D70;
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
		background-color: #203D70;
		text-decoration: none;
		position: fixed;
		height: 100%;
		overflow: auto;
	}

	li {
		color: white;
	}

	a {
		display: block;
		color: white;
		padding: 8px 16px;
		text-decoration: none;
	}

	a:active {
		background-color: #e6b800;
		color: white;
		text-decoration: underline;
	}

	a:hover {
		background-color: #e6b800;
		color: white;
		text-decoration: underline;
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
		<p>Catering information is submitted successfully!</p>
		<P><br>Click Next to get redirected to Confirmed Bookings List page </P>
		<a href="confirmed_bookings.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>

</html>