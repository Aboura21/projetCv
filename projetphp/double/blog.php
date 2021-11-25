<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <title>Blog php</title>
    <style>
        a{
            margin-right: 2em;
        }
        .style{
            border:.1rem blue solid;
            margin:1rem;
            padding:1rem;
            background:lightcyan;
            border-radius:2rem;
        }
    </style>
</head>
<body>
    <a href="saisie.html">Saisie</a>
    <a href="blog.php">Blog</a>
    <a href="galerie.php">Galerie</a><br><br>
    <h1>Blog</h1>
    <?php
        
        date_default_timezone_set('EUROPE/PARIS');
        try{
            $base = new PDO("mysql:host=localhost; dbname=projet","root","");
            $retour = $base->query("SELECT * FROM articles ORDER BY date DESC");
            while ($data = $retour->fetch()) {
                echo "<div class='style'><h2>".$data['titre']." (".date("d/m/Y H:i:s").") ("
                .preg_replace("#([0-9]*)-([0-9]*)-([0-9]*)#","$3/$2/$1",$data['date']).")</h2>";
                echo "<p>".htmlspecialchars_decode($data['contenu'], ENT_QUOTES)."</p></div><br><br>";
            }
            $base=null;
        }
        catch(exception $e){
            die ("Erreur ".$e-> getMessage());
        }
        //$base-> exec("SET CHARACTER SET utf8");
        
        
    ?>
    
</body>
</html>