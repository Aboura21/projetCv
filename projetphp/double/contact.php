<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="projet.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Oswald: wght @ 500 & display = swap" rel="feuille de style">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Projet TP</title>
</head>

<body>
    <div class="bloc">
        <div id="primarybloc">
            <header>
                <a href="index.html"><img src="img/logo2.png" id="logo" /></a>
                <nav>
                    <ul>
                        <li>EMPLACEMENT</li>
                        <li>A PROPOS</li>
                        <li>CONTACT</li>
                    </ul>
                </nav>
            </header>
        </div>
        <h2><i class="fal fa-leaf fa-spin"></i> ENTREZ VOTRE MESSAGE ET CLIQUEZ SUR ENVOYER</h2>
        <form name="f">
            <label>Nom et prénom</label><input name="nom" type="text" required>
            <span id="span1"></span><br>
            <label>Adresse e-mail</label><input name="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" type="email" required>
            <span id="span2"></span><br>
            <label>Votre message</label><textarea cols="21" rows="6" name="tex"></textarea>
            <span id="span3"></span><br>
            <label></label><input type="submit" value="Envoyer" onclick="valider(event);"><span id="span4"></span><br>
        </form>

    </div>
    <footer>
        <p>©2020-Eco Recycl</p>
    </footer>
</body>

</html>