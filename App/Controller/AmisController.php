<?php 

    namespace App\Controller;
    use App\Model\AmisModel;

    class AmisController {

        public function __construct()
        {
        $this->model = new AmisModel();
        }

        public function AmisRender()
        {
            if ($_SESSION['connect'] == false) {
                header("Location:?page=connexion");
            }
            $userCheck[] = $_SESSION['userId'];

            $amis = $this->model->ListFriends();
            $resultSearch = $this->model->SearchUsers();

            $this->model->addFriends();
            $this->model->deleteFriends();
            require ROOT."/App/View/AmisView.php";
        }
    }