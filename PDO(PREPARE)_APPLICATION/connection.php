<?php
try
{
  $conn = new PDO ("mysql:host=localhost;dbname=app_pdo","root","");
  //echo "Connection Success !!!";
}
catch(PDOException $e)
{
	echo "Connection Error".$e->getMessage();
}

?>