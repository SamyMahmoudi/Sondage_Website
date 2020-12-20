<?php 

    namespace App\Model;
    use Core\Database;

    class ActualitesModel extends Database 
    {
        /**
         * fonction qui sert a récupérer les sondages des amis
         *
         * @return void
         */
        public function recupSondFriends()
        {
            $recherche =$this->pdo->prepare("SELECT * FROM t_users INNER JOIN t_sondages ON t_users.user_id=t_sondages.user_id INNER JOIN t_friends WHERE (friend_id_one = t_users.user_id OR friend_id_two = t_users.user_id) AND (friend_id_one = :user_one OR friend_id_two = :user_two) ORDER BY t_sondages.sondage_id DESC");
            $recherche->execute([
                ":user_one" => $_SESSION['userId'],
                ":user_two" => $_SESSION['userId']
            ]);
            $SdgFriends = $recherche->fetchAll(\PDO::FETCH_OBJ);
            return $SdgFriends;
        }
    }