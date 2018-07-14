<form class="formulaire col-12" name="Contact_ENTREPRISE" method="post" action="contact.php" webbot-action="--WEBBOT-SELF--">
    <fieldset class="col-12 row">
        <h3 class="col-12">Informations personnelles</h3>
        <p class="col-12 text-center no-indent">
            <label>Civilité</label>
            <select name="CIVILITE" class="form-control" id="civilite" tabindex="1">
                <option selected="selected">Sélectionner</option>
                <option>Mademoiselle</option>
                <option>Madame</option>
                <option>Monsieur</option>
            </select><br/><br/>
        </p>
        <div class="form-group col-12 col-lg-6">
            <label for="usr">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="PRENOM" tabindex="2">
        </div>
        <div class="form-group col-12 col-lg-6">
            <label for="usr">Nom :</label>
            <input type="text" class="form-control" id="nom" name="NOM" tabindex="3">
        </div>
    </fieldset>
    <fieldset class="col-12 row">
        <h3 class="col-lg-12">Vos coordonnées</h3>
        <div class="form-group col-12 col-lg-12">
            <label><sup>*</sup><strong>Votre société</strong> :</label>
            <input class="form-control" name="SOCIETE" type="text" id="societe" tabindex="4" onblur="requiredFields(this)" required/>
        </div>
        <div class="form-group col-12 col-lg-6">
            <label><sup>*</sup><strong>Téléphone</strong> :</label>
            <input class="form-control" name="TELEPHONE" type="tel" id="telephone" tabindex="5" onblur="verifTel(this)" required/>
        </div>
        <div class="form-group col-12 col-lg-6">
            <label><sup>*</sup><strong>E-mail :</strong></label>
            <input name="E_MAIL" class="form-control" type="email" id="mail" tabindex="6" onblur="verifMail(this)" required/>
        </div>
    </fieldset>
    <fieldset class="col-12 row">
        <div class="form-group col-12 row">
            <label><sup>*</sup><strong>A quelle date souhaitez-vous être recontacté ?</strong> :</label>
            <input class="form-control" type="date" name="DISPO" required>
            <div class="radio col-4">
              <label class="radio-inline"><input type="radio" name="opth" value="10h/12h">10h / 12h</label>
            </div>
            <div class="radio col-4">
              <label class="radio-inline"><input type="radio" name="opth" value="14h/16h">14h / 16h</label>
            </div>
            <div class="radio col-4">
              <label class="radio-inline"><input type="radio" name="opth" value="16h/18h">16h / 18h</label>
            </div> 
        </div>
        <div class="form-group col-12">
            <label for="sel1">A quel sujet souhaitez-vous nous contacter ?</label>
            <select class="form-control" name="OBJET" id="objet" value="<?php echo $_GET['objet']; ?>" tabindex="7">
                <option>Matériel Informatique</option>
                <option>Maintenance Informatique</option>
                <option>Solutions cloud</option>
                <option>Solutions print</option>
                <option>Internet &amp; haut débit</option>
                <option>Solutions logicielles</option>
                <option>Messagerie &amp; antivirus</option>
                <option>Sauvegarde</option>
                <option>Sécurité informatique</option>
                <option>Cloud computing</option>
                <option>Infogérance</option>
                <option>Autre</option>
              </select>
        </div>

        <div class="form-group col-12">
            <label for="comment">Votre message :</label>
            <textarea class="form-control" rows="5" id="demande" name="DEMANDE" tabindex="8"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" name="INFO_ENTREPRISE" id="Newsletter" class="form-check-input" value="NepasRecevoir" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Je ne souhaite pas recevoir les informations régulières de c1plusinformatique.fr ou de ses partenaires.<br /><br /></label>
        </div>
        <p>
            <input name="envoyer" class="bouton2 first" type="submit" id="envoyer" value="Envoyer" /><br /><br /><br />
            <em><sup>*</sup><strong> Mentions obligatoires</strong></em><br />
            <small>Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d'un droit d'accès aux données personnelles vous concernant, que vous pouvez exercer par e-mail à <a href="mailto:contact@c1plus-informatique.fr">contact@c1plus-informatique.fr</a><br /> Seule c1plusinformatique.fr et ses partenaires sont destinataires des informations que vous lui communiquez.</small>
        </p>
    </fieldset>
</form>
