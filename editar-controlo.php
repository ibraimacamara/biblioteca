<?php
include("conexao.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
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


// >>> AQUI: Bloco que trata a foto <<<
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $nomeFoto = basename($_FILES['foto']['name']);
    $caminhoDestino = 'uploads/' . $nomeFoto;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoDestino)) {
        $foto = $caminhoDestino;
    } else {
        echo "Erro ao mover o arquivo da foto.";
        $foto = null;
    }
} else {
    // Recuperar foto atual do banco se não foi enviada nova
    $foto = recuperarFotoAtual($id, $conexao);
}

// >>> Atualização no banco de dados <<<
$query = "UPDATE livro SET 
    titulo = ?, autor = ?, volume = ?, editor = ?, local_edicao = ?, 
    data_entrada = ?, modo_aquisicao = ?, material_acompanhante = ?,
    estante = ?, prateleira = ?, foto = ?, sinopse = ?, isbn = ?
    WHERE numero_registo = ?";

$stmt = $conexao->prepare($query);
$stmt->bind_param(
    "sssssssssssssi", 
    $titulo, $autor, $volume, $editor, $local_edicao, 
    $data_entrada, $modo_aquisicao, $material_acompanhante, 
    $estante, $prateleira, $foto, $sinopse, $isbn, $id
);

if ($stmt->execute()) {
    echo "Livro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar livro: " . $stmt->error;
}

echo "<br><a href='testlistar.php'>Voltar à lista</a>";


// >>> Função para recuperar a foto atual <<<
function recuperarFotoAtual($id, $conexao) {
    $query = "SELECT foto FROM livro WHERE numero_registo = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($fotoAtual);
    $stmt->fetch();
    $stmt->close();
    return $fotoAtual;
}
?>
