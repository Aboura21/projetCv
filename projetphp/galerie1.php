<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Gourmandisweet</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style1.css">
  <style>
      .vignette{
            width:10rem;
            margin:2rem;
            border: .8rem solid gray;
        }
    </style>
</head>
<body>
  <header>
    <a href="index1.php"><img id="logo" src="img/lg.png"></a>
    <nav>
      <ul>
        <a href="../index.html"><li><i class="fas fa-cookie-bite"></i></li></a>
        <a href="../nouveau.html"><li>A PROPOS</li></a>
        <a href="contact.html"><li>CONTACT</li></a>
        <a href="../ABIR/index.html"><li>CV</li></a>
      </ul>  
    </nav>
    <div id="barre">
        <a href="blog1.php">Blog</a>
        <a href="saisie1.html">Commande</a>
        <a href="gestion.php">Gestion</a>
        <a href="galerie1.php">Galerie</a>
    </div>
  </header>
  <main>
  <?php
    $scandir= scandir("galerie");
    foreach ($scandir as $fichier) {
        if ($fichier!="." && $fichier!="..") {
               $ima="galerie/$fichier";
               echo "<a href='grand1.php?im=$ima'><img class='vignette' src='$ima'></a>";
        }
    }
  ?>
  </main>
  <footer>
    <div>
      <a href="https://fr.linkedin.com/in/abir-ben-nasr-7b39ab187" onclick="window.open(this.href);return false">Contactez moi sur <i class="fab fa-linkedin-in"></i></a>
    </div>
    <div>
      <p>Copyright<sup>©</sup>2021 par moi. Tous droits reservés </p>
    </div>
  </footer>
</body>
</html>