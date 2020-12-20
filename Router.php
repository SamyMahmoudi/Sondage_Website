<?php 
use App\Controller\AccueilController;
use App\Controller\ConnexionController;
use App\Controller\InscriptionController;
use App\Controller\MonProfilController;
use App\Controller\ActualitesController;
use App\Controller\AmisController;
use App\Controller\MySdgController;
use App\Controller\CreateurSdgController;
use App\Controller\SondageController;
use App\Controller\DeconnexionController;
use App\Controller\AjaxController;

if(array_key_exists("page",$_GET))
{
    switch ($_GET["page"]) :


        case 'accueil' :
            $controller = new AccueilController();
            $controller->AccueilRender();
            break;
        case 'inscription' :
            $controller = new InscriptionController();
            $controller->InscriptionRender();
            break;
        case 'connexion'  :
            $controller = new ConnexionController();
            $controller->ConnexionRender();
            break;        
        case 'profil':
            $controller = new MonProfilController();
            $controller->MonProfilRender();
            break;
        case 'actualites':
            $controller = new ActualitesController();
            $controller->ActualitesRender();
            break;
        case 'amis':
            $controller = new AmisController();
            $controller->AmisRender();
            break;               
        case 'mesSondages'  :
            $controller = new MySdgController();
            $controller->MySdgRender();
            break;         
        case 'createurSondage'  :
            $controller = new CreateurSdgController();
            $controller->CreateurSdgRender();
            break;
        case 'sondage'  :
            $controller = new SondageController();
            $controller->SondageRender();
            break;
        case 'deconnexion':
            $controller = new  DeconnexionController();
            $controller->DeconnexionRender();  
            break;
        case 'ajax':
            $controller = new  AjaxController();
            $controller->render();  
            break;
        default:
            $controller = new  AccueilController();
            $controller->AccueilRender();
        endswitch;
} 
else 
{
        $controller = new  AccueilController();
        $controller->AccueilRender();
}