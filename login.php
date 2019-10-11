<?php
session_start();

if(isset($_POST['nome']) && !empty($_POST['nome'])){

$dsn = "mysql:dbname=blog;host=localhost";
$dbname = "root";
$dbpass = "";

$db = new PDO($dsn,$dbname,$dbpass);


$nome = addslashes($_POST['nome']);
$senha = md5(addslashes($_POST['senha']));

$sql = $db ->query("SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha' ");

if($sql->rowCount() > 0){
  $dado = $sql->fetch();
  
  $_SESSION['id'] = $dado['id'];

  header("Location: index.php");
}



}

?>


<form method="POST">
Nome:</br>
<input type="text" name="nome"/></br></br>
senha:</br>
<input type="password" name="senha"/></br>
<input type="submit" value="Enviar"/>
</form>
