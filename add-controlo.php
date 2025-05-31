<?php

include("conexao.php");



$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$volume = $_POST['volume'];
$editor = $_POST['editor'];
$local_edicao = $_POST['local_edicao'];
$data_entrada = $_POST['data_entrada'];
$modo_aquisicao = $_POST['modo_aquisicao'];
$material_acompanhante = $_POST['material_acompanhante'];
$estante = $_POST['estante'];
$prateleira = $_POST['prateleira'];
$sinopse = $_POST['sinopse'];
$isbn = $_POST['isbn'];


// Verifica se o campo "foto" foi enviado corretamente
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto_nome = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $destino = "uploads/" . basename($foto_nome);

    // Garante que a pasta "uploads" exista
    if (!is_dir("uploads")) {
        mkdir("uploads", 0755, true);
    }

    // Move a imagem para a pasta
    if (move_uploaded_file($foto_tmp, $destino)) {

        // Prepara o SQL com placeholders para segurança
        $sql = "INSERT INTO livro (autor,  titulo, volume,editor, local_edicao, data_entrada, modo_aquisicao, material_acompanhante,estante, prateleira ,foto, sinopse,isbn ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

        $stmt = $conexao->prepare($sql);

        if (!$stmt) {
            die(" Erro ao preparar a query: " . $conexao->error);
        }


        // Associa os parâmetros (s = string, i = inteiro)
       $stmt->bind_param("ssssssssssssi", $autor, $titulo, $volume, $editor, $local_edicao, $data_entrada, $modo_aquisicao, $material_acompanhante, $estante, $prateleira, $foto_nome, $sinopse, $isbn);
 
        if ($stmt->execute()) {
            echo " Livro adicionado com sucesso!";
            // Redireciona de volta para a lista
            header("Location: adicionarlivro.php");
            exit;
        } else {
            echo " Erro ao adicionar livro: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo " Erro ao mover a imagem para a pasta 'uploads'.";
    }

} else {
    echo " Nenhuma imagem enviada ou erro no upload.";
}

// Fecha a conexão
$conexao->close();
?>