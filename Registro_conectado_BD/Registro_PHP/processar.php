<?php 
include 'config.php';
$nome = $_POST['nome_completo'];
$username = $_POST['username'];
$password = $_POST['password'];
$curso = $_POST['user_de_criacao'];
$data = date('Y-m-d');

$password_segura = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user 
(nome_complito, username, password, user_de_criacao, data_de_criacao) 
VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssss", $nome, $username, $password_segura, $curso, $data);

if ($stmt->execute()) {
    echo "<p style='color:green'>✅ Registo feito com sucesso!</p>";
    echo "<a href='index.php'>← Voltar</a>";
} else {
    echo "<p style='color:red'>❌ Erro: " . $conn->error . "</p>";
}

$stmt->close();
$conn->close();
?>