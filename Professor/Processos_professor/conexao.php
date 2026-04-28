require_once 'config.php';

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conexao) {
    die("Erro na Conexão:". mysqli_connect_error());
}

mysqli_set_charset($conexao, DB_CHARSET);
?>