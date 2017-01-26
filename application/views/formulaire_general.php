<h1 class="text-center">Demande de devis</h1>
<hr class="featurette-divider">
<form method="POST" accept-charset="utf-8" action="<?php echo site_url('index.php/formulaire/traitement_form/general'); ?>" class="form-horizontal">
    <div class="form-group">
        <label for="societe" class="col-sm-2 control-label">Société</label>
        <div class="col-sm-10">
            <input type="text" name="societe" id="societe" placeholder="Société" class="form-control" value="<?php echo set_value('societe'); ?>" />
            <?php echo form_error('societe'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="secteur" class="col-sm-2 control-label">Secteur d'activité</label>
        <div class="col-sm-10">
            <input type="text" name="secteur" id="secteur" placeholder="Secteur d'activité" class="form-control" value="<?php echo set_value('secteur'); ?>" />
            <?php echo form_error('secteur'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="interlocuteur" class="col-sm-2 control-label">Interlocuteur</label>
        <div class="col-sm-10">
            <input type="text" name="interlocuteur" id="interlocuteur" placeholder="Interlocuteur" class="form-control" value="<?php echo set_value('interlocuteur'); ?>" />
            <?php echo form_error('interlocuteur'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="fonction" class="col-sm-2 control-label">Fonction</label>
        <div class="col-sm-10">
            <input type="text" name="fonction" id="fonction" placeholder="Fonction" class="form-control" value="<?php echo set_value('fonction'); ?>" />
            <?php echo form_error('fonction'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="adresse" class="col-sm-2 control-label">Adresse</label>
        <div class="col-sm-10">
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" class="form-control" value="<?php echo set_value('adresse'); ?>" />
            <?php echo form_error('adresse'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="standard" class="col-sm-2 control-label">N° du standard</label>
        <div class="col-sm-10">
            <input type="tel" name="standard" id="standard" placeholder="N° du standard" class="form-control" value="<?php echo set_value('standard'); ?>" />
            <?php echo form_error('standard'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="direct" class="col-sm-2 control-label">N° de ligne directe</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="direct" placeholder="N° de ligne directe" name="direct" value="<?php echo set_value('direct'); ?>" />
            <?php echo form_error('direct'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="mail" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-10">
            <input type="mail" class="form-control" id="mail" placeholder="E-mail" name="mail" value="<?php echo set_value('mail'); ?>" />
            <?php echo form_error('mail'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputJud" class="col-sm-2 control-label">Confier la gestion de la procédure judiciaire ?</label>
        <div class="col-sm-4" id="inputJud">
            <div class="radio">
                <label>
                    <input type="radio" name="radiosJud" id="optionsRadios1" value="oui" checked>
                    Oui 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="radiosJud" id="optionsRadios2" value="non">
                    Non
                </label>
            </div>
        </div>
        <label for="inputCreances" class="col-sm-2 control-label">Typologie des céances</label>
        <div class="col-sm-4" id="inputCreances">
            <div class="radio">
                <label>
                    <input type="radio" name="radiosCreances" id="optionsRadios1" value="civiles" checked>
                    Civiles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="radiosCreances" id="optionsRadios2" value="commerciale">
                    Commerciales
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputVolume" class="col-sm-2 control-label">Volume moyen mensuel</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputVolume" name="inputVolume" placeholder="Volume moyen mensuel" value="<?php echo set_value('inputVolume'); ?>">
            <?php echo form_error('inputVolume'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAncien" class="col-sm-2 control-label">Ancienneté des créances</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputAncien" name="inputAncien" placeholder="Ancienneté des créances" value="<?php echo set_value('inputAncien'); ?>">
            <?php echo form_error('inputAncien'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputLocal" class="col-sm-2 control-label">Localisation des créances</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLocal" name="inputLocal" placeholder="Localisation des créances" value="<?php echo set_value('inputLocal'); ?>">
            <?php echo form_error('inputLocal'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputMontantM" class="col-sm-2 control-label">Montant moyen des créances</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputMontantM" name="inputMontantM" placeholder="Montant moyen des créances" value="<?php echo set_value('inputMontantM'); ?>">
            <?php echo form_error('inputMontantM'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputMontantT" class="col-sm-2 control-label">Montant total des créances</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputMontantT" name="inputMontantT" placeholder="Montant total des créances" value="<?php echo set_value('inputMontantT'); ?>">
            <?php echo form_error('inputMontantT'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputJud" class="col-sm-2 control-label">Dossiers identifiés NPAI ?</label>
        <div class="col-sm-10" id="inputNPAI">
            <div class="radio">
                <label>
                    <input type="radio" name="radiosNPAI" id="optionsRadios1" value="oui" checked>
                    Oui 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="radiosNPAI" id="optionsRadios2" value="non">
                    Non
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputExter" class="col-sm-2 control-label">Dossiers externalisés</label>
        <div class="col-sm-10">
            <select class="form-control" id="inputExter" name="inputExter">
                <option> </option>
                <option>Société de recouvrement</option>
                <option>Huissiers</option>
                <option>Assurance crédit</option>
                <option>Autre</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputDate" class="col-sm-2 control-label">Date de cession</label>
        <div class="col-sm-10">
            <input type="date" name="inputDate" class="form-control" id="inputDate" placeholder="jj/mm/aaaa" value="<?php echo set_value('inputDate'); ?>">
            <?php echo form_error('inputDate'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputComm" class="col-sm-2 control-label">Commentaires</label>
        <div class="col-sm-10" id="inputComm">
            <textarea class="form-control" rows="3" name="comm" placeholder="Informations supplémentaires" value="<?php echo set_value('comm'); ?>"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>