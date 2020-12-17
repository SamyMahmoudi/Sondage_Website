<?php 

    namespace App\Controller;
    use App\Model\ConnexionModel;

    class ConnexionController {

        /**
   * la fonction __construct éxécute ConnexionModel lorsque la class est instancié 
   */
    public function __construct()
    {
       $this->model = new ConnexionModel();
    }
    

        public function ConnexionRender() 
        {
            $this->model->SeConnecter();
            require ROOT."/App/View/ConnexionView.php";
        }

    }