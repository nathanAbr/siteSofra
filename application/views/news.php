<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-news" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Les dernières actualités</h4>
            </div>
            <div class="modal-body">
            <?php if(!empty($news)){ ?>
                <div class="bs-example" data-example-id="simple-carousel"> 
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval=""> 
                        <a class="left carousel-control news-control" href="#carousel-example-generic" role="button" data-slide="prev"> 
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                            <span class="sr-only">Previous</span> 
                        </a> 
                        <a class="right carousel-control news-control" href="#carousel-example-generic" role="button" data-slide="next"> 
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
                            <span class="sr-only">Next</span> 
                        </a> 
                        <div class="carousel-inner" role="listbox">
                            <?php $active="active"; ?>
                            <?php foreach($news as $actu){ 
                                    $date_j = date('Y-m-d');
                            ?>
                                <div class="item <?php echo $active; ?>"> 
                                    <h4 id="titre-news" class="text-center"><?php echo $actu->Titre_news; ?></h4>
                                    <hr class="row-featurette"></hr>
                                    <p><?php echo date("d/m/Y", strtotime($actu->Date_news)); ?></p>
                                    <p><?php echo $actu->Contenu_news; ?></p>
                                </div>
                                <?php $active=""; ?>
                            <?php }?>
                        </div> 
                    </div> 
                </div>
            <?php } else { echo '<h4>Nous n\'avons pas d\'évènements à venir</h4>'; } ?>
            </div>
        </div>
    </div>
</div>