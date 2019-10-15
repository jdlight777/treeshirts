<?php
// $address = '';
// $city = '';
// $state = '';
// $zip = '';
// if(isset($_GET["password"])) {
if(isset($_POST['email'])){
$db_connection = pg_connect("host=ec2-174-129-220-12.compute-1.amazonaws.com port=5432 dbname=da92c70sm552i5 user=ssrokyoydqyfei password=a444cf799a4f5fb35284fa8442d4e831b25348ef1ac645da8a48c7449578984c");
$error = '';
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$email=$_POST['email'];
$state=$_POST['myList'];
$q = "SELECT * FROM users WHERE email = '$email'";
$r = pg_query($db_connection, $q);
$count = pg_affected_rows($r);
if ($count>0){
  $error = 'That email is already registered.';
  echo($error);
}
else{
  $query = "INSERT INTO users VALUES ('$_POST[username]', '$email', '$_POST[address]', '$_POST[city]',
    '$state', '$_POST[zip]', '$hashed_password')";
  $result = pg_query($db_connection, $query);
    print pg_result_error($result);
}
}
// }
?>
