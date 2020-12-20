<?php 

namespace App\Controller;
use App\Model\SondageModel;
/**
 *  class SondageController utilise la function  public function __construct() 
 *        et la function public function render()
 */
class SondageController {

 /**
   * la fonction __construct éxécute SondageModel lorsque la class est instancié 
   */
    public function __construct()
    {
       $this->model = new SondageModel();
    }

    /**
     * contient tous les fonctions de la page sondage
     *
     * @return void
     */
    public function SondageRender()
    {
        $sondages = $this->model->recupSdg();
        $reponses = $this->model->recupReponse();

        $amis = $this->model->emailing();
        $already = $this->model->repUsers();

        //template page sondage
        require ROOT."/App/View/SondageView.php";
    }


}