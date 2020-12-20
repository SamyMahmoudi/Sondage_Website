<?php 

    namespace App\Model;
    use Core\Database;

    class CreateurSdgModel extends Database{

        /**
        *  fonction qui sert à créer un sondage 
        *
        * @return void
        */
        public function CreationSondage ()
        {

            if(isset($_POST["valid"]))
            {
                $i = 1;
                $userId = $_SESSION['userId'];
                $temps = htmlspecialchars($_POST["temps"]);
                $titre =  htmlspecialchars($_POST["titre"]);
                $titrehash = password_hash($titre, PASSWORD_DEFAULT);
                $reponse =  htmlspecialchars($_POST["reponse".$i]);

                if(!empty($titre) AND !empty($reponse))
                {

                    $insert = $this->pdo->query("INSERT INTO t_sondages(sondage_code, user_id, sondage_temps, sondage_titre) VALUES ('$titrehash', $userId , ADDDATE(NOW(), INTERVAL $temps MINUTE), '$titre' )");
                    $recupSdg = $this->pdo->prepare("SELECT sondage_id FROM t_sondages WHERE sondage_code = ?");
                    $recupSdg->execute(array($titrehash));
                    $result = $recupSdg->fetchAll();
                    foreach ($result as $numSdg)
                    {
                        $newSdg = $numSdg['sondage_id'];
                    }
                    
                    while(isset($_POST["reponse".$i]))
                    {
                        $insertReponses = $this->pdo->prepare("INSERT INTO t_reponses(sondage_id, reponse_titre) VALUES (?, ?)");
                        $insertReponses->execute(array($newSdg,  htmlspecialchars($_POST["reponse".$i])));
                        $i++;
                    }
                    header("Location:?page=mesSondages");
                }
                else 
                {
                    header("Location:?page=createurSondage&noTitle") ;
                }
            
            }
        }

    }