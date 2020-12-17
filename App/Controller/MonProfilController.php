<?php 

    namespace App\Controller;
    use App\Model\MonProfilModel;

    class MonProfilController {

        public function __construct()
        {
        $this->model = new MonProfilModel();
        }

        public function MonProfilRender()
        {
            // verifie que l'utilisateur s'est bien connecté
            if ($_SESSION['connect'] == false) 
            {
                header("Location:index.php?page=connexion");
            }
            
            // recupere donnees actuelles de l'utilisateur
            $profil = $this->model->recupProfil();
            $this->model->updateUserData();
            require ROOT."/App/View/MonProfilView.php";
        }
    }