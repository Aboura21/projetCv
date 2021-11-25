<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie PHP</title>
    <style>
        a{
            margin-right: 2em;
        }
        form,textarea{
            display:inline-block;
            margin-top:2em;
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
    <?php
        $titre=htmlspecialchars($_POST["titre"]);
        $article=htmlspecialchars($_POST["article"]);
        
        try{
            $base = new PDO("mysql:host=localhost; dbname=projet","root","");
            $now=time();
            $sql="INSERT INTO articles(date,titre,contenu) VALUES(NOW(),'$titre','$article')";
            $base->exec($sql);
            $base=null; 
        }
        catch(exception $e){
            die ("Erreur ".$e-> getMessage());
        }

        header('Location:saisie.html');
        
       
    ?>
</body>
</html>