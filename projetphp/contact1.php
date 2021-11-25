<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="projet.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Oswald: wght @ 500 & display = swap" rel="feuille de style">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Gourmandisweet</title>
</head>

<body>
    <div id="primarybloc">
            <header>
                <a href="index.html"><img src="img/lg.png" id="logo" /></a>
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
        </div>
        <main>
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