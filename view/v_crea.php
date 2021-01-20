
<div id="contenu" style="margin-bottom:8em;">
    <div class="form-group">
        <h1 style= "margin-bottom : 2em">Profil Utilisateur</h1>
       
        <div class ="row">
             
            <!-- Partie gauche -->
            <div class="col s4 offset-s1 profil_fond" >

                <div class ="row justify-content-center" style= "text-align: center;">   

             
                    <div class ="col s8 ">
                        <div class= "cadre_photo">
                            <div style = " position: absolute ;z-index: 1;"><i class="fas fa-edit fa-lg icone_lien" style= "color: #07578e" onclick="sendImg()"></i></div>
                            <img  src="../public/images/profil/user-solid.svg" alt="image_profil" class="profil_image" style= "height: auto; width : 165px;" >              
                        </div>
                    </div>

                </div>

                <div class ="row" class = "profil_text"> 
                <form id = "visiteurForm" name = "visiteurForm" method="post" action="index.php?uc=addUser" >
                    <div class ="col s12"  style= " margin-top : 2em ;padding-top:1em">
                        <p class= "profil_text"><i class="fas fa-user-circle icone_blue  icone_blue" ></i> 
                        <label for="nom"></i> Nom :</label>
                        <input class="form-control" type="text" name="nom" value= ""><br>

                        <p class= "profil_text"><i class="fas fa-user-circle  icone_blue" ></i> 
                        <label for="prenom"></i> Prénom :</label>
                        <input class="form-control" type="text" name="prenom" value= ""><br>

                        <p class= "profil_text"><i class="fas fa-calendar-day  icone_blue" ></i> 
                        <label for="prenom"></i> Date d'embauche :</label>
                        <input class="form-control" type="date" name="dateEmbauche" value= ""><br>    
                    </div>
                </div>

            </div>

             <!-- Partie gauche -->
            <div class="col s4 offset-s1 profil_fond2" style = "padding-right : 20px">
                
                
                    
                    <i class="fas fa-house-user icone_blue"></i>
                    <label for="adresseForm">Adresse</label>
                    <input class="form-control" id="adresseForm" type="text" name="adresse" value= ""><br>

                    <i class="fas fa-mail-bulk icone_blue"></i>
                    <label for="adresseForm">Code Postal</label>
                    <input class="form-control" id="cpForm" type="text" name="cp" value= ""><br>
                    
                    <i class="fas fa-city icone_blue"></i>
                    <label for="adresseForm">Ville</label>
                    <input class="form-control" id="villeForm" type="text" name="ville" value= ""><br>

                    <i class="fas fa-car-side icone_blue"></i>
                    <label for="adresseForm">Véhicule :</label>
                    <select class="form-control" id="vehicule_select" name="vehicule_select">

                        <option value="0">Selectionner un vehicule</option>

                        <?php foreach ($data['listvehicule'] as $vehicule)
                        {        
                          

                            echo('<option value="' .$vehicule->id.'">'.$vehicule->puissance.' '.$vehicule->carburant.'</option>');
                        }
                        ?>
                    </select>
           
                    <i class="fas fa-unlock icone_blue"></i>
                    <label for="mdpForm" style= "margin-top : 2em">Nouveau mot de passe</label>
                    <input class="form-control" id="mdpForm" type="password" name="motDePasse" value= "">
  
                    <div style="margin-top:5em;">

                    <input type="submit" class="btn btn-primary" style="background-color:rgb(18,119,209)">
                    <input type="reset"  class="btn btn-danger" style="background-color:rgb(18,119,209)">
                    </div>
                </form>
            </div>

        </div>


    </div>



<!-- 
    <div class="row "style = "margin-top:8em">

        <div class="col s8" style= "border : 1px solid black  ;">col s8</div>

        <div class="col s4" style= "border : 1px solid black  ;">col s4</div>

    </div> -->



</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>

    function sendImg() {  
        swal({
            className: "sendImgProfil",
            title: "Veuillez selectionner une image",
            icon: "info",
            button: false,
            danger: false,


            content:
            {
                element: 'div',
                attributes:
                {
                    innerHTML: "<form method = \"post\" action = \"../styles/index.php?uc=gererUtilisateur&action=uploadImage\"enctype=\"multipart/form-data\"><input class= \"form-control\" type =\"file\" name = \"img_profil\"/><br><input class= \"btn btn-primary\" type=\"submit\" name=\"Envoyer\"/></form>"
                },
            }
            })

    }


    var errorJS =<?php echo json_encode($returnProfil)?>;

    if(errorJS != null)
    {

        swal({
        title: "Erreur",
        text: errorJS,
        icon: "error",
        buttons:false
        });
        
    }
    

</script>