<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <style>
        form,
        label,
        textarea {
            display: inline-block;
            margin-top: 2em;
        }
        
        input:focus,
        textarea:focus {
            background: rgb(200, 0, 100);
        }
        
        label {
            width: 7rem;
            margin: 1rem;
        }
        
        textarea,
        input {
            margin-left: 1em;
        }
        
        [type=text] {
            width: 60%;
        }
        
        [type=button] {
            margin-top: 2em;
        }
    </style>
  <title>Gourmandisweet</title>
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
      <a href="index1.php">Blog</a>
      <a href="saisie1.php">Commande</a>
      <a href="gestion.php">Gestion</a>
      <a href="galerie1.php">Galerie</a>
    </div>
  </header>
  <main>
    <h1>Édition de la commande</h1>
    <?php
      
      date_default_timezone_set('EUROPE/PARIS');
      $DateAndTime = date('d/m/Y H:i:s ', time());
      $Date = date('d/m/Y', time());
      $Time = date('H:i:s ', time());
      echo "Nous sommes le ".$Date."<br>";
      echo "Il est temps de modifier votre commande il est ".$Time."<br>";
      //echo $DateAndTime;
      $id=$_GET["id"];
      $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
      $retour = $base->query("SELECT * FROM article WHERE id='".$id."'");
      $data = $retour->fetch();
      $date = $data["date"];
      $mail = $data["email"];
      $name = $data["nom"];
      $surname = $data["prenom"];
      $titre = $data["titre"];      
      $contenu = $data["contenu"];
      echo '<form name="f" action="miseajour2.php" method="post">';
      echo '<label>E-mail</label>  ';
      echo '<input type="email" name="mail" size="30" value="'.$mail.'"><br><br>';
      echo '<label> Nom </label>  ';
      echo '<input type="text" name="name" size="30" value="'.$name.'"><br><br>';
      echo '<label>Prénom</label>  ';
      echo '<input type="text" name="surname" size="30" value="'.$surname.'"><br><br>';
      echo '<label>La goumandise</label>  ';
      echo '<input type="text" name="titre" size="30" value="'.$titre.'"><br><br>';
      echo '<label>Votre commande</label>     ';
      echo '<textarea cols="60" rows="15" name="article">'.$contenu.'</textarea><br><br><br>';
      echo '<input type="hidden" name="id" value="'.$id.'">';
      echo '<input type="submit" value="Enregistrer">';
      echo '</form>';
    ?>
  </main>
  <footer>
    <div>
      <a href="https://fr.linkedin.com/in/abir-ben-nasr-7b39ab187" onclick="window.open(this.href);return false">Contactez moi sur <i class="fab fa-linkedin-in"></i></a>
    </div>
    <div>
      <p>Copyright<sup>©</sup>2021 par moi. Tous droits reservés </p>
    </div></footer>
</body>
</html>