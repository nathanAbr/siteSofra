    <h1 class="text-center">Nos offres d'emploi</h1>
    <hr class="featurette-divider">
    <div class="row featurette">
                  
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-perso">
                <div class="panel-heading">Comptabilite</div>
                <div class="panel-body">
                    <ul class="collapsible" data-collapsible="accordion">
                        <?php foreach($offre_comptabilite as $compta){ ?>
                        <li>
                            <div class="collapsible-header">
                                <a href="#<?php echo $compta->id_offre; ?>" aria-controls="<?php echo $compta->id_offre; ?>"><?php echo $compta->titre_offre; ?></a>
                            </div>
                            <div class="collapsible-body">
                                <div id="<?php echo $compta->id_offre; ?>">
                                    <p>Durée :<?php echo $compta->horaire_offre; ?></p>
                                    <p>Lieu :<?php echo $compta->lieu_offre; ?></p>
                                    <p>Contrat :<?php echo $compta->contrat_offre; ?></p>
                                    <p>Date de début :<?php echo $compta->date_deb_offre; ?></p>
                                    <p>Diplôme :<?php echo $compta->diplome_offre; ?></p>
                                    <p>Informations supplémentaires :<?php echo $compta->info_supp_offre; ?></p>
                                    <p>Description :<?php echo $compta->descriptif_offre; ?></p>
                                    <ul>Qualités requises :<?php echo $compta->qualite_offre; ?></ul>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="panel panel-perso">
                <div class="panel-heading">Commerciale</div>
                <div class="panel-body">
                    <ul class="collapsible" data-collapsible="accordion">
                    <?php foreach($offre_commerciale as $comm){ ?>
                        <li>
                            <div class="collapsible-header">
                                <a href="#<?php echo $comm->id_offre; ?>" aria-controls="<?php echo $comm->id_offre; ?>"><?php echo $comm->titre_offre; ?></a>
                            </div>
                            <div class="collapsible-body">
                                <div id="<?php echo $comm->id_offre; ?>">
                                    <p>Durée :<?php echo $comm->horaire_offre; ?></p>
                                    <p>Lieu :<?php echo $comm->lieu_offre; ?></p>
                                    <p>Contrat :<?php echo $comm->contrat_offre; ?></p>
                                    <p>Date de début :<?php echo $comm->date_deb_offre; ?></p>
                                    <p>Diplôme :<?php echo $comm->diplome_offre; ?></p>
                                    <p>Informations supplémentaires :</br></br><?php echo $comm->info_supp_offre; ?></p>
                                    <p>Description :<?php echo $comm->descriptif_offre; ?></p>
                                    <ul>Qualités requises :<?php echo $comm->qualite_offre; ?></ul>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="panel panel-perso">
                <div class="panel-heading">Recouvrement</div>
                <div class="panel-body">
                    <ul class="collapsible" data-collapsible="accordion">
                    <?php foreach($offre_recouvrement as $recouv){ ?>
                        <li>
                            <div class="collapsible-header">
                                <a href="#<?php echo $recouv->id_offre; ?>" aria-controls="<?php echo $recouv->id_offre; ?>" role="tab" data-toggle="tab"><?php echo $recouv->titre_offre; ?></a>
                            </div>
                            <div class="collapsible-body">
                                <div id="<?php echo $recouv->id_offre; ?>">
                                    <p>Durée :<?php echo $recouv->horaire_offre; ?></p>
                                    <p>Lieu :<?php echo $recouv->lieu_offre; ?></p>
                                    <p>Contrat :<?php echo $recouv->contrat_offre; ?></p>
                                    <p>Date de début :<?php echo $recouv->date_deb_offre; ?></p>
                                    <p>Diplôme :<?php echo $recouv->diplome_offre; ?></p>
                                    <p>Informations supplémentaires :</br></br><?php echo $recouv->info_supp_offre; ?></p>
                                    <p>Description :<?php echo $recouv->descriptif_offre; ?></p>
                                    <p>Qualités requises :<?php echo $recouv->qualite_offre; ?></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="panel panel-perso">
                <div class="panel-heading">Enquêtes</div>
                <div class="panel-body">
                    <ul class="collapsible" data-collapsible="accordion">
                    <?php foreach($offre_enquete as $enquete){ ?>
                        <li>
                            <div class="collapsible-header">
                                <a href="#<?php echo $enquete->id_offre; ?>" aria-controls="<?php echo $enquete->id_offre; ?>" role="tab" data-toggle="tab"><?php echo $enquete->titre_offre; ?></a>
                            </div>
                            <div class="collapsible-body">
                                <div role="tabpanel" class="tab-pane" id="<?php echo $enquete->id_offre; ?>">
                                    <p>Durée : <?php echo $enquete->horaire_offre; ?></p>
                                    <p>Lieu : <?php echo $enquete->lieu_offre; ?></p>
                                    <p>Contrat : <?php echo $enquete->contrat_offre; ?></p>
                                    <p>Date de début : <?php echo $enquete->date_deb_offre; ?></p>
                                    <p>Diplôme : <?php echo $enquete->diplome_offre; ?></p>
                                    <p>Informations supplémentaires :</br></br><?php echo $enquete->info_supp_offre; ?></p>
                                    <p>Description :<?php echo $enquete->descriptif_offre; ?></p>
                                    <ul>Qualités requises :<?php echo $enquete->qualite_offre; ?></ul>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
