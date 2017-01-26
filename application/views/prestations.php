<?php foreach($prestations as $presta){ ?>
    <?php $param = $presta->form_prestation; ?>
    <h1 class="text-center"><?php echo $presta->titre_prestation; ?></h1>
            <hr class="featurette-divider">
    <div class="row featurette">
        
        <div class="col-md-3 col-md-offset-8">
       
        <?php if($presta->nom_prestation != "enquetes_civiles_et_commerciales"){ ?>
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('index.php/formulaire/affichage_form/'.$param); ?>" data-toggle="tooltip" data-placement="top" title="Remplissez un devis de prestation">Devis</a>
        <?php }else{ ?>
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('index.php/formulaire/affichage_form/'.$param); ?>" role="button">Devis</a>
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url('index.php/formulaire/affichage_form/npai'); ?>" role="button">NPAI</a>
        <?php } ?>
        </div>
    </div>
    <div class="row featurette">
        <div class="col-md-7">
            <p class="text-justify lead"><?php echo $presta->description_prestation; ?><p/>
        </div>
        <div class="col-md-5">
            <img style="width: 100%;" src="<?php echo base_url('/'.$presta->img_prestation); ?>" alt="" />
        </div>
    </div>
<?php } ?>
