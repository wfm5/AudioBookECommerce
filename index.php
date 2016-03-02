<!DOCTYPE html>
<html>
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Book Sellers</title>
</head>
<body>

<div class="container">
<?php

ob_start();
session_start();


include("app/model/dbConnect.php");
use app\model as Model;
use app\view as View;
$main = new Model\main($db);

?>
</div>

</body>

	<script type="javascript/text" src="js/jquery-2.1.4.min.js"></script>
	<script type="javascript/text" src="js/bootstrap.min.js"></script>
	<script type="javascript/text" src="js/npm.js"></script>

</html>