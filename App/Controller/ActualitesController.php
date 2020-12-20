<?php 

    namespace App\Controller;
    use App\Model\ActualitesModel;

    class ActualitesController {

        public function __construct()
        {
            $this->model = new ActualitesModel();
        }

        public function ActualitesRender()
        {
            $FriendsSdg = $this->model->recupSondFriends();
            require ROOT."/App/View/ActualitesView.php";
        }
    }