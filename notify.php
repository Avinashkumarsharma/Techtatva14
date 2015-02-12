<?php 
use \admin\Notify ;
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(ADMIN.'/notification.php');
if(!$_SERVER['REQUEST_METHOD']=='POST')
header("Location:index.php");
$notify = new Notify();
$res = $notify->getall();
if( isset($_POST['count']) && $_POST['count'] !="" ) {
  $count = mysqli_num_rows($res);
  echo $count;
  
}
else if(isset($_POST['info']) && $_POST['info'] !="") {
	while($rows = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
		$info = $rows['msg'];
		$link = $rows['link'];
		echo "<li><a href='$link'>$info</a></li>";

	}
}
?>