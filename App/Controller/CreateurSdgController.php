<?php 

    namespace App\Controller;
    use App\Model\CreateurSdgModel;

    class CreateurSdgController {

        public function __construct()
        {
            $this->model = new CreateurSdgModel();
        }

        public function CreateurSdgRender()
        {
            if ($_SESSION['connect'] == false) {
                header("Location:?page=connexion");
            }
            $this->model->CreationSondage();
            require ROOT."/App/View/CreateurSdgView.php";
        }
    }