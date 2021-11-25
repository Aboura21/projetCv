<!DOCTYPE html>​

<html lang="fr">​

  <head>​

    <meta charset="utf-8">​
    <link rel="stylesheet" href="style1.css">
    <title>Mise à jour d'un article</title>​

  </head>​

  <body>​

    <?php​

      $id=$_POST["id"];​

      $titre=$_POST["titre"];​

      $now = $_POST["date"];​

      $contenu=addslashes($_POST["article"]);​

      $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');​

      $base->exec("UPDATE articles SET date='".$now."', titre='".$titre."', contenu='".$contenu."' WHERE id=$id");​

    ?>​

    <script>​

      document.location.href='gestion.php';​

    </script>
 </body>​

</html>