<?php 
    namespace App\Model;
    use Core\Database;

    /**
 * class DeconnexionModel recupere les propriétés et les methods de database grace a extends
 */
    class DeconnexionModel extends Database{

        /**
         * fonction qui deconnecte l'utilisateur en updatant la bdd
         *
         * @return void
         */
        public function seDeconnecter() 
        {

            // disconnect user
            if ($_GET['page'] == 'deconnexion') 
            {
                $this->query("UPDATE t_users SET user_isConnected = 0 WHERE user_id =".$_SESSION['userId']);
                $_SESSION['connect'] = false;
                session_destroy();
            }
        }
    }