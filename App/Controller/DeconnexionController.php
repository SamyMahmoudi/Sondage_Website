<?php 

namespace App\Controller;
use App\Model\DeconnexionModel;

/**
 *  class DisconnectController utilise la function  public function __construct() 
 *        et la function public function render()
 */
class DeconnexionController {

    /**
    * la fonction __construct éxécute DisconnectModel lorsque la class est instancié 
    */
    public function __construct()
    {
       $this->model = new DeconnexionModel();
    }

    /**
     * contient tous les fonctions de la page de deconnexion
     *
     * @return void
     */
    public function DeconnexionRender()
    {
        //deconnecte l'utilisateur
        $this->model->seDeconnecter();

        //template page Accueil
        require ROOT."/App/View/AccueilView.php";
    }

}