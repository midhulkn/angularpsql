  <?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
if(!isset($_POST)) die();
session_start();
$response = [];
$dbconn = pg_connect("host=localhost port=8080 dbname=demodatabase user=postgres");
$username = pg_escape_string($dbconn, $_POST['username']);
$password = pg_escape_string($dbconn, $_POST['password']);
$query = ("INSERT INTO users (username, password) VALUES ('$username', '$password')");
$result = pg_query($dbconn, $query);
if ($result == True) {
	$response['status'] = 'loggedin';
}
else {
	$response['status'] = 'error';
	}

echo json_encode($response);


?>
