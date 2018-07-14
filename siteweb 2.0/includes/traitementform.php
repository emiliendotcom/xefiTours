<?php 
                $mail = 'contact@c1plus-informatique.com';
                $passage_ligne = "\n";
                $boundary = "-----=".md5(rand());

                $header = "From: \"C1+ Informatique\"<contact@c1plus-informatique.com>".$passage_ligne;
                $header.= "Reply-to: \"C1+ Informatique\"<contact@c1plus-informatique.com>".$passage_ligne;
                $header.= "MIME-Version: 1.0"."\n";
                $header.= "Content-Type: multipart/alternative;"."\n"." boundary=\"$boundary\"".$passage_ligne;
                //==========
                
                $filename ="contact.csv";
                $fic = fopen('contact.csv', 'a+');
                if (!isset($_POST['E_MAIL']) && !isset($_POST['TELEPHONE']) && !isset($_POST['SOCIETE']) && !isset($_POST['DISPO']) && !isset($_POST['opth']))
                    {
                        echo '<p class="text-center">Merci de remplir ce formulaire pour toute demande :<br/></p>';
                        include('includes/formContact.php');
                    }
                else if (!isset($_POST['TELEPHONE']) || !isset($_POST['SOCIETE']) || !isset($_POST['E_MAIL']))
                    {
                        echo '<p><strong> Merci de bien remplir tous les champs obligatoires. <br /></strong></p>';
                        include('includes/formContact.php');
                    }
                else
                {
                    if (filter_var($_POST['E_MAIL'], FILTER_VALIDATE_EMAIL)) 
                    {
                        if (is_numeric($_POST['TELEPHONE']))
                            {
                                $demande = str_replace(array("\r\n", "\n", "\r"), " ", $_POST["DEMANDE"]); 
                                fputcsv($fic, array($_POST['CIVILITE'].";".$_POST['PRENOM'].";".$_POST['NOM'].";".$_POST['SOCIETE'].";".$_POST['TELEPHONE'].";".$_POST['E_MAIL'].";".$_POST['DISPO'].";".$_POST['opth'].";".$demande.";.".$_POST['INFO_ENTREPRISE']."; \n"));
                                        $message = '';
                                        if ($_POST['CIVILITE'] != 'Sélectionner') {
                                            $message .= "Civilité : ".$_POST['CIVILITE']."\n";
                                        }
                                        if (isset($_POST['PRENOM']) && $_POST['PRENOM'] != ''){
                                            $message .= "Prénom : ".$_POST['PRENOM']."\n";
                                        }
                                        if (isset($_POST['NOM']) && $_POST['NOM'] != ''){
                                            $message .= "Nom : ".$_POST['NOM']."\n";
                                        }
                                        $message .= "Société : ".$_POST['SOCIETE']."\n";
                                        $message .= "Téléphone : ".$_POST['TELEPHONE']."\n";
                                        $message .= "Email : ".$_POST['E_MAIL']."\n";
                                        if (isset($_POST['DISPO'])){
                                            $message .= "Date de rappel : ".$_POST['DISPO']."\n";
                                        }
                                        if (isset($_POST['opth'])){
                                            $message .= "Heure de rappel : ".$_POST['opth']."\n";
                                        }
                                        $message .= "Sujet de la demande : ".$_POST['OBJET']."\n";
                                        if (isset($_POST['DEMANDE']) && $_POST['DEMANDE']!= '')
                                        {
                                            $message .= "Message : ".$_POST['DEMANDE']."\n";
                                        }
                                        if (isset($_POST['INFO_ENTREPRISE']))
                                        {
                                            $message .= "Ne veut pas recevoir d'infos \n";
                                        }
                                        $message = wordwrap($message, 200, "\r\n");

                                        $mel.= $passage_ligne."--".$boundary.$passage_ligne;
                                        //=====Ajout du message au format HTML
                                        $mel.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
                                        $mel.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                                        $mel.= $passage_ligne.$message.$passage_ligne;
                                        //==========
                                        $mel.= $passage_ligne."--".$boundary."--".$passage_ligne;
                                        $mel.= $passage_ligne."--".$boundary."--".$passage_ligne;
                                        //==========
                                        $dem = 'Prise de contact - '.$_POST['OBJET'];

                                        mail($mail, $dem, $mel, $header);

                                echo '<section class="col-lg-12"><h3><strong>Confirmation d\'envoi de message</strong></h3>
                                    <p>Nous vous remercions de votre message.<br/><br/> Celui-ci sera transmis rapidement à nos techniciens.<br/><br/> Nous vous contacterons rapidement. <br/><br/>Merci de votre confiance.<br/<br/>A bientôt !<br/><br/></p>
                                    <h3>Une remarque, des questions...</h3>
                                    <p>Vous pouvez, pour toutes remarques ou questions nous envoyer un mail à <a href="mailto:contact@c1plus-informatique.com">contact@c1plus-informatique.com</a><br/><br/></p></section>';
                            }
                        else
                        {
                            echo '<p><strong>Attention ! Le numéro de téléphone que vous avez indiqué n\'est pas valide.<br /></strong></p>';
                            include('includes/formContact.php');
                        }
                    }
                    else
                    {
                        echo '<p><strong>Attention ! L\'adresse mail que vous avez indiqué n\'est pas valide.<br /></strong></p>';
                        include('includes/formContact.php');
                    }
                }
                ?>    