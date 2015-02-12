<?php
/**
* ADMINISTRATOR
*/
namespace admin;
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(DB.'/database.php');
use database\Database;

class Admin  extends Database
{	
	private $id;
	private $user;
	private $pass;
	private $model;
	function __construct($model='admin')
	{	parent::__construct();
		$this->model = $model;
		$this->connect();
	} 

	public function add($user, $pass) {
		$pass = md5($pass);
		$user = mysqli_real_escape_string($this->con(), $user);
		$query = "INSERT INTO $this->model(user, pass) VALUES('$user', '$pass')";
		$res = mysqli_query($this->con(), $query);
		if(!$res)
			return false;
		else
			return true;
	}

	public function getid() {
		return mysqli_insert_id($this->con());
	}

	private function auth($user, $pass) {
		$pass = md5($pass);
		$user = mysqli_real_escape_string($this->con(), $user);
		$query = "SELECT user, pass FROM $this->model 
				  WHERE user = '$user' AND pass = '$pass'";
		$res = mysqli_query($this->con(), $query);
		if(mysqli_num_rows($res)==1){
			return true;
		}
		else {
			return false;
		}
	}

	public function login($user, $pass) {
		if(!$this->auth($user, $pass))
			return false;
		session_start();
		$_SESSION['username']=$user;
		return true;
	}
	public function logout($redirect) {
		session_destroy();
		header("Location:'$redirect'");
	}
}
?>