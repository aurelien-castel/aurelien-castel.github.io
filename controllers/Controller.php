<?php

class Controller
{

    private $chemin="../view/";


    public function rendu($view="v_menuLogin", $data)
    {
        

        ob_start();
            require($this->chemin.$view.".php");        
        $contenu = ob_get_clean();

        require($this->chemin."template/v_default.php");
        require($this->chemin."template/v_pied.php");

    }

        
    /**
     * Détruit la session active
     */
    public function deconnecter(){
        session_destroy();
    }
}

















?>