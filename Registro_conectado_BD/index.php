<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Conectado ao Banco de Dados</title>
    <link rel="stylesheet" href="Registro_CSS/styles.css">
</head>
<body>
    <div class="card">
        <h2> Registro </h2>
        <p class ="sub"> Preencha os campos registro. </p>

<form action="Registro_PHP/processar.php" method="POST">

            <label> Nome Comploto: </label>
            <input type ="text" name= "nome_completo" 
            placeholder=" Ex: Kayne Muchanga" required> 

            <label>Username: </label>
            <input type= "text" name="username"
            placeholder="EX: marlon544" required>   

            <label>Password:</label>
            <input type="password" name="password"
            placeholder="Minimo 6 caracteres" required>

           <label>Tipo de Utilizador:</label>
    <select name="user_de_criacao" required>
        <option value="">Selecione o tipo</option>
        <option value="Principal">👑 Utilizador Principal</option>
        <option value="Secundario">👤 Utilizador Secundário</option>
    </select>

            <div class="botoes">
            <button type="submit">Registrar</button>
            <button type="reset">Limpar</button>
            </div>
            
        </form>
    </div>
</body>
</html>
          