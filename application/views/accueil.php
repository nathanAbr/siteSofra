<?php foreach($accueil as $home){ ?>
    <div class="row">
        <div class="col-md-7">
            <h1 class="text-center text-black"><?php echo $home->titre_accueil;?></h1>
            <h2 class="text-grey"><?php echo $home->slogan_accueil; ?></h2>
            <p class="text-justify text-black"><?php echo $home->descriptif_accueil; ?></p>
        </div>
        <div class="col-md-4">
            <div class="logo-accueil"></div>
        </div>
    </div>
<?php } ?>

