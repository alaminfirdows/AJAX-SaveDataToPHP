<?php
include 'database.php';
if (isset($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name = 'admin';
}

$insert = $db->query("INSERT INTO `users`(`name`) VALUES ('$name')");

if ($insert) {
	echo "Success";
} else {
	echo "Error";
}
?>