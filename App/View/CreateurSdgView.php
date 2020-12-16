<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer mon sondage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>

    <?php include("inc/HeaderUser.php"); ?>

    <section>
        <article class="menu-mySdg">
            <a href="?page=mesSondages" title="retour page mes sondages"><span>&#8656;</span> Retour mes sondages</a>
        </article>
    </section>
    <main>
        <section class="section-creationSdg">
            <article>
                <h2>Création de sondage !</h2>
                <form class="createurSdg" action="#" method="POST">
                    <section>
                        <label for="">Titre</label>
                        <input type="text" placeholder="Titre">
                    </section>
                    <section id="reponses">
                        <div>
                            <label for="">Réponse 1</label>
                            <input type="text" placeholder="Écrire une réponse">
                        </div>
                        <div>
                            <label for="">Réponse 2</label>
                            <input type="text" placeholder="Écrire une réponse">
                        </div>
                    </section>
                    <section>
                        <label for="">Durée du sondage</label>
                        <select name="temps">
                            <option value="3">5 minutes</option>
                            <option value="15">15 minutes</option>
                            <option value="45">45 minutes</option>
                            <option value="60">60 minutes</option>
                            <option value="90">90 minutes</option>
                        </select>
                    </section>
                    <button class="submit ajoutReponses" onclick="ajout()">Ajouter une réponse</button>
                    <input type="submit" class="submit" name="#" value="VALIDER LA CREATION DU SONDAGE">
                </form>
        </section>
    </main>

    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/creaSond.js"></script>
    <script src="js/burger.js"></script>
</body>

</html>