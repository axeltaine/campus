<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Je candidate</title>
      <!-- style css -->
      <link rel="stylesheet" href="css/reset.css">
      <link href="css/candidate.css" rel="stylesheet">
      <link href="css/header-footer.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <!-- header fait par alain-->
         <?php include 'header.html'; ?>
        <div class="global">
        <div class="jumbotron bg-cover"> <!-- ********* JUMBOTRON **********-->

                <h1>Je Candidate</h1>
                <p></p>
        </div><!--ferme le jumbotron-->

        <div class="container"> <!-- ********* FORMULAIRE DE CONTACT **********-->
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5"><!-- pour grands et moyen: 3 lignes, tablette 2l et smart 3l-->
              <!--nom prénom mail objet-->
              <div class="form-group"> <!-- case pour le nom-->
                <input type="text" class="form-control" placeholder="Votre Nom *" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="form-group"> <!-- case pour le mail-->
                <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="form-group"> <!-- case pour l'objet-->
                <input type="text" class="form-control" placeholder="Objet *" id="objet" required data-validation-required-message="Please enter your object.">
                <p class="help-block text-danger"></p>
              </div>
            </div> <!--fin col-->
            <!-- **************************** fin 3 premiers cadres ****************************-->

            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
              <!--message-->
              <div class="form-group">
                <textarea class="form-control" placeholder="Votre Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
              </div>
            </div> <!-- fin col-->
            <!-- **************************** fin cadre "message" ****************************-->

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
              <!-- boutton submit-->
              <button type="button" class="btn btn-outline-dark">Envoyer</button>
            </div> <!-- fin col-->
            <!-- **************************** fin bouton submit ****************************-->
          </div><!--fin row-->
        </div><!--fin container-->


         <!-- ********* PARALLAX **********-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="./img/campus.jpg"></div>


        <div class="container"> <!-- ********* COORDONNEES **********-->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <!-- Deux colonnes, une pour l'adresse et une pour la map-->
              <!-- coordonnées-->
              <h2>Coordonnées</h2>
              <p>
                08000 Charleville-Mézières<br />
                Boulevard Louis Aragon<br />
                tel: 03-24-XX-XX-XX.<br />
                mail: contact@campus-moulin.fr<br />
              </p>
            </div> <!-- fin col-->
            <!--******************* fin coordonnées******************-->
            <!--******************* maps *************************-->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <div class="map-responsive">
              <!-- maps-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.510620049108!2d4.719754465705761!3d49.738835379383545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea121fdd612bdb%3A0x89076a33c9920d1e!2sMoulin+Leblanc!5e0!3m2!1sfr!2sfr!4v1555413749362!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div> <!-- fin col-->
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><a href="#"><i class="fas fa-chevron-up fa-2x" id="top"></i></a></div>
         </div>
      </div>
        <!--**********************fin de la maps et des coordonnées**********************-->
        <!-- footer fait par alain-->
         <?php include 'footer.html'; ?>
        <!--===================les scripts===================-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
          <script src="parallax1.js/parallax.js"></script>
    </body>
  </html>
