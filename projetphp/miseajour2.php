<meta charset="utf-8">

<?php
  $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
  $id=$_POST["id"];
  $mail = htmlspecialchars($_POST["mail"]);
  $name = htmlspecialchars($_POST["name"]);
  $surname = htmlspecialchars($_POST["surname"]);
  $titre=$_POST["titre"];
  $DateAndTime = date('d/m/Y H:i:s', time());
  $contenu=addslashes($_POST["article"]);
  $base->exec("UPDATE article SET  email='".$mail."', nom='".$name."', prenom='".$surname."', titre='".$titre."', contenu='".$contenu."' WHERE id=$id");
  $base=null;
?>
<script>
  document.location.href='gestion.php';
</script>  
