!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados do Estudante</title>
    <link rel="stylesheet" href="Formulario.css/style.css">
</head>
<body>

    <div class="card">
        <h2>Dados Recebidos</h2>

        <?php
            $nome = $_POST['nome'];
            $data  = $_POST['data_nascimento'];
            $curso = $_POST['curso'];

            echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
            echo "<p><strong>Data de nascimento:</strong> " . htmlspecialchars($data) . "</p>";
            echo "<p><strong>Curso:</strong> " . htmlspecialchars($curso) . "</p>";
        ?>

        <a href="index.php">← Voltar</a>
    </div>

</body>
</html>