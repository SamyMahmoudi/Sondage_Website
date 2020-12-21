<?php

namespace App\Controller;
use App\Model\AutreProfilModel;

class AutreProfilController {

    public function __construct()
    {
        $this->model = new AutreProfilModel();
    }


    public function AutreProfilRender() 
    {
        if ($_SESSION['connect'] == false) {
            header("Location:?page=connexion");
        }
        $profil = $this->model->recupAutreProfil();
        require ROOT."/App/View/AutreProfilView.php";
    }

}