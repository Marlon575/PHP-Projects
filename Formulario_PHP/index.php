<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="Formulario_CSS/style.css">
</head>
<body>
    <div class="card">
        <h2>Formulário de Cadastro</h2>
        <p class="sub">Preencha o formulário abaixo para se cadastrar.</p>
        <form action="processar.php" method="POST">
            <label> Nome Completo:</label>
            <input type="text" name="nome" placeholder=" Ex: Marlon Muchanga" required>
            <label> Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
            <label></label>

            <label>Curso</label>
            <select name="curso" required>
                <option value="">Selecione o curso</option>
                <option value="PWM">Programação Web e Multimédia</option>
                <option value="TI">Técnico de Informática</option>
                <option value="RT">Redes e Telecomunicações</option>
            </select>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>