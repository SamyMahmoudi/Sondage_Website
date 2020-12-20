<?php 

    namespace App\Controller;
    use App\Model\MySdgModel;

    class MySdgController {

        public function __construct()
        {
            $this->model = new MySdgModel();
        }

        public function MySdgRender()
        {
            $this->model->sdgFinish();
            $MySdg = $this->model->recupSondUser();
            
            require ROOT."/App/View/MySdgView.php";
        }
    }