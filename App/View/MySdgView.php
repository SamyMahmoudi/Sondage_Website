<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Sondages</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>

    <?php include("inc/HeaderUser.php"); ?>
    <main>
        <section>
            <article class="menu-mySdg">
                <a href="?page=createurSondage" title="créer un nouveau sondage"><span>&#8658;</span> Créer un sondage</a>
            </article>
        </section>
        <section class="containerSdg">
            <h2>Voci vos sondages en cours !</h2>
            <section>
                <?php 
                    foreach($MySdg as $sondage)
                    {
                        if ($sondage->sondage_statut == "en cours")
                        {
                            echo 
                                "<article class='sondage'>
                                    <a href='?page=sondage&em&c=".$sondage->sondage_code."' title='".$sondage->sondage_titre."'>
                                        <h3>Titre du sondage : ".$sondage->sondage_titre." </h3>
                                        <p>Date de fin : ".$sondage->sondage_temps."</p>
                                    </a>
                                </article>"
                            ;
                        }
                    }
                ?>
            </section>
        </section>
        <section class="containerSdg">
            <h2>Voici vos sondages terminés !</h2>
            <section>
                <?php 
                    foreach($MySdg as $sondage)
                    {
                        if ($sondage->sondage_statut == "Finish")
                        {
                            echo 
                                "<article class='sondage'>
                                    <a href='?page=sondage&em&c=".$sondage->sondage_code."' title='".$sondage->sondage_titre."'>
                                        <h3>Titre du sondage : ".$sondage->sondage_titre." </h3>
                                        <p> Fini depuis : ".$sondage->sondage_temps."</p>
                                    </a>
                                </article>"
                            ;
                        }
                    }
                ?>
            </section>
        </section>
    </main>

    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/burger.js"></script>
</body>

</html>