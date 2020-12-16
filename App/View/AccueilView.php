<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de sondage entre amis. Créez vos sondages, ajoutez vos amis et c'est parti ">
    <meta name="keywords" content="Sondage Ask">
    <meta name="author" content="Samy Mahmoudi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
                        <p>Défiez vos amis sur une thèmatique au choix ! Choissisez un gage, le perdant doit réaliser le
                            gage selectionné par le gagnant.</p>
                        <a class="colorButton" href="inscription.php" title="Créer votre groupe d'amis">Créer votre
                            groupe d'amis</a>
                    </div>
                </section>
            </article>
        </section>
        <article class="containerJoueur">
            <div>
                <section>
                    <p>Betscape m'a permis de vivre d'une manière différente les émissions et rencontres sportives. J'ai
                        même le réflexe avec mes amis de penser à Betscape dès que j'allume ma télévision.</p>
                    <span class="joueurDescription">- Témoignage de Margaux Malsch, utilisatrice très régulière de
                        BETSCAPE.</span>
                    <img class="quote" src="./assets/images/quote.png" alt="citation">
                </section>
            </div>
            <img src="./assets/images/joueurs.png" alt="joueurs">
        </article>
        <article class="fonctionnalites">
            <div class="fond-image-fct">
                <h2>Envie de créer des paris personnalisés ?</h2>
                <hr>
                <section>
                    <div class="presentation-fct">
                        <h3>Personnaliser vos paris !</h3>
                        <p>Sur Betscape, les paris n'ont pas de limites. Pariez avec vos amis et toute la communauté
                            déjà présente sur la plateforme. <br>
                            <span> *pour profiter de ces nouveautés, votre inscription au site est nécéssaire</span>
                        </p>
                    </div>
                    <div class="listing-fct">
                        <div class="fct">
                            <div><span> 1 </span></div>
                            <p>Création d’un pari à partir de toutes les questions déjà existantes.</p>
                        </div>
                        <div class="fct">
                            <div><span>2</span></div>
                            <p>Création de questions personnalisées, qui seront partagées dans la bibliothèque commune.
                            </p>
                        </div>
                        <div class="fct">
                            <div><span>3</span></div>
                            <p>Invitez vos amis et la communauté Betscape à répondre à vos questions !</p>
                        </div>
                        <div class="fct">
                            <div><span>4</span></div>
                            <p>Soumettez votre pari à Betscape pour le faire vérifier et le faire apparaitre dans les
                                paris du jour !</p>
                        </div>
                    </div>
                </section>
            </div>
            <a class="colorButton" href="inscription.php" title="inscription">S’inscrire et profiter de toutes les
                fonctionnalités</a>
        </article>
    </main>

    <?php include('inc/FooterPublic.php'); ?>

    <script src="js/burger.js"></script>
</body>

</html>