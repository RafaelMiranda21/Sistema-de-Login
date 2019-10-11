<meta charset="utf-8"/>
<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
	echo"Área Restrita...";
}else{
	header("Location: login.php");
}


?>

