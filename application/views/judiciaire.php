<?php foreach($judiciaire as $presta){ ?>
    <h1 class="text-center">Le recouvrement judiciaire</h1>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <div>
                <p class="text-justify lead"><?php echo $presta->description_prestation; ?><p/>
            </div>
        </div>
        <div class="col-md-5">
            <img style="width: 100%;" src="<?php echo base_url('/'.$presta->img_prestation); ?>" alt="" />
        </div>
    </div>
<?php } ?>