<?php
$address = '';
$city = '';
$zip = '';
if(isset($_GET["password"])) {
$db_connection = pg_connect("host=ec2-174-129-220-12.compute-1.amazonaws.com port=5432 dbname=da92c70sm552i5 user=ssrokyoydqyfei password=a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c");
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$email=$_POST['email'];
$state=$_POST['myList'];
$query = "INSERT INTO users VALUES ('$_POST[name]', '$email', '$_POST[address]', '$_POST[city]',
  '$state', '$_POST[zip]', '$hashed_password')";

$result = pg_query($db_connection, $query);
}
?>
