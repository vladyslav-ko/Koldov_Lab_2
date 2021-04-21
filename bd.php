<?php 
$user = "root"; $password = "";
try{
$db = new PDO("mysql:host=localhost;dbname=magazines_", $user, $password);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
return $db;
?>
