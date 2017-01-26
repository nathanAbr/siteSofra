<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
            <?php echo $menu_presta; ?>
            
            <div class="container">
                <?php
                    if(isset($content)){
                        echo $content;
                    }else{echo '<h1>Désolé, il n\'y a rien à afficher à cette URL</h1>';}
                ?>
            </div>
            
            <footer>
                <!---->
                <div class="panel-group panel-footer" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="bandeau-footer">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="hidden-lg">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title text-center">
                                        <span class="glyphicon glyphicon-eject"></span>  
                                    </h4>
                                </div>
                            </a>
                        </div>  
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body panel-footer">
                                <div class="mastfoot">
                                    <div class="inner">
                                        <div class="container">
                                            <div class="row row-footer">
                                                <div class="col-xs-3">
                                                    <div class="logo-accueil-footer"></div>
                                                </div>
                                                
                                                <div class="col-xs-3 prestation-footer">
                                                    <h4>Nos prestations</h4>
                                                        <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/recouvrement_amiable'); ?>">Recouvrement amiable</a></br>
                                                        <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/recouvrement_judiciaire'); ?>">Recouvrement judiciaire</a></br>
                                                        <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/pertes_et_profits'); ?>">Pertes et profits</a></br>
                                                        <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/cession_de_creances'); ?>">Cession de creances</a></br>
                                                        <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/dossiers_en_banque_de_france'); ?>">Dossiers en banque de france</a></br>
                                                </div>
                                                
                                                <div class="col-xs-3">
                                                    <h4>&Acirc; savoir</h4>
                                                    <p><a href="#">Mention légal</a></p>
                                                    <p><a href="http://ancr.fr/fr/annuaire-adherents/sarl-sofra" onclick="window.open(this.href);return false">SOFRA est membre le l'AAEC et de l'ANCR</a></p>
                                                </div>
                                                
                                                <div class="col-xs-3 social">
                                                    <h4>Social</h4>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/1.png'); ?>" alt="" /></div></a>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/7.png'); ?>" alt="" /></div></a>
                                                    <a href="#"><div class="social"><img src="<?php echo base_url('assets/img/social/png/64/10.png'); ?>" alt="" /></div></a>
                                                </div>
                                            </div>
                                            <hr class="" />
                                            <div class="row">
                                                <p>Copyright - &copy; 2017. Tous droits réservés à SOFRA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
    <script>

$(document).ready(function(){

    $('html, body').scrollTop(20);

        $(window).on('load', function() {
        setTimeout(function(){
            $('html, body').scrollTop(0);
        }, 0);
    });

    $('[data-toggle="tooltip"]').tooltip({animation: true}); 

    var offset = $(".navbar-wrapper").offset().top;
   

    $(document).scroll(function(){
        var scrollTop = $(document).scrollTop();
        if(scrollTop > offset){
            $(".navbar-wrapper").css("margin-top","-20px");
            $(".menu_btn").css("margin-top","-40px");
        }
        else{
            $(".navbar-wrapper").css("margin-top","20px");
            $(".menu_btn").css("margin-top","0px");
            $(".menu_btn").css("right","0px");
        }
    });

    $('.nav-tabs a').on('click', function (e) {
        e.preventDefault();

        $('.nav-tabs a').on('shown.bs.tab', function(event){
            $('tab-pane').hide()
    
        });  
    });  

    $(document).ready(function(){
        $('.collapsible').collapsible();
      });
    });

</script>
</html>

