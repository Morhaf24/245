<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title ?? "Untitled Page"; ?></title>

		<link rel="stylesheet" href="view/stylesheets/1.css">
		<script src="controller/requests.js"></script>
	</head>
	<body>
		<nav>
			<a href="index.php">Home</a>
			<a href="rooms.php">Räume</a>
			<a href="parks.php">Parkplätze</a>
			<a href="booked.php">Buchungen</a>
			<a href="logout.php">Ausloggen</a>
		</nav>
		<div class="content-container">
			<div class="content">