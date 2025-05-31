<?php
include 'conexao.php';

$busca = isset($_GET['busca']) ? $conn->real_escape_string($_GET['busca']) : '';

$sql = "SELECT id, titulo, autor FROM livro WHERE titulo LIKE '%$busca%' OR autor LIKE '%$busca%' OR sinopse LIKE '$busca' LIMIT 50";
$result = $conn->query($sql);

$livros = [];
while ($row = $result->fetch_assoc()) {
    $livros[] = $row;
}

echo json_encode($livros);
?>
