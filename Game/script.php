<?php

$nome = $_POST['nometxt'];
$email = $_POST['emailtxt'];
$senha = $_POST['senhatxt'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 
$sql = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
if (mysqli_query($conn, $sql)) {
      echo "Cadastro Realizado com sucesso!";
	  echo "<br>";
	 printf("<a href='Game.html'>Clique aqui para realizar um novo cadastro</a><br>"); 
} else {
      echo "ERRO AO CADASTRAR! TENTE NOVAMENTE MAIS TARDE";
}
mysqli_close($conn);
?>