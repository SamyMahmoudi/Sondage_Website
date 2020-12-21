<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
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
                <a href="?page=mesSondages" title="mes sondages"><span>&#8658;</span> Voir mes sondages</a>
                <br>
                <a href="?page=actualites" title="actualites"><span>&#8658;</span> Voir les sondages de mes amis</a>
            </article>
        </section>
        <section id="fondSdg">
            <?php   
                if($sondages == null)
                {
                    header('Location:?page=mesSondages');
                } 
                foreach($sondages as $sondage) :

                ?>
                
                <article class="partSdg">

                <section class="contenuSdg">
                    <h1 class="titreDuSdg">Créateur : <span class="spanTitreDuSdg"><?= $sondage->user_name ?></span></h1>
                    <h1 class="titreDuSdg">Sondage : <span class="spanTitreDuSdg"><?= $sondage->sondage_titre ?></span></h1>

                <?php  
                    if($already == true)
                    {
                        if($sondage->sondage_statut == "en cours")
                        {
                            echo "<article class='sdgEnCours'><p>Vous avez déjà répondu à ce sondage. Le score actuel est :</p>";
                            foreach($reponses as $reponse) 
                            {
                                echo '<h2>'.$reponse->reponse_titre.' '.$reponse->reponse_score.'</h2>' ;
                            }
                        } 
                        else 
                        {
                            echo "<div class='resultatSdg'><h2>Résultats du sondage de ".$sondage->user_name."</h2>";
                            echo "<ul class='score'></ul></div>";
                        }
                    } 
                    else {
                        if($sondage->sondage_statut == "en cours")
                        {
                            echo "<form class='reponseSdg' method='POST'> <ul>";
                            foreach($reponses as $reponse)
                            {
                                echo '<li><label><input type="radio" name="reponse" value="'.$reponse->reponse_titre.'">'.$reponse->reponse_titre.'</label></li>';                          
                            }
                            echo "<input type='submit' name='envoiRep' value='Envoyer sa réponse'></ul></form>"; 
                        }
                        else 
                        {
                            echo "<div class='resultatSdg'><h2>Résultats du sondage de ".$sondage->user_name."</h2>";
                            echo "<ul class='score'></ul></div>";
                        }
                    }

                endforeach ?>
                
                </section>
                <section class="interactionSdg">
                    <?php 
                            if ($sondage->user_id == $_SESSION['userId'])
                            {
                                
                                if (array_key_exists("em",$_GET))
                                {   
                                    echo '<section class="emailing">';        
                                    switch ($_GET["em"]):
                                        case '':
                                            echo "<a class='linkEmailing' href='?page=sondage&c=".$_GET['c']."&em=sendmails'> Cliquez ici pour envoyer un mail à tous vos amis !</a></section>";
                                        break;
                                        case 'sendmails':
                                            foreach ($amis as $ami )
                                            {
                                                if($ami->user_id != $_SESSION['userId'])
                                                {
                                                    $destinataire = $ami->user_mail;
                                                    $username = $_SESSION['userName'];
                                                    $objet = "Nouveau Sondage de ".$username."";
                                                    $contenu = "<html><meta charset='UTF-8'><body><p>". $username ." t'invite à participer à son sondage. <br>  <a href='http://localhost/'>Clique sur ce lien</a> pour te connecter et répondre à ".$username." <br> (le lien renvoi actuellement sur la page d'accueil localhost)</p></body><html>";
                                                    $headers[] = 'MIME-Version: 1.0';
                                                    $headers[] = 'Content-type: text/html; charset=utf-8';
                                                    mail($destinataire,$objet,$contenu,implode("\r\n", $headers));
                                                    header("location:?page=sondage&c=".$_GET['c']."&em=end");
                                                }
                                            }
                                        break;
                                        case'end':
                                            echo "<p class='endEmailing'>Un mail a bien été envoyé à tous vos amis</p></section>";
                                        break;
                                        default:
                                            header("location:?page=sondage&c=".$_GET['c']."");
                                        endswitch;
                                } 
                                
                            }
                    ?>
                    <section id="tchat">
                        <h2>Tchat</h2>
                        <div>
                            <ul id="container-messages"></ul>
                        </div>
                        <form method="POST">
                            <textarea name="contenu-message" id="contenu-message" placeholder="ecrivez un message"></textarea>
                            <input type="submit" id="envoieMsg" name="envoieMsg" placeholder="Envoyer le message">
                        </form>
                        <p id="numSondage"><?= $_GET['c'] ?></p>
                        <p id="numId"><?= $_SESSION['userId'] ?></p>
                    </section>
                </section>
            </article>
        </section>
    </main>
    
    <?php include("inc/FooterUser.php") ?>
    
    <script src="js/burger.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/tchat.js"></script>
</body>

</html>