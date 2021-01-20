<?php

    require '../app/App.php';
    new App();
    


    $logincontroller= new LoginController();
    $gererUserController = new gererUserController();
    $data=[];    

    if(isset($_GET['cgu']))
    {
        $view="v_CGU";
        
    }
    else if(isset($_SESSION['auth']))
    {
        
        $uc = $_REQUEST['uc'];

        switch($uc)
        {
            case 'accueil' :
            {
                $view = "v_accueil";
                break;
            }
    
            case 'gererUtilisateur' :
            {
                $visiteur= $gererUserController->getVisiteur($_SESSION['id']);         
                $listvehicule = $gererUserController->getVehicule();
                $data = array(
                    'visiteur'=>  $visiteur,
                    'listvehicule'=>  $listvehicule
                );

                $view = "v_profil";
                break;
            }

            case 'v_creerUtilisateur' :
            {               
                $listvehicule = $gererUserController->getVehicule();
                $data = array(
                  
                    'listvehicule'=>  $listvehicule
                );

                $view = "v_crea";
                break;
            }

            case 'addUser' :
                {               
                    $gererUserController->addUser();     
                    $view = "v_crea";           
                    break;
                }

            case 'deconnexion' :
            {
                $logincontroller->deconnecter();
                $view = "v_menuLogin";
                break;
            }

            case 'etatFrais' :
            {
                break;
            }
            
        }
    }
    
    else if (isset($_POST['login']))
    {
        $logincontroller->verif_login($_POST);
    }
    else 
    {
        $view = "v_menuLogin";
    }
    

    $logincontroller->rendu($view,$data);  



?>