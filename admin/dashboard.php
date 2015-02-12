<?php
use \admin\Notify;
session_start();
if(!isset($_SESSION['username']))
	header("Location:../");
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(ADMIN."/notification.php");
$notification = new Notify();
?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DashBoard|Admin</title>
<link rel="stylesheet" type="text/css" href="../src/reset.css">
<script src = "../src/jquery.min.js"></script>
<style type="text/css">
body {
	background-color: #eeeeee;
}
h1{
	font-size: 2em;
}
header{
	color: #eee;
	font-size: 2.2em;
	text-align: center;
	background-color: #1e1e1e;
	padding: 1em;
}
#notification {
	text-align: center;
}
input {
	min-width: 300px;
	min-height: 20px;
	border-radius: 5px;
	border: none;
	box-shadow: 0 0 1px #1e1e1e;
	display: table-cell;
	margin-bottom: 1em;
}
label {
	font-size: 1.5em;
	margin: 1em;
	padding: 1em;
}
h2 {
	text-align: center;
	font-size: 2em;
	margin: 1em;
}
input[type = submit] {
	background-color: blue;
	padding: 1em;
	min-width: 100px;
	color: #ffffff;
}
.delete {
	cursor: pointer;
	background-color: #e7233f;
	color: #fff;
}
.update {
	cursor: pointer;
	background-color: orange;
}
table { 
  width: 80%; 
  margin: 2em auto;
  border-collapse: collapse; 
}

tr {
	background:#1e1e1e;
}
tr:nth-of-type(odd) { 
  background: #292929; 
}
th {
	font-size:1.1em; 
	background-color:#fff;
	color:#000;
	padding: 10px; 
  	border: 1px solid #ddd; 
  	text-align: left; 
}
td{ 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left;
  color: #fff; 
}

</style>

</head>

<body>
	<header>
		<h1>Techtatva'14|Dashboard</h1>
	</header>
	<h2>Notification</h2>
	<section id = "notification">
	<form action="work.php" method = "post">
		<label for = "info">contents</label><br>
		<textarea rows = "5" cols ="50" name = 'info' id ='info' required></textarea><br>
		<label for = "url" >url</label><br>
		<input type = "url" name = 'url' id = "url" required><br>
		<input type = "text" name = "update" style="display:none" id = "update"/>
		<input type = "submit" id = "nsubmit" value = "notify" name = "notify">
	</form>
	</section>
	<section id ="list">
		<table>
			<tr>
             <th>ID</td>
             <th>Content</td>
             <th>link</td>
             <th>Delete</td>
             <th>Update</td>
             <?php 
             	
             	$data = $notification->getall();
             	while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
             	echo "<tr>";
             	echo "<td>".$row['id']."</td>";
             	echo "<td>".$row['msg']."</td>";
             	echo "<td>".$row['link']."</td>";
             	echo "<td class = 'delete' id =". $row['id'].">Delete</td>";
             	echo "<td class = 'update' id =". $row['id'].">Update</td>";
             	echo "</tr>";
             	}
             	
             ?>
			</tr>
		</table>
	</section>
	<script src = "js/admin.js"></script>
</body>

</html>