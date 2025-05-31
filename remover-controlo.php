<?php
// Inclui o arquivo de conexão com o banco de dados
include("conexao.php");

// Verifica se foi enviado o ID do livro via POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Recupera o caminho da foto associada ao livro, se houver
    $queryFoto = "SELECT foto FROM livro WHERE numero_registo = ?";
    $stmtFoto = $conexao->prepare($queryFoto);
    $stmtFoto->bind_param("i", $id);
    $stmtFoto->execute();
    $stmtFoto->bind_result($foto);
    $stmtFoto->fetch();
    $stmtFoto->close();

    // Deleta o registro do livro no banco de dados
    $queryDelete = "DELETE FROM livro WHERE numero_registo = ?";
    $stmtDelete = $conexao->prepare($queryDelete);
    $stmtDelete->bind_param("i", $id);

    if ($stmtDelete->execute()) {
        // Se houver uma foto e ela existe no sistema de arquivos, remove
        if (!empty($foto) && file_exists($foto)) {
            unlink($foto); // Apaga o arquivo do servidor
        }

        echo "Livro removido com sucesso!";
    } else {
        echo "Erro ao remover o livro: " . $stmtDelete->error;
    }

    $stmtDelete->close();
} else {
    echo "ID do livro não fornecido.";
}

// Link para voltar à lista
echo "<br><a href='testlistar.php'>Voltar à lista</a>";
?>
