<?php
$servername = "localhost:3306";
$database = "cadastro";
$username = "root";
$password = "jk100991";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$nome = $_POST["nome"]; 
$cpf = $_POST["cpf"];
$email = $_POST["email"]; 
$local = $_POST["local"]; 
$telefone = $_POST["telefone"];

 
$sql = "INSERT INTO formulario (nome, local, email, cpf, telefone) VALUES ('$nome', '$local','$email' ,'$cpf', '$telefone')";
if (mysqli_query($conn, $sql)) {
       header('Location:http://localhost/sistema_de_pedido/retorno.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


