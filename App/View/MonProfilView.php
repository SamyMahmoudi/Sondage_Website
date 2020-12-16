<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include("inc/HeaderUser.php"); ?>
    
    <main>
        <section class="section-profil">
            <section class="containerProfil">
                <section class="donneesActuelles">
                    <h1>PROFIL</h1>
                    <h2>Username</h2>
                    <h2>Mon adresse mail</h2>
                </section>
                <section class="section-modif">
                    <article>
                        <form class="formChangeUser" action="POST">
                            <h3>Changer de nom d'utilisateur</h3>
                            <input type="text" name="" id="" placeholder="Nouveau nom d'utilisateur">
                            <input type="submit" value="CONFIRMER">
                        </form>
                    </article>
                    <article>
                        <form class="formChangeUser" action="POST">
                            <h3>Changer d'adresse mail</h3>
                            <input type="email" name="" id="" placeholder="Nouvelle adresse mail">
                            <input type="submit" value="CONFIRMER">
                        </form>
                    </article>
                    <article>
                        <form class="formChangeUser" action="POST">
                            <h3>Changer de mot de passe</h3>
                            <input type="password" name="" id="" placeholder="Nouveau mot de passe">
                            <input type="password" name="" id="" placeholder="Confirmer le nouveau mot de passe">
                            <input type="submit" value="CONFIRMER">
                        </form>
                    </article>
                </section>
            </section>
        </section>
    </main>

    <?php include("inc/FooterUser.php") ?>

    <script src="js/burger.js"></script>
</body>
</html>