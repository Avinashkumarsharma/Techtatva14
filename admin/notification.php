<?php
/**
* The Notification class 
*/
namespace admin;
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(DB.'/database.php');
use \database\Database;
use \database\Crud;
class Notify extends Database implements Crud 
{
	private $id;
	private $msg;
	private $link;
	private $model;
	const model = 'notification';
    const msg = 'msg';
    const link = 'link';
	const id = 'id';
	function __construct()
	{	parent::__construct();
		$this->id = NULL;
		$this->content = NULL;
		$this->url = NULL;
		$this->model = Notify::model;
		$this->connect();
	}
	function get($name) {
		switch ($name) {
			case Notify::id:
				return $this->id;
				break;
			case Notify::msg:
				return $this->msg;
				break;
			case Notify::link:	
				 return $this->link;
				break;
			
			default:
				return NULL;
				break;
		}
	}

	private function sanatize($str) {
		$this->connect();
		mysqli_real_escape_string($this->con(), $str);
		return $str;
	}
	private function validateURL($url) {
		if(!filter_var($url, FILTER_VALIDATE_URL))
		return false;
		return true;
	}
	private function query($query) {
		$this->connect();
		$res = mysqli_query($this->con(), $query); //or die(mysqli_error($this->con()));
		if($res)
			return $res;
		else return NULL;
	}
	public function select($id) {
		$query = "SELECT * FROM ".Notify::model." WHERE ID = $id";
		$res = mysqli_query($this->con(), $query);
		if(!mysqli_num_rows($res))
			return $this;
		$rows = mysqli_fetch_array($res);
		$this->id = $rows['id'];
		$this->msg = $rows['msg'];
		$this->link = $rows['link'];
		return $this;
	}

	public function update($id, $updates) {
		$updates[Notify::msg] = $this->sanatize($updates[Notify::msg]);
		if(!$this->validateURL($updates[Notify::link]))
			return false;
		$str = array_keys($updates);
		$val = "";				
		$i = 0;
		foreach ($updates as $key => $value) {
			$value = "'".$value."'";
			$val .= ($str[$i++] . " = " . $value . ", ");
		}
		$val = substr($val, 0, strlen($val) - 2);
		$model = $this->model;
		$query = "UPDATE $model SET $val where id = $id";
		$res = $this->query($query);
		if($res){
			return true;
		}
		else 
			return false;
	}
	public function insert($val) {
		if($val == NULL)
			return false;
		$m = Notify::msg;
		$u = Notify::link;
		$t = Notify::model;
		$msg = $this->sanatize($val[$m]);
		if(!$this->validateURL($val[$u]))
		return false;
		$link = $val[$u];
		$query = "INSERT INTO $t($m, $u) VALUES('$msg', '$link')";
		$res = mysqli_query($this->con(), $query);
		if(!$res) {
			return false;
		}
		else 
			return true;
	}
	public function wipe($id) {
		$model = Notify::model;
		$query = "DELETE FROM $model where id = $id";
		$res = $this->query($query);
		if($res)
			return true;
		return false;
	}
	public function getall() {
		$model = Notify::model;
		$query = "SELECT * FROM $model ORDER BY id DESC";
		$res = $this->query($query);
		if($res)
			return ($res);
		else NULL;
	}
}

?>