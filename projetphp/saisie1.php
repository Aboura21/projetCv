<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Projet 1</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style1.css">
  <style>
    form,textarea{
        display:inline-block;
        margin-top:2em;
    }
    label{
        width: 7rem;
        margin: 1rem;
    }
    textarea{
        margin-left:4em;
    }
    [type=text]{
        width:60%;
    }
    [type=button]{
        margin-top:2em;
    }
</style>
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
    <h1>Saisie d'un nouvel article</h1>
    <?php
        $mail = htmlspecialchars($_POST["mail"]);
        $name = htmlspecialchars($_POST["name"]);//afficher caractères spéciaux dans nom
        $surname = htmlspecialchars($_POST["surname"]);//afficher caractères spéciaux dans prénom
        $titre=htmlspecialchars($_POST["titre"]);
        $article=htmlspecialchars($_POST["article"]);
        
        try{
            $base = new PDO("mysql:host=localhost; dbname=projet","root","");
            $now=time();
            $sql="INSERT INTO article(date,email,nom,prenom,titre,contenu) VALUES(NOW(),'$mail','$name','$surname','$titre','$article')";
            $base->exec($sql);
            $base=null; 
        }
        catch(exception $e){
            die ("Erreur ".$e-> getMessage());
        }

        header('Location:saisie1.html');
        
       
    ?>
  </main>
  <footer>
    <p><center>&copy; 2021 - Eco Recycl</center></p>
  </footer>
</body>
</html>