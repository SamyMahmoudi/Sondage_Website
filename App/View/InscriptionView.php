<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>

    <?php include('inc/HeaderPublic.php'); ?>
   
    <main class="main-signUpIn">
        <section class="section-forms-signUpIn">
            <article class="containerFormulaire">
                <form method="POST">
                    <h2>Inscription</h2>
                    <input type="text" name="insUsername" id="insUsername" placeholder="identifiant">
                    <input type="text" name="insMail" id="insMail" placeholder="adresse mail">
                    <input type="password" name="insMdp" id="insMdp" placeholder="mot de passe">
                    <input type="password" name="insMdpConfirm" id="insMdpConfirm" placeholder="confirmer le mot de passe">
                    <input name="signUp" type="submit" value="S'inscrire">
                    <p><a href="#">Politique de confidentialité</a></p>
                    <p>*Déjà inscris ? Connectez-vous <a href="?page=connexion">ICI</a> !</p>
                </form>
            </article>
        </section>
    </main>

    <?php include('inc/FooterPublic.php'); ?>
    
    <script src="js/burger.js"></script> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/inscription.js"></script> -->
</body>
</html>