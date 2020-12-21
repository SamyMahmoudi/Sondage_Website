<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de sondage entre amis. Créez vos sondages, ajoutez vos amis et c'est parti ">
    <meta name="keywords" content="Sondage Ask">
    <meta name="author" content="Samy Mahmoudi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <title>Sondage</title>
</head>

<body>

    <?php include('inc/HeaderPublic.php'); ?>
    
    <main>
        <section class="landing">
            <article class="image-fond-header">
                <section class="landingContainer">
                    <div class="presentation">
                        <h1>SondaFriends, premier site de sondages entre amis !</h1>
                        <p>Un titre, des réponses, une durée et c'est parti ! Inivtez autant d'amis que possible à répondre à votre sondage !</p>
                        <a class="colorButton" href="?page=inscription" title="Créer votre groupe d'amis">Créer votre
                            groupe d'amis</a>
                    </div>
                </section>
            </article>
        </section>
        <article class="containerJoueur">
            <div>
                <section>
                    <p>SondaFriends m'a permis de vivre d'une manière différente les émissions et rencontres sportives. J'ai
                        même le réflexe avec mes amis de penser à SondaFriends dès que j'allume ma télévision.</p>
                    <span class="joueurDescription">- Témoignage de Margaux Malsch, utilisatrice très régulière de
                        BETSCAPE.</span>
                    <img class="quote" src="./assets/images/quote.png" alt="citation">
                </section>
            </div>
            <img src="./assets/images/joueurs.png" alt="joueurs">
        </article>
        <article class="fonctionnalites">
            <div class="fond-image-fct">
                <h2>Envie de créer des sondages personnalisés ?</h2>
                <hr>
                <section>
                    <div class="presentation-fct">
                        <h3>Personnaliser vos sondages !</h3>
                        <p>Sur SondaFriends, les sondages n'ont pas de limites*. <br>
                            <span> *pour en profiter, votre inscription au site est nécéssaire</span>
                        </p>
                    </div>
                    <div class="listing-fct">
                        <div class="fct">
                            <div><span> 1 </span></div>
                            <p>Création de sondages illimitées et totalement gratuites. Un titre, des réponses, une durée et c'est parti</p>
                        </div>
                        <div class="fct">
                            <div><span>2</span></div>
                            <p>Invitez tous vos amis présents sur la plateforme à répondre à vos sondages. Sport, emissions télés n'attendent que vous !
                            </p>
                        </div>
                        <div class="fct">
                            <div><span>3</span></div>
                            <p>Bénéficier d'un tchat afin de communiquer en direct avec vos amis !</p>
                        </div>
                        <div class="fct">
                            <div><span>4</span></div>
                            <p>Regardez l'évolution des résultats en temps réel.</p>
                        </div>
                    </div>
                </section>
            </div>
            <a class="colorButton" href="?page=inscription" title="inscription">S’inscrire et profiter de toutes les
                fonctionnalités</a>
        </article>
    </main>

    <?php include('inc/FooterPublic.php'); ?>

    <script src="js/burger.js"></script>
</body>

</html>