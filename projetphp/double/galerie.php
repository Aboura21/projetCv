<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <title>Galerie PHP</title>
    <style>
        a{
            margin-right: 2em;
        }
        img{
            margin:2rem;
        }
        .vignette{
            width:25%;
            margin:2rem;
        }

    </style>
</head>
<body>
    <a href="saisie.html">Saisie</a>
    <a href="blog.php">Blog</a>
    <a href="galerie.php">Galerie</a><br><br><br>
    <?php
        /*echo "<a href='galerie/paysage01.jpg'><img src='galerie/paysage01.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage02.jpg'><img src='galerie/paysage02.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage03.jpg'><img src='galerie/paysage03.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage04.jpg'><img src='galerie/paysage04.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage05.jpg'><img src='galerie/paysage05.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage06.jpg'><img src='galerie/paysage06.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage07.jpg'><img src='galerie/paysage07.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage08.jpg'><img src='galerie/paysage08.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage09.jpg'><img src='galerie/paysage09.jpg' width='25%'></a>";
        echo "<a href='galerie/paysage10.jpg'><img src='galerie/paysage10.jpg' width='25%'></a>";*/

        //version prof, plus simple
        $scandir= scandir("galerie");
        foreach ($scandir as $fichier) {
           if ($fichier!="." && $fichier!="..") {
               $ima="galerie/$fichier";
               echo "<a href='grand.php?im=$ima'><img class='vignette' src='$ima'></a>";
           }
        }




    ?>
    
</body>
</html>