<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <title>Projet PHP</title>
    <style>
        a{
            margin-right: 2em;
        }
    </style>
</head>
<body>
    <a href="saisie.html">Saisie</a>
    <a href="blog.php">Blog</a>
    <a href="galerie.php">Galerie</a><br><br>
    <?php
        $im=$_GET['im'];
        echo "<img src=$im>";

    ?>
    
</body>
</html>