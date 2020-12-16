<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>

    <?php include('inc/HeaderPublic.php'); ?>
   
    <main class="main-signUpIn">
        <section class="section-forms-signUpIn">
            <article class="containerFormulaire">
                <form action="" method="">
                    <h2>Inscription</h2>
                    <input type="text" name="" id="" placeholder="identifiant">
                    <input type="text" name="" id="" placeholder="adresse mail">
                    <input type="password" name="" id="" placeholder="mot de passe">
                    <input type="password" name="" id="" placeholder="confirmer le mot de passe">
                    <input type="submit" value="S'inscrire">
                    <p><a href="#">Politique de confidentialité</a></p>
                    <p>*Déjà inscris ? Connectez-vous <a href="connexion.html">ICI</a> !</p>
                </form>
            </article>
        </section>
    </main>

    <?php include('inc/FooterPublic.php'); ?>

    <script src="js/burger.js"></script>
</body>
</html>