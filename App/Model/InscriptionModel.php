<?php

namespace App\Model;
use Core\Database;

/**
 * class InscriptionModel recupere les propriétés et les methods de database grace a extends
 */
class InscriptionModel extends Database{

    /**
     * fonction qui inscrire un utilisateur
     *
     * @return void
     */
    public function Inscrire()
    {   
        //Quand le bouton est validé
        if(isset($_POST['signUp'])) 
        {
            
            //Prend les données des input
            $username = trim($_POST['insUsername']);
            $email = trim($_POST['insMail']);
            $mdp = password_hash($_POST['insMdp'], PASSWORD_DEFAULT);
            
            //Fait la verif si pseudo existe dans la BDD
            
            $checkUsername = $this->pdo->prepare("SELECT user_name FROM t_users WHERE user_name = ?");
            $checkUsername->execute(array($username));
            $rowUsername = $checkUsername->rowCount();
            if ($rowUsername == 0)
            {
                //Fait la verif si pseudo existe dans la BDD
                $checkMail = $this->pdo->prepare("SELECT user_mail FROM t_users WHERE user_mail = ?");
                $checkMail->execute(array($email));
                $rowMail = $checkMail->rowCount();
                if($rowMail == 0 AND filter_var($email, FILTER_VALIDATE_EMAIL))
                {    
                //Verifie si les champs sont remplis
                    if(!empty($_POST['insUsername']) AND !empty($_POST['insMail']) AND !empty($_POST['insMdp']))
                    {
                        //Verifie si les mots de passes sont identiques
                        if($_POST['insMdp']== $_POST['insMdpConfirm'])
                        {
                            $requete = $this->pdo->prepare("INSERT INTO t_users(user_name, user_mail, user_password) VALUES(?,?,?)");
                            $requete->execute(array($username, $email, $mdp));
                            header("location:index.php?page=connexion");
                        }
                        else
                        {
                            header("location:index.php?page=inscription&erreur1");
                            // echo '<div id="fond"><div id="erreur"><span>mot de passe mal écrit</span><button id="erreurBouton">OK</button></div>';
                        }
                    }
                    else
                    {
                        header("location:index.php?page=inscription&erreur2");
                        //echo '<div id="fond"><div id="erreur"><span>champs non remplis</span><button id="erreurBouton">OK</button></div></div>';
                    }
                }
                else
                {
                    header("location:index.php?page=inscription&erreur3");
                    //echo '<div id="fond"><div id="erreur"><span>Mail déjà existant ou non valide</span><button id="erreurBouton">OK</button></div></div';
                }
            }
            else
            {
                header("location:index.php?page=inscription&erreur4");
                //echo '<div id="fond"><div id="erreur"><span>Pseudo déjà existant</span><button id="erreurBouton">OK</button></div></div>';
            }
        }
    }
}