<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
<!--     <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">        
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">  
    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!--Latest compiled JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <?php echo $this->section("sliderCss") ?>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/sliderCss.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/jumboCss.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/simple-sidebar.css') ?>">

    <link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">

    <!-- CSS pour le calendrier -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/fullcalendar.min.css') ?>">


        <!-- Permet des inclusions dans mon head depuis la vue -->
    <?php echo $this->section("head") ?>

</head>
<body>

<!-- Début Top header -->
    <main class="container-fluid topheader">
        <div class="row">
            <div class="col-lg-12 top-header">
                <ul class="reseau">
                    <li><a href="<?php echo $this->url('login') ?>">connexion</a></li>
                    <li><a href="#"><img src="<?= $this->assetUrl('img/facebook_logos.png') ?>" alt="logos" class="img-responsive"></a></li>
                    <li> <a href="#"><img src="<?= $this->assetUrl('img/whatsapp_logo.png') ?>" alt="logos" class="img-responsive"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">

                <div class="col-xs-2">
                    <a href="#"><img src="<?= $this->assetUrl('img/logo_alliance.png') ?>" alt="logos" class="img-thumbnail logos"></a>
                </div>

                <div class="col-xs-10">
                   <img class="img-responsive homepic" src="/Alliance-Sociale/public/assets/img/13725086_999551693491252_5244655575039982654_o.jpg"/>
                </div>

               <!--  <div class="col-sm-3">
                    <script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/97226011/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>    
                                                
                </div> -->
        </div>
            
       
    </main>
 
<!-- Fin Top header -->
 <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse dropdown">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->url('default_home') ?>">Accueil</a></li>
            <li class="dropdown">

              <a href="<?php echo $this->url('default_home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Presentation</a></li>

            <li class="dropdown">
              <a href="<?php echo $this->url('default_home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Evènements</a></li>




            <li class="dropdown">
              <a href="<?php echo $this->url('default_home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Nos Activités
                <span class="caret"></span></a>

              <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Formations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Formation du personnel</a></li>
          <li><a tabindex="-1" href="#">Prevention et secours civique</a></li>
          <li><a tabindex="-1" href="#">BAFA</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Comité des jeunes <span class="caret"></span></a>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Sports et loisirs <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Gymnastique</a></li>
          <li><a tabindex="-1" href="#">Judo</a></li>
          <li><a tabindex="-1" href="#">Zumba</a></li>
          <li><a tabindex="-1" href="#">Randonnée</a></li>
          <li><a tabindex="-1" href="#">Danse traditionnelle</a></li>
          <li><a tabindex="-1" href="#">Accueil de loisirs (sans hébergement)</a></li>
          <li><a tabindex="-1" href="#">Couture</a></li>
          <li><a tabindex="-1" href="#">Cuisine</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Education<span class="caret"></span></a> 
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Accompagnement scolaire</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Animation<span class="caret"></span></a> 
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Autres</a></li>
        </ul>
      </li>
            </ul>
                




            <li class="dropdown">
              <a href="<?php echo $this->url('default_home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Contactez nous</a>
            </li>

            <li class="dropdown">
              <a href="<?php echo $this->url('default_home') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Adhésion</a>
            </li>

            <li class="dropdown">
            <?php if(!empty($w_user)): ?>
              <a href="<?php echo $this->url('listMedias',['page'=>1]) ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Galeries</a>
              <?php else: ?>
                <a href="<?php echo $this->url('listMediasGuest',['page'=>1]) ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Galeries</a>
              <?php endif; ?>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <!--<div class="container-full">

      <div class="row">
          
          <div class="col-md-12">

            <div class="col-md-3">
              
            </div> -->


        <section class="content-left">
                <main id="page-content-wrapper" role="main">
            <!-- Zone d'inclusion de Facebook -->
            <div class="fb-page" data-href="https://www.facebook.com/AllianceSocialeduMarin/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AllianceSocialeduMarin/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AllianceSocialeduMarin/">Alliance Sociale</a></blockquote></div> 
          
          
                </main>
        </section>
        <section class="main_content container">
           
            <?= $this->section('main_content') ?>
            
        </section>
        <section class="content-right text-center">
            <!-- Zone calendrier -->
            <div id="calendar"></div>
            <!-- detail de mon event -->
            <div id="fullCalModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                            <h4 id="modalTitle" class="modal-title"></h4>
                        </div>
                        <img id="picture" class="modal-body img-responsive img-thumbnail text-center" alt='Affiche'>
                        <div id="modalBody" class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a id="link" ><button class="btn btn-primary">Plus d'info</button></a>
                        </div>
                    </div>
                </div>
              </div>
            <!-- Zone calendrier -->

            <!-- Zone inclusion widget meteo -->
             <iframe src="https://www.meteoblue.com/fr/meteo/widget/daily/le-marin_martinique_3570426?geoloc=fixed&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windspeed=1&windgust=0&winddirection=0&uv=0&humidity=0&precipitation=0&precipitationprobability=0&spot=0&pressure=0&layout=light"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 216px;height: 240px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/fr/meteo/prevision/semaine/le-marin_martinique_3570426?utm_source=weather_widget&utm_medium=linkus&utm_content=daily&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
        </section>

    <!-- Début footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <h3>Centre Social Alliance sociale</h3>
                                <p>LCR Résidence Gaïac<br>
                                Quartier Cédalise<br>
                                97290 LE MARIN<br></p>

 <!--                                <div class="slider">
                                    Slider partenaire
                                </div> -->
                            </div>

                            <div class="col-sm-4 text-center">
                                <h3>Horaire</h3>

                                <p>Le lundi : de 8h00 à 12h00 et de 13h00 à 17h00<br>
                                Du Mardi au Vendredi : 8h00 à 17h00<br>
                                Le Samedi : 9h00 à 12h00 et de 14h00 à 17h00</p>
                            </div>

                            <div class="col-md-12 text-center copyright">
                            <hr>
                               <b>C.CASCA J.DESTIN C.JEAN-TOUSSAINT E-L.ROBARD R.MARIE-LUCE  &copy; 2017 </b>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <!-- Fin footer -->

    <!-- jQuery -->
    <script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>

    <!-- JQuery UI -->
    <script src="<?= $this->assetUrl('js/jquery-ui.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>

    <!-- Full calendar -->
    <script src="<?= $this->assetUrl('js/fullcalendar/moments.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/fullcalendar/fullcalendar.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/fullcalendar/gcal.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/fullcalendar/fr.js') ?>"></script>

    <!-- API Facebook -->

    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  //Full calendar commence ici
  var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var picture = '/Alliance_Sociale/public/';
        var lien = '/Alliance-Sociale/public/events/view/';
        
  $('#calendar').fullCalendar({
            events: "<?= $this->url('listAllEvent'); ?>",
            header: {
                left: '',
                center: 'prev title next',
                right: ''
            },
            eventClick:  function(event, jsEvent, view) {
                $('#modalTitle').html(event.title);
                $('#picture').attr('src',picture+event.picture);
                $('#modalBody').html(event.content);
                $('#link').attr('href',lien+event.id);
                $('#fullCalModal').modal();
            }
        });
  //Fin du full calendar
});
</script>


<!-- Permet des inclusions de scripts depuis la vue -->
    <?php echo $this->section("script") ?>

</body>
</html>