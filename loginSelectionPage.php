<? php
session_start(); 
echo "Welcome"; #.$_SESSION['loggedCustomerEmail'];
require_once('inc/connection.php'); ?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selection Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<div>
		<h2> Select as you wish </h2> 


	</div>
	<div class="panel-body">
		<form action="findItemN.php" method="submit">
			<button type="submit">Find Shoes</button>
		</form>
		<form action="updateCustomerDetailsHomePage.php" method="submit">
			<button type="submit">Update Account Details</button>
		</form>
		<form action="delete.php" method="submit">
			<button type="submit">Delete Account</button>
		</form>
		<form action="readDetails.php" method="submit">
			<button type="submit">Read Account</button>
		</form>
		<img src="img/fitshoesLogo.png" width="200" height="100" />
	</div>
</html>



