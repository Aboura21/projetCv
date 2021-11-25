<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Gourmandisweet</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style1.css">
  <style>
    main{
      text-align:center;
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
    <h2>Partagez vos créations des gâteaux!</h2>
    <h3>Insérez vos photos</h3>
    <form method="POST" enctype="multipart/form-data"ù>
    <table id="ta" border="2">
      <tr>
        <td>Entrez votre prénom</td>
        <td><input type="text" name="fname" placeholder="Prénom" Required></td>
      </tr>
      <tr>
        <td>Sélectionner l'image</td>
        <td><input type="file" name="image" Required></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Envoyer"></td>			
      </tr>
    </table></form> 
    

    <?php
      $db = mysqli_connect("localhost","root","","projet"); 
      if(!$db){
        die("Connection failed: " . mysqli_connect_error());
      }
      if(isset($_POST["submit"])){
        $var1 = rand(1111,9999);
        $var2 = rand(1111,9999);
        $var3 = $var1.$var2;
        $var3 = md5($var3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./all_images/".$var3.$fnm;
        $dst_db = "all_images/".$var3.$fnm; 
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
        $now=time();
        $check = mysqli_query($db,"insert into blog2(date,fname,images) values(NOW(),'$_POST[fname]','$dst')");  
        if($check){
          echo '<script type="text/javascript"> alert("L\'image a été insérer avec succès!"); </script>';  
          }
        else{
          echo '<script type="text/javascript"> alert("Erreur, veuillez réessayer!"); </script>';
        }
        mysqli_close($db);  
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