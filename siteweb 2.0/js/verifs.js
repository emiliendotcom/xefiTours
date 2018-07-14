function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifTel(champ)
{
   var regex = /^[0-9]{10}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifForm(f)
{
    var telOk = verifTel(f.TELEPHONE);
    var mailOk = verifMail(f.E_MAIL);
    var prenomOK = requiredFields(f.PRENOM);
    var nomOK = requiredFields(f.NOM);

   if(telOk && mailOk && CPOk && prenomOK && nomOK && societeOK && paysOK)
    {
        return true;
    }
   else
   {
        alert("Veuillez remplir correctement tous les champs obligatoires");
        return false;
   }
}

function verifFormDesabo(f)
{
    var mailOk = verifMail(f.E_MAIL);
    
    if(mailOk)
        {
            return true;
        }
    else
        {
            alert("Veuillez remplir correctement tous les champs obligatoires");
            return false; 
        }
}

function requiredFields(f)
{
    if (f.value != '')
        {
            surligne(f, false);
            return true;
        }
    else 
        {
            surligne(f, true);
            return false;
        }
}
