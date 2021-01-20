<?php

class LoginController extends Controller
{

    public function verif_login($data=[])
    {
     
        if( !empty($data['login']) && !empty($data['mdp']) )
        {
            $this->loginModel= new LoginModel();

            $login = $data['login'];
            $mdp= $data['mdp'];

            $user =  $this->loginModel->verif_login( $login,$mdp)->fetch();

            if( !empty($user) && password_verify( $mdp , $user->mdp ) )
            {
                $this->creer_session($user);
            }
            else
            {
                header("Location:index.php?error");

            }
        }
       
    }


    private function creer_session($user)
    {
        $_SESSION['auth'] = "ok";
        $_SESSION['id'] = $user->id;
        $_SESSION['login'] = $user->login;
        $_SESSION['nom'] = $user->nom;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['groupe'] = $user->groupe_id;
        header("Location:index.php?uc=accueil");

    }


 





}













?>