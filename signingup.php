<?php
1db_connection = pg_connect("ec2-174-129-220-12.compute-1.amazonaws.com port=5432 dbname=da92c70sm552i5
user=ssrokyoydqyfei password=a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c");
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$email=$_POST['email'];
$query = "INSERT INTO users VALUES ('$_POST[name]', '$email', '$_POST[address]', '$_POST[city]', '$hashed_password'
  '$_POST[state]', '$_POST[zip]')";
$result = pg_query(1db_connection, $query);
?>
