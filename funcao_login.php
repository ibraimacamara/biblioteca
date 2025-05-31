<?php
session_start();

// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "biblioteca");

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Função de login segura
function login($user, $pass) {
    global $conexao;

    $stmt = mysqli_prepare($conexao, "SELECT nome FROM utilizador WHERE nome = ? AND pass = ?");
    mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $nome);
        mysqli_stmt_fetch($stmt);
        $_SESSION["nome"] = $nome;
        header("Location: home.php");
        exit();
    } else {
        echo '<script>alert("Erro de autenticação"); window.location.href="login.php";</script>';
        exit();
    }
}

// Recebe os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['nome'] ?? '';
    $pass = $_POST['pass'] ?? '';
    login($user, $pass);
}
?>