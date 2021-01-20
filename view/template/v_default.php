<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GSB - Frais</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="../public/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="../public/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="../public/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="../public/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="../public/css/animate.css" rel="stylesheet" />
  <link href="../public/css/style.css" rel="stylesheet">
  <link href="../public/css/styles.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f7566f3115.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Lundi - Samedi, 8h00 - 17h00 </p>
    
            </div>
            <div class="col-sm-6 col-md-6">
                <p class="bold text-right">Support +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="container navigation">

        <div class="navbar-header page-scroll">      
          <a class="navbar-brand" href="index.php" >
              <img src="img/logo.jpg" alt="logo_gsb" width="auto" height="70px" />
          </a>
        </div> -->
        
   
        <?php if  (isset($_SESSION['auth']))
          include('../view/template/v_menubar.php');
        ?>
        


      <!-- </div> -->
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->


    
    <?php echo $contenu ; ?>

