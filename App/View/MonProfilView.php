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
                    <?php foreach($profil as $donneesProfil) :   ?>
                    <h1>PROFIL</h1>
                    <h2><?= htmlspecialchars($donneesProfil['user_name']) ?></h2>
                    <h2><?= htmlspecialchars($donneesProfil['user_mail']) ?></h2>
                    <?php endforeach ?>
                </section>
                <section class="section-modif">
                    <article>
                        <form class="formChangeUser" method="POST">
                            <h3>Changer de nom d'utilisateur</h3>
                            <input type="text" name="new-user_name" placeholder="Nouveau nom d'utilisateur">
                            <input type="submit" name="update-user_name" value="CONFIRMER">
                        </form>
                    </article>
                    <article>
                        <form class="formChangeUser" method="POST">
                            <h3>Changer d'adresse mail</h3>
                            <input type="email" name="new-user_mail" placeholder="Nouvelle adresse mail">
                            <input type="submit" name="update-user_mail" value="CONFIRMER">
                        </form>
                    </article>
                    <article>
                        <form class="formChangeUser" method="POST">
                            <h3>Changer de mot de passe</h3>
                            <input type="password" name="new-user_password" placeholder="Nouveau mot de passe">
                            <input type="password" name="confirm_new-user_password" placeholder="Confirmer le nouveau mot de passe">
                            <input type="submit" name="update-user_password" value="CONFIRMER">
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