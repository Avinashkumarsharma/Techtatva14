<?php
//checking is the session is already set
use \admin\Admin;
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(ADMIN.'/admin.php');
session_start();
$redirect="dashboard.php";
$err='';
$admin = new Admin();
if(isset($_SESSION['username'])) {
    header("Location:".$redirect);
}
else if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($admin->login($user, $pass)) {
            header("Location:".$redirect);
        }
        else {
            $err = "Incorrect Details";
        }
    }
}

?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Techtatva|ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="src/reset.css">
        <style>
        	body{
        		font-family: 'Ubuntu', sans-serif;
				font-weight:lighter;
				color:#000000;
				background:#1e1e1e;
        	}
        	#container{
        		width:80%;
        		margin:auto;
        		text-align:center;
        	}
        	header{
        		width:80%;
        		margin:2em auto;
        		text-align: center;
        	}
        	header>img{
        		margin:2em auto;
        		margin-left:2em;
        		width:100%;
        		max-width:522px;
        		min-width:200px;
        		height:auto;
        	}
        	#loginf{
        		color:#B3D4FC;
        		width:50%;
        		margin:2em auto;
        	}
        	input{
        		border-radius:5px;
        		margin:1em;
        		color:#9F1D22;
        		}
        	#error{
        		color:orange;
        	}
        </style>
    </head>
    <body>
    	<div id="container">
    		<header>
    			<img src="../assets/logobig.png" alt="techtatva"/>
    		</header>
    		<div id="loginf">
    	<form id="admin" action="pro-admin.php" method="post">
    		<span id="error"><?php echo $err ?></span><br>
    		<label for="user">username:</label>
    		<input type="text" name="user" id="user" placeholder="username" required/><br>
    		<label for="pass">password:</label>
    		<input type="password" name="pass" id="pass" placeholder="password" required/><br>
    		<input type="submit" value="Submit" id="submit" name="submit" />
    		</div>
    	</form>
        
    	</div>
    	
    </body>
 </html>
        
