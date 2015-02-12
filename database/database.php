<?php 
/**
* Database connectivity class
*/
namespace database;
class Database
{
	private $DB_NAME;
	private $PASS;
	private $USER;
	private $HOST;
	private $con;	
	function __construct() {
			$this->DB_NAME = "tt14dbbythenoob";
			$this->USER    = "uthenoobtt14";
			$this->PASS    = "*QGiz5qc4G!E";
			$this->HOST    = "localhost";
			$this->con     = null;
	}
	public function connect() {
		$this->con = mysqli_connect($this->HOST,
							  $this->USER,
							  $this->PASS,
							  $this->DB_NAME);
		if(mysqli_connect_errno()) {
			
			return false;
		}
			
		return true;

	}
	public function con(){
		return $this->con;
	}
	public function close() {
		mysqli_close($this->con);
	}
}

//The CRUD IMPLEMENTATION

interface Crud {
 	public function select($id);
 	public function update($id, $updates);
 	public function insert($vals);
 	public function wipe($id);
 	public function getall();
 }

?>