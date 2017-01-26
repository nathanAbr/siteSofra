<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <!-- Changement de police -->
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link type="text/css" href="<?php echo base_url('assets/dist/css/menu_lateral.css');?>" rel="stylesheet" media="screen" />
        <link href="<?php echo base_url('assets/dist/css/style.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/dist/css/perso.css');?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url('assets/js/jquery-1.12.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dist/js/menu_lateral.js');?>"></script>
    </head>
    
    <body>
    <div id="menu">
        <a href="javascript:;" class="close glyphicon glyphicon-remove"></a>
        <ul class="menu_lateral">
            <div class="menu-header-lateral">
                <h3 class="title-menu-lateral">Demande de documentation</h3>
                <div class="row text-center">
                    <div class="col-md-12 form-lateral">
                        <form class="form">
                            <h3>1/ Besoins</h3>
                            <div class="form-group">
                                <label for="besoin" class="">Besoin :</label>
                                <select name="besoin" class="form-control">
                                    <option>Recouvrement de créances</option>
                                    <option>Cession de créances</option>
                                    <option>Pertes et profits</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="clients">Clients :</label>
                                <select name="clients" class="form-control">
                                    <option>Particuliers</option>
                                    <option>Entreprises</option>
                                    <option>Particuliers et Entreprises</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="montant">Montant moyen des impayés :</label>
                                <select name="montant" class="form-control">
                                    <option>0 à 500€</option>
                                    <option>+ de 500€</option>
                                </select>
                            </div>
                            <h3>2/ Coordonnées</h3>
                            <input type="text" class="form-control" placeholder="e-mail" name="mail" />
                            <hr class="featurette-divider" />
                            <input type="submit" value="Envoyer" class="form-control" class=""/>
                        </form>
                    </div>
                </div>
            </div>
        </ul>
    </div>
      <header>
        <div class="row">
          <div class="col-md-offset-7 col-md-5 nav-acces">
            <a id="paiement_cb" href="http://www.r-projectweb.com/paiementcb"><img src="<?php echo base_url('assets/img/logo/visuel_CB.png');?>" alt="Paiement CB" width="25">Paiement en ligne</a>
            <a id="espace_client" href="http://r-projectweb.com/index/index/numerosociete/29"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Espace client</a>
          </div>               
        </div>         
        <div class="navbar-wrapper">
          <div class="container">
          <a href="javascript:;" class="menu_btn glyphicon glyphicon-menu-left"></a>
            <nav class="navbar navbar-perso">
              <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo/sofra.png');?>" width="50"></a>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown"><a class="dropdown-toggle lien" href="<?php echo site_url('index.php'); ?>">Accueil</a></li>
                        <li class="dropdown"><a class="dropdown-toggle lien" href="<?php echo site_url('index.php/quisommesnous'); ?>">Qui sommes nous ?</a></li>
                        <li class="dropdown"><a class="dropdown-toggle drop_menu lien" data-toggle="dropdown" href="#">Prestations <b class="caret"></b></a>
                            <ul class="dropdown-menu autre">
                                <?php
                                    foreach($menu as $mp){ ?>
                                        <li class="dropdown"><a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/'.$mp->nom_prestation); ?>"><?php echo $mp->titre_prestation; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle lien" href="<?php echo site_url('index.php/offres'); ?>">Recrutement</a></li>
                        <li class="dropdown"><a class="dropdown-toggle lien" href="<?php echo site_url('index.php/contact'); ?>">Contact</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a type="button" id="news" class="lien" data-toggle="modal" data-target="#myModal">Actualités <span class="caret"></span></a>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      
          <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel">
          <!-- Indicators -->
          <?php 
            $active = "active";
            $i = 0;
          ?>
            <ol class="carousel-indicators">
            <?php foreach($carousel as $img){ ?>
              <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
              <?php 
                $i++;
                $active = "";
              ?>
            <?php } ?>
            </ol>
            
            <div class="carousel-inner" role="listbox">
            <?php $active = "active"; ?>
              <?php foreach($carousel as $img){ ?>
                <div class="item <?php echo $active; ?>">
                  <div class="img-carousel" style="background-image: url(<?php echo base_url('assets/img/carousel/'.$img->lien_image); ?>);"></div>
                    <div class="container">
                      
                    </div>
                </div>
                <?php $active = "" ?>
              <?php } ?>
            </div>
            
          </div>
      </header>