<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    
    <?php include("inc/HeaderUser.php"); ?>

    <main>
        <section class="containerSdg">
            <h2>Voici les sondages en cours de vos amis !</h2>
            <section>
                <?php 
                    foreach($FriendsSdg as $sondage)
                    {
                        if($sondage->user_id != $_SESSION['userId'])
                        {
                            if ($sondage->sondage_statut == "en cours")
                            {
                                echo 
                                    "<article class='sondage'>
                                        <a href='?page=sondage&c=".$sondage->sondage_code."' title='".$sondage->sondage_titre."'>
                                            <h3>Titre du sondage : ".$sondage->sondage_titre." </h3>
                                            <h4>Sondage de : ".$sondage->user_name."</h4>
                                            <p>Date de fin : ".$sondage->sondage_temps."</p>
                                        </a>
                                    </article>"
                                ;
                            }
                        }
                    }
                ?>
            </section>
        </section>
        <section class="containerSdg">
            <h2>Voici les sondages terminés de vos amis !</h2>
            <section>
                <?php 
                    foreach($FriendsSdg as $sondage)
                    {
                        if($sondage->user_id != $_SESSION['userId'])
                        {
                            if ($sondage->sondage_statut == "Finish")
                            {
                                echo 
                                    "<article class='sondage'>
                                        <a href='?page=sondage&c=".$sondage->sondage_code."' title='".$sondage->sondage_titre."'>
                                            <h3>Titre du sondage : ".$sondage->sondage_titre." </h3>
                                            <h4>Sondage de : ".$sondage->user_name."</h4>
                                            <p>Fini depuis : ".$sondage->sondage_temps."</p>
                                        </a>
                                    </article>"
                                ;
                            }
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