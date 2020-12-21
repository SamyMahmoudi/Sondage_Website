<?php

namespace App\Controller;

class ErreurController {

    public function erreurRender() 
    {
        require ROOT."/App/View/ErreurView.php";
    }

}