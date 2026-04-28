<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Professor</title>
        <link rel="stylesheet" href="Professor_CSS/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="card">

                <div class="card-header">
                    <h1>Registro de Professor</h1>
                    <p>Sistema de registro de professores</p>
                </div>

                <form action="Processos_professor/salvar.php" method="POST" id="formProfessor">

                    <div class="grupo">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Jaquilene Canaiba" required>
                    </div>

                    <div class="grupo">
                        <label for="area_formacao">Área de Formação</label>
                        <select id="area_formacao" name="area_formacao" required>
                            <option value="">-- Selecione --</option>
                            <option value="Engenharia Informatica">Engenharia Informática</option>
                            <option value="Historia e Literatura">História e Literatura</option>
                            <option value="Ciencia da Computacao">Ciência da Computação</option>
                            <option value="Redes de Computacao">Redes de Computação</option>
                            <option value="Engenharia de Software">Engenharia de Software</option>
                        </select>
                    </div>

                    <div class="grupo">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" id="data_nascimento" name="data_nascimento" required>
                    </div>

                    <div class="grupo">
                        <label for="disciplina">Disciplina que Leciona</label>
                        <select id="disciplina" name="disciplina" required>
                            <option value="">-- Selecione --</option>
                            <option value="Engenharia Informatica">Engenharia Informática</option>
                            <option value="Historia e Literatura">História e Literatura</option>
                            <option value="Ciencia da Computacao">Ciência da Computação</option>
                            <option value="Redes de Computacao">Redes de Computação</option>
                            <option value="Engenharia de Software">Engenharia de Software</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-registar">Registar o Professor</button>

                </form>

            </div>
        </div>

        <script src="Professor_JS/script.js"></script>
    </body>
</html>