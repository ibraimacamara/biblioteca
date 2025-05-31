<?php
$host = "localhost";
$user = "root";
$password = ""; // deixe em branco se não tem senha no XAMPP
$dbname = "biblioteca";

// Conexão com MySQL
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Caminho do ficheiro CSV
$ficheiroCSV = "livro.csv";

if (($handle = fopen($ficheiroCSV, "r")) !== FALSE) {
    $linha = 0;

    while (($dados = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if ($linha == 0) {
            $linha++;
            continue; // pula a primeira linha (cabeçalhos)
        }

        // Atribuir campos
        $numero_registo = (int) $dados[0];
        $autor = $conn->real_escape_string($dados[1]);
        $titulo = $conn->real_escape_string($dados[2]);
        $volume = $conn->real_escape_string($dados[3]);
        $editor = $conn->real_escape_string($dados[4]);
        $local_edicao = $conn->real_escape_string($dados[5]);
        $data_entrada = $dados[6];
        $modo_aquisicao = $conn->real_escape_string($dados[7]);
        $material_acompanhante = $conn->real_escape_string($dados[8]);
        $estante = $conn->real_escape_string($dados[8]);
        $prateleira = $conn->real_escape_string($dados[8]);

        // Query de inserção
        $sql = "INSERT INTO livro (
                    numero_registo, autor, titulo, volume, editor, local_edicao, data_entrada, modo_aquisicao, material_acompanhante, estante, prateleira
                ) VALUES (
                    $numero_registo, '$autor', '$titulo', '$volume', '$editor', '$local_edicao', '$data_entrada', '$modo_aquisicao', '$material_acompanhante', '$estante','$prateleira'
                )";

        if ($conn->query($sql) === TRUE) {
            echo "Registo $numero_registo importado com sucesso.<br>";
        } else {
            echo "Erro ao importar registo $numero_registo: " . $conn->error . "<br>";
        }

        $linha++;
    }

    fclose($handle);
} else {
    echo "Não foi possível abrir o ficheiro CSV.";
}

$conn->close();
?>
