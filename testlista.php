<?php
include("conexao.php");

$query = "SELECT * FROM livros";
$result = $conexao->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Pied Piper Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>The Pied Piper Blog</h1>
    <div class="blog-grid">
        <!-- Cards -->
        <?php
        $posts = [
            [
                "title" => "How Our ICO Almost Failed",
                "text" => "This is a short story about how we uncovered an insane problem with our ICO, fixed it, and still managed to secure vast funding.",
            ],
            [
                "title" => "Why I'm the Best Programmer Ever",
                "text" => "I feel like not everybody outside of Pied Piper knows it, so I wanted to make it clear why I'm the best programmer in the world.",
                "featured" => true
            ],
            [
                "title" => "Secrets of Decentralization",
                "text" => "What makes decentralization so great? Let me enlighten you with my wisdom."
            ],
            [
                "title" => "Why I'm the Best Programmer Ever",
                "text" => "I feel like not everybody outside of Pied Piper knows it..."
            ],
            [
                "title" => "Secrets of Decentralization",
                "text" => "What makes decentralization so great? Let me enlighten you with my wisdom."
            ],
            [
                "title" => "How Our ICO Almost Failed",
                "text" => "This is a short story about how we uncovered an insane problem with our ICO..."
            ],
            [
                "title" => "Why Strong Tea Isn't Good For CEOs",
                "text" => "An exhaustive guide about how different teas can affect a CEO during their workday."
            ]
        ];

        foreach ($posts as $post) {
            $class = isset($post["featured"]) ? "card featured" : "card";
            echo "<div class='$class'>
                <div class='label'>Label</div>
                <div class='image-placeholder'></div>
                <h2>{$post['title']}</h2>
                <p>{$post['text']}</p>
            </div>";
        }
        ?>
    </div>

    <div class="nav-buttons">
        <button>&lsaquo;</button>
        <button>&rsaquo;</button>
    </div>
</div>

</body>
</html>
