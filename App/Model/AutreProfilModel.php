<?php 

namespace App\Model;
use Core\Database;


class AutreProfilModel extends Database 
{
    
    /**
     * récupère données utilisateurs
     *
     * @return void
     */
    public function recupAutreProfil()
    {
        $recherche = $this->pdo->prepare("SELECT * FROM t_users WHERE user_id = ?");
        $recherche->execute(array($_GET['nb']));
        $profil = $recherche->fetchAll();
        return $profil;
    }
}