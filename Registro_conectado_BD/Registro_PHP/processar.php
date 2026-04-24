<?php
include 'config.php';

$pin_admin1 = "1234";
$pin_admin2 = "5678";

$nome     = $_POST['nome_completo'];
$username = $_POST['username'];
$password = $_POST['password'];
$pin      = $_POST['pin'];
$curso    = $_POST['curso'];
$data     = date('Y-m-d');

if ($pin === $pin_admin1) {
    $user_de_criacao = "Admin1";
} elseif ($pin === $pin_admin2) {
    $user_de_criacao = "Admin2";
} else {
    die("<div style='font-family:sans-serif; text-align:center; margin-top:50px;'>
        <p style='color:red; font-size:20px;'>❌ PIN inválido!</p>
        <p>Não tens permissão para registar utilizadores.</p>
        <br><a href='../index.php'>← Voltar</a>
    </div>");
}

$password_segura = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user 
        (nome_complito, username, password, data_de_criacao, user_de_criacao, Cursos) 
        VALUES (?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nome, $username, $password_segura, $data, $user_de_criacao, $curso);


if ($stmt->execute()) {
    echo "<div style='font-family:sans-serif; text-align:center; margin-top:50px;'>";
    echo "<p style='color:green; font-size:20px;'>✅ Utilizador registado com sucesso!</p>";
    echo "<p>Registado por: <strong>" . $user_de_criacao . "</strong></p>";
    echo "<p>Curso: <strong>" . $curso . "</strong></p>";
    echo "<br><a href='../index.php'>← Registar outro</a>";
    echo "</div>";
} else {
    echo "<p style='color:red;'>❌ Erro: " . $conn->error . "</p>";
}

$stmt->close();
$conn->close();
?>