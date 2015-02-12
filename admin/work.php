<?php
use \admin\Notify ;
session_start();
if(!isset($_SESSION['username']) || $_SERVER['REQUEST_METHOD']=='GET')
	header("Location:../");
require_once($_SERVER['DOCUMENT_ROOT'].'/route.php');
require_once(ADMIN."/notification.php");
$notify = new Notify();
if(isset($_POST['delete']) && isset($_POST['id'])) {
	$id = $_POST['id'];
	$res = $notify->wipe($id);
	if($res)
		echo true;
	else echo false;
}
if(isset($_POST['notify']) && isset($_POST['url']) && isset($_POST['info'])) {
	$res;
	$data = array('msg' => $_POST['info'], 'link' => $_POST['url'] );
	if(isset($_POST['update']) && $_POST['update'] !="") {
		$res = $notify->update($_POST['update'], $data);
	}
	else 
	$res = $notify->insert($data);
	if($res)
		header("Location:dashboard.php");
	else echo "Failed, Goto to dasboard <a href = 'dashboard.php'>Dashboard</a>";
}
?>