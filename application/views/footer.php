    <div class="bandeau-footer"></div>
    <div class="mastfoot">
        <div class="inner">
            <div class="container">
                <div class="row row-footer">
                    <div class="col-xs-3">
                        <div class="logo-accueil-footer"></div>
                    </div>
                    
                    <div class="col-xs-3">
                        <h4>Nos prestations</h4>
                        <?php
                        foreach($footer as $ft){ ?>
                            <a class="dropdown-toggle" href="<?php echo site_url('index.php/prestations/affichage_prestations/'.$ft->lien_prestation); ?>"><?php echo $ft->nom_prestation; ?></a></br>
                        <?php } ?>
                    </div>
                    
                    <div class="col-xs-3">
                        <h4>&Acirc; savoir</h4>
                        <p>Mention légal</p>
                        <p>SOFRA est membre le l'AAEC et de l'ANCR</p>
                    </div>
                    
                    <div class="col-xs-3">
                        <h4>Social</h4>
                        <p>Mention légal</p>
                        <p>SOFRA est membre le l'AAEC et de l'ANCR</p>
                    </div>
                </div>
                <hr class="" />
                <div class="row">
                    <p>Copyright - &copy; 2015. Tous droits réservés à SOFRA</p>
                </div>
            </div>
        </div>
    </div>