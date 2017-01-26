<?php foreach($contact as $contacter){ ?>
    <h1 class="text-center">Nous contacter</h1>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <div class="panel panel-perso">
                <div class="panel-heading">Nous trouver</div>
                <div class="panel-body">
                    <p><?php echo $contacter->adresse_contact; ?></p>
                    <p><?php echo $contacter->cp_contact; ?> <?php echo $contacter->ville_contact; ?></p>
                </div>
            </div>
            <div class="panel panel-perso">
                <div class="panel-heading">Nous Contacter par téléphone</div>
                <div class="panel-body">
                    <p>Tèl : <?php echo $contacter->tel_contact; ?></p>
                    <p>Fax : <?php echo $contacter->fax_contact; ?></p>
                </div>
            </div>
            <div class="panel panel-perso">
                <div class="panel-heading">Nous Contacter par Mail</div>
                <div class="panel-body">
                    <p>Mail : <?php echo $contacter->mail_contact; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <iframe id="google-map" title="emplacement SOFRA" src="<?php echo $contacter->map_contact; ?>" allowfullscreen></iframe>
        </div>
    </div>
<?php } ?>