<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
if(!isset($_POST) || !isset($_POST['id'])) die();
session_start();
if($_SESSION['id'] != $_POST['id']) die(); 
$response = [];
$dbconn = pg_connect("host=localhost port=8080 dbname=demodatabase user=postgres password=123456789");
$newPass = pg_escape_string($dbconn, $_POST['newPass']);
$query = "UPDATE users SET password = '$newPass' WHERE username = '".$_SESSION['user']."'";
$result = pg_query($con, $query);
if($result) {
	$response['status'] = 'done';
} else {
	$response['status'] = 'error';
}
echo json_encode($response);