<?php 

    namespace App\Model;
    use Core\Database;

    class MySdgModel extends Database {
        
        /**
         * récupère sondages de l'utilisateur
         *
         * @return void
         */
        public function recupSondUser()
        {
            $recupSdgUser =$this->pdo->prepare("SELECT * FROM t_users INNER JOIN t_sondages ON t_users.user_id=t_sondages.user_id WHERE t_sondages.user_id = :user ORDER BY t_sondages.sondage_id DESC");
            $recupSdgUser->execute([
                ":user" => $_SESSION['userId']
            ]);
            $foundSdgUser =  $recupSdgUser->fetchAll(\PDO::FETCH_OBJ);
            return $foundSdgUser;
        }

        /**
         * gere le temps du sondage
         *
         * @return void
         */
        public function sdgFinish()
        {    
           $this->pdo->query("UPDATE t_sondages SET sondage_statut = 'Finish' WHERE sondage_temps <= NOW()");
        }
    }