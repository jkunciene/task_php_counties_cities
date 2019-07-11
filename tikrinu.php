<?php
require_once('db_functions.php');
$username = $_POST['username'];
$password = $_POST['password'];

loginToAdmin($username, $password);
print_r($password);
print_r($email);
 ?>
