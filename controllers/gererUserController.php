<?php

class gererUserController extends Controller
{

    

    public function getVisiteur($id)
    {
           
            $this->loginModel= new LoginModel();

   
            return $this->loginModel->getVisiteur( $id)->fetch();
            
            if( empty($user) )
            {
               die();

            }
        
       
    }

    public function getVehicule()
    {
           
            $this->loginModel= new LoginModel();

   
            return $this->loginModel->getVehicule()->fetchAll();
           
            if( empty($user) )
            {
                die();

            }
        
       
    }


    public function addUser()
    {
        $this->loginModel= new LoginModel();
           
           
        $visiteur = array(
            'nom'               => $_POST['nom'],
            'prenom'            => $_POST['prenom'],
            'dateEmbauche'      => $_POST['dateEmbauche'],
            'adresse' 			=> $_POST['adresse'],
            'cp'				=> $_POST['cp'],
            'ville' 			=> $_POST['ville'],
            'vehicule_id' 		=> $_POST['vehicule_select'],
            'mdp'               => $_POST['motDePasse']
        );

        
        $visiteur['mdp'] = password_hash($_POST['motDePasse'],PASSWORD_DEFAULT ,['cost'=>14]);
        $visiteur['login'] = substr($visiteur['prenom'] ,0 ,(- strlen($visiteur['prenom'] )+1) ).$visiteur['nom'];
        $visiteur['groupe_id']=0;
 
        $this->loginModel->addUser($visiteur);
     
                        
    
        
       
    }




}