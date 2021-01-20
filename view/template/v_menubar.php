
<!-- 
<div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="color:white;">
    <ul class="nav navbar-nav">
        <li><a href="index.php?uc=gererUtilisateur">Profil Utilisateur</a></li>
        <li><a href="#doctor">Saisie fiche de frais</a></li>
        <li><a href="#facilities">Consultation de mes fiches de frais</a></li>
        <li><a href="#  ">Déconnexion</a></li>
    </ul>
</div>
 -->

  <nav>
    <div class="nav-wrapper"style="background-color:rgb(140, 140, 140)";  >
      <a href="index.php?uc=accueil" class="brand-logo" style="margin-left:2em">Accueil</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style= "color : black">
        <li><a href="index.php?uc=gererUtilisateur">Profil Utilisateur</a></li>
        <?php if ($_SESSION['groupe']=="99")
              {
                echo('<li><a href="index.php?uc=v_creerUtilisateur">Creer un Utilisateur</a></li>');
              }  
        ?>
      
       
        <li><a href="badges.html">Saisie fiche de frais</a></li>
        <li><a href="collapsible.html">Consultation de mes fiches de frais</a></li>
        <li><a href="index.php?uc=deconnexion">Déconnexion</a></li>
      </ul>
    </div>
  </nav>

</div>