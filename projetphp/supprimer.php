<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Projet 1</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style1.css">
  <script>
     document.location.href='gestion.php';
  </script>
</head>
<body>
  <header>
    <a href="index1.php"><img id="logo" src="img/logo2.png"></a>
    <nav>
      <ul>
        <li>EMPLACEMENT</li>
        <li>A PROPOS</li>
        <li>CONTACT</li>
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
      <h1>Gestion des articles</h1>
      <?php
        $id=$_GET["id"];
        $base = new PDO("mysql:host=localhost; dbname=projet","root","");
        $retour = $base->exec("DELETE FROM article WHERE id = $id");
            
        $base=null;
      ?>
  </main>
  <footer>
    <p><center>&copy; 2021 - Eco Recycl</center></p>
  </footer>
</body>
</html>