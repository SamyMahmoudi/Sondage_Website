<?php 

    namespace App\Controller;
    use App\Model\InscriptionModel;

    class InscriptionController {

        public function __construct()
        {
        $this->model = new InscriptionModel();
        }

        public function InscriptionRender() 
        {
            $this->model->Inscrire();
            require ROOT."/App/View/InscriptionView.php";
            
        }

    }