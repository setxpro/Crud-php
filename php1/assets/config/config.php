<?php 
try {
$db_name = 'controle';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

} catch(PDOException $e) {
  echo "Error with database".$e->getMessage();

} catch(Exception) {
  echo "Generic Error".$e->getMessage();
}
