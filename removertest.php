<?php
include("conexao.php");
$query = "SELECT * FROM livro";
$result = $conexao->query($query);

session_start();
if (isset($_SESSION['nome'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content="flat ui, admin  Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
   

</head>

<body>
   
        <!-- Sidebar/menu incluído -->

        <div class="container mt-5">
        <h2 class="mb-4">📘 Lista de Livros</h2>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Volume</th>
                    <th>Editor</th>
                    <th>local de Edição</th>
                    <th>Data Entrada</th>
                    <th>Modo de aquisição</th>
                    <th>Estante</th>
                    <th>Prateleira</th>
                    <th>Foto</th>
                    <th>Sinopse</th>
                    <th>ISBN</th>
                    <th>Ações</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($livro = $result->fetch_assoc()): ?>
                    <tr>

                        <td><?= htmlspecialchars($livro['numero_registo']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['titulo']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['autor']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['volume']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['editor']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['local_edicao']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['data_entrada']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['modo_aquisicao']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['estante']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['prateleira']) ?>
                        </td>
                        <td><img src="/biblioteca/admin/uploads/<?= htmlspecialchars($livro['foto']) ?>" alt="Capa do livro"
                                style="width: 100px; height: auto;">
                        </td>
                        <td><?= htmlspecialchars($livro['sinopse']) ?>
                        </td>
                        <td><?= htmlspecialchars($livro['isbn']) ?>
                        </td>
                        <td>
                            <a href="removertest.php?id=<?= $livro['numero_registo'] ?>" class="btn btn-sm btn-primary">
                                Remover
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


<?php $conexao->close(); ?>
                                    

</body>

</html>
 <?php
} else {
  header("Location: login.php");
  exit();
} ?>