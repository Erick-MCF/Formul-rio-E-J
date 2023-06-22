<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex1";

// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Inserindo os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();
?>
