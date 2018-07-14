<!doctype html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="img/ico2.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>C1Plus Informatique</title>
    <meta name="description" content="">
</head>

<body>
    <?php $page = "4"; ?>
    <?php include('includes/header.php'); ?>
    <div id="container" class="row">
        <div class="col-lg-4 col-sm-12 col-12 align-self-start row accueil icones">
            <?php include('includes/solution.php'); ?>
            <div class="col-12">
                <address>
                    11 avenue du Danemark <br />
                    37 100 Tours Nord<br />
                    Téléphone : <a href="tel: 0247889366">02 47 88 93 66</a>
                </address>
            </div>
        </div>
        <main class="col-lg-8 col-sm-12">
            <p class="text-center no-indent"><img src="img/index.jpg" alt=""/></p>
            <section class="col-12">
                
                <?php
                    $mail = 'contact@c1plus-informatique.fr';
                    $passage_ligne = "\n";
                    $boundary = "-----=".md5(rand());

                    $header = "From: \"C1Plus Informatique\"<contact@c1plus-informatique.fr>".$passage_ligne;
                    $header.= "Reply-to: \"C1Plus Informatique\"<contact@c1plus-informatique.fr>".$passage_ligne;
                    $header.= "MIME-Version: 1.0"."\n";
                    $header.= "Content-Type: multipart/alternative;"."\n"." boundary=\"$boundary\"".$passage_ligne;
                    //==========
                    $filename ="desabo.csv";
                    $fic = fopen('desabo.csv', 'a+');
                    if (isset($_POST['E_MAIL']) && (filter_var($_POST['E_MAIL'], FILTER_VALIDATE_EMAIL)))
                        {
                            if (isset($_POST['NOM']))
                            {
                                $message = "Nom : ".$_POST['NOM']."\n";
                                 if (isset($_POST['PRENOM']))
                                {
                                    $message .= "Prénom : ".$_POST['PRENOM']."\n";
                                     fputcsv($fic, array($_POST['NOM'].";".$_POST['PRENOM'].";".$_POST['E_MAIL']));
                                }
                                else
                                {
                                    fputcsv($fic, array($_POST['NOM'].";".$_POST['E_MAIL']));
                                }
                                $message .= "E-Mail : ".$_POST['E_MAIL'];
                                $message = wordwrap($message, 70, "\r\n");
                            }
                            else
                            {
                                if(isset($_POST['PRENOM']))
                                {
                                    $message .= "Prénom : ".$_POST['PRENOM']."\n";
                                }
                                $message .= "E-Mail : ".$_POST['E_MAIL'];
                                $message = wordwrap($message, 70, "\r\n");
                            }
                            fputcsv($fic, array($_POST['PRENOM'].";".$_POST['NOM'].";".$_POST['E_MAIL']."; \n"));
                            $message ="Prénom : ".$_POST['PRENOM']."\n";
                            $message .="Nom : ".$_POST['NOM']."\n";
                            $message .="E-mail : ".$_POST['E_MAIL'];
                            $message = wordwrap($message, 70, "\r\n");
                        
                            $mel.= $passage_ligne."--".$boundary.$passage_ligne;
                            //=====Ajout du message au format HTML
                            $mel.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
                            $mel.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                            $mel.= $passage_ligne.$message.$passage_ligne;
                            //==========
                            $mel.= $passage_ligne."--".$boundary."--".$passage_ligne;
                            $mel.= $passage_ligne."--".$boundary."--".$passage_ligne;
                            //==========

                            mail($mail, 'Desabonnement - Website', $mel, $header);

                            echo '<section><h3> <strong>Confirmation</strong></h3>
                                    <p>Nous avons bien enregistré votre demande de désabonnement.<br/><br/> Nous nous engageons à vous retirer de notre mailing list et sommes désolés de vous avoir importuné.<br/><br/> A bientôt !<br/><br/></p>
                                    <h3>Nous contacter</h3>
                                    <p>Vous pouvez nous envoyer un mail à <a href="mailto:contact@c1plus-informatique.fr">contact@c1plus-informatique.fr</a> ou vous rendre sur la page <a href="contact.php">Contact</a><br/><br/></p></section>';
                        }
                    else if (!isset($_POST['E_MAIL']))
                    {
                        include('includes/formDesabo.php');
                    }
                    else
                    {
                        echo '<p> Afin que nous puissions traiter votre demande, merci de remplir correctement tous les champs obligatoires.</p>';
                    }
                    fclose($fic);
                ?>
            </section>
        </main>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>