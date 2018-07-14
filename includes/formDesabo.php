<form class="formulaire" name="Desabo_ENTREPRISE" method="post" action="desabo.php" onsubmit="return verifFormDesabo(this)" webbot-action="--WEBBOT-SELF--">
    <p><br />
        <label><strong>Civilité<sup>*</sup></strong></label>
        <select name="CIVILITE" class="texte" id="civilite" tabindex="1">
            <option selected="selected">sélectionner</option>
            <option>Mademoiselle</option>
            <option>Madame</option>
            <option>Monsieur</option>
        </select><br/><br/>
        <label>Prénom :</label>
        <input name="PRENOM" type="text" id="Prenom" size="30" tabindex="2" /><br/><br/>
        <label>Nom :</label>
        <input name="NOM" type="text" id="Nom" size="30" tabindex="3" /><br/><br/>
        <label><strong>E-mail :<sup>*</sup></strong></label>
        <input name="E_MAIL" type="text" id="EMail" size="50" tabindex="4" onblur="verifMail(this)" required /><br/><br/>
        <input class="btn btn-default" type="submit" value="Envoyer"> 
    </p>
        <hr class="separateur" />
        <p><em><sup>*</sup><strong> Mentions obligatoires</strong></em></p>
        <hr class="separateur" />
        <p><br/><br/>Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d'un droit d 'accès aux données personnelles vous concernant, que vous pouvez exercer par écrit e-mail à <a href="mailto:contact@c1plus-informatique.fr">contact@c1plus-informatique.fr</a><br /> Seule c1plus-informatique.fr est destinataire des informations que vous lui communiquez.</p>
</form>