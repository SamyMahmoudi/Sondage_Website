<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include('inc/HeaderPublic.php'); ?>
   
    <main class="main-signUpIn">
        <section class="section-forms-signUpIn">
            <article class="containerFormulaire">
                <form method="POST">
                    <h2>Connexion</h2>
                    <input type="email" name="connexionEmail" id="connexionEmail" placeholder="adresse email" require>
                    <input type="password" name="connexionMdp" id="connexionMdp" placeholder="mot de passe" require>
                    <input type="submit" value="Se Connecter">
                    <p><a href="#">Politique de confidentialité</a></p>
                    <p>*Pas de compte ? Inscrivez-vous <a href="inscription.html">ICI</a> !</p>
                </form>
            </article>
        </section>
    </main>

    <?php include('inc/FooterPublic.php'); ?>

    <script src="js/burger.js"></script>
</body>
</html>