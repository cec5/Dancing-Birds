<?php // Common Function to Initialize MySQLi Connection
function databaseConnect() {
  $db = new mysqli('localhost', 'admin', 'dancingbirds', 'birds');
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	return $db;
}
?>
