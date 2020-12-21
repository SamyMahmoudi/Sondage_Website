<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include("inc/HeaderUser.php"); ?>

    <main>
        <section>
            <article class="menu-mySdg">
                <a href="?page=amis&a=listFriends" title="pages users"><span>&#8656;</span> Retour page users</a>
            </article>
        </section>
        <section class="sectionAutreProfil">
            <article>
                <?php foreach($profil as $donneesProfil) : ?>
                 <h1>PROFIL</h1>
                <img class="profil-pictures" src="assets/profiles/<?= $donneesProfil['user_picture'] ?>" alt="<?= $donneesProfil['user_picture'] ?>">
                <h2><?= htmlspecialchars($donneesProfil['user_name']) ?></h2>
                <h2><?= htmlspecialchars($donneesProfil['user_mail']) ?></h2>
                <?php endforeach ?>
                </article>
        </section>
    </main>


    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/burger.js"></script>
</body>
</html>