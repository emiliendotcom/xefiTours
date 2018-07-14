<!doctype html>
<html lang="fr">

<head>
    <link rel="icon" type="image/png" href="https://www.c1plus-informatique.fr/img/ico2.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>C1Plus Informatique</title>
    <meta name="description" content="">
</head>

<body>
    <?php $page = "1"; ?>
    <header class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <p class="text-center"><a class="col-lg-12" href="index.php"><img class="logo" src="https://www.c1plus-informatique.fr/img/c1plus2.png" alt="C1+ Informatique"/></a><br />
        </p>
    </div>
    <div class="menuhaut col-lg-9 col-md-6 col-sm-12 align-self-start">

        <div class="projet text-right">
            <a href="tel:0247889366"><button class="btn btn-outline-danger" type="button" aria-haspopup="true" aria-expanded="true">
            Un projet ? Appelez-nous: <br />
                <strong>02 47 88 93 66</strong>
            </button></a>
        </div>
        <p class="slogan cool-link text-center"><span class="blanc">Par des professionnels,</span><span class="rouge"> pour des professionnels.</span></p>
    </div>
    <div class="lignerouge cache1 col-12">
        <ul class="row">
            <?php if ($page != 1) { echo '<li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/index.php">Accueil</a></li>'; } ?>
            <?php if ($page !=2) { echo '<li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/solutions.php#materiel">Nos solutions</a>
                <ul class="cache3">
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#materiel">Matériel informatique</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#maintenance">Maintenance informatique</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#cloud">Solutions Cloud</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#print">Solutions print</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#internet">Internet &amp; haut débit</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#logiciel">Solutions logicielles</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#messagerie">Messagerie &amp; antivirus</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#sauvegarde">Sauvegarde</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#securite">Sécurité informatique</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#cloudcomputing">Cloud Computing</a></li>
                    <li><a href="https://www.c1plus-informatique.fr/solutions.php#infogerance">Infogérance</a></li>
                </ul>
            </li>';} ?>

            <?php if ($page != 3) { echo '<li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/xefi.php">XEFI Tours</a></li>'; } ?>
            <?php if ($page != 4) { echo '<li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/contact.php#contact">Se faire rappeler</a></li>'; } ?>
            <li><a target="blank_" href="https://www.facebook.com/c1plusinformatique"><i class="fab fa-facebook-square"></i></a></li>
            <li><a target="blank_" href="https://www.linkedin.com/in/c1plusinformatique/"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="cache2 lignerouge col-12">
        <nav class="col-12 navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">Menu</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav row">
                    <li><a class="col-3" href="https://www.c1plus-informatique.fr/index.php">Accueil</a></li>
                    <li><a class="col-3" href="https://www.c1plus-informatique.fr/solutions.php#materiel">Nos solutions</a> </li>
                    <li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/xefi.php">XEFI Tours</a></li>
                    <li><a class="col-lg-3" href="https://www.c1plus-informatique.fr/contact.php#contact">Se faire rappeler</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    <div id="container" class="row">
        <div class="col-lg-4 col-sm-12 col-xs-12 align-self-start icones row">
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#materiel"><img src="https://www.c1plus-informatique.fr/img/icones/materielinfo.jpg"/><br />Matériel informatique</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#maintenance"><img src="https://www.c1plus-informatique.fr/img/icones/maintenanceinfo.jpg"/><br />Maintenance informatique</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#cloud"><img src="https://www.c1plus-informatique.fr/img/icones/solutioncloud.jpg"/><br />Solutions cloud</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#print"><img src="https://www.c1plus-informatique.fr/img/icones/solutionprint.jpg"/><br />Solutions print</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#internet"><img src="https://www.c1plus-informatique.fr/img/icones/internet.jpg"/><br />Internet &amp; haut débit</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#logiciel"><img src="https://www.c1plus-informatique.fr/img/icones/logiciel.jpg"/><br />Solutions logicielles</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#messagerie"><img src="https://www.c1plus-informatique.fr/img/icones/messagerieantivirus.jpg"/><br />Messagerie &amp; antivirus</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#sauvegarde"><img src="https://www.c1plus-informatique.fr/img/icones/sauvegarde.jpg"/><br />Sauvegarde</a></p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#securite"><img src="https://www.c1plus-informatique.fr/img/icones/securite.jpg"/><br />Sécurité informatique</a></p>
            </div>
            <div class="col-lg-6 col-sm-6 col-6">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#cloudcomputing"><img src="https://www.c1plus-informatique.fr/img/icones/cloudcomputing.jpg"/><br />Cloud computing</a></p>
            </div>
            <div class="col-lg-6 col-sm-6 col-6">
                <p><a href="https://www.c1plus-informatique.fr/solutions.php#infogerance"><img src="https://www.c1plus-informatique.fr/img/icones/infogérance.jpg"/><br />Infogérance</a></p>
            </div>
            <div class="col-12">
                <hr />
                <p>C1Plus Informatique appartient au réseau<br />
                    <a target="blank_" href="https://www.xefi.fr" target="blank_"><img src="https://www.c1plus-informatique.fr/img/logo-xefi.png" alt="" /></a></p>
            </div>

        </div>
        <main class="col-lg-8 col-sm-12">

            <h1>C1+ Informatique rejoint le réseau <a target="blank_" href="https://www.xefi.fr"><strong>XEFI</strong></a></h1>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cache1"><img src="https://www.c1plus-informatique.fr/img/index2.jpg" alt=""></div>
                        <div class="cache2"><img src="https://www.c1plus-informatique.fr/img/slider1-mini.jpg" alt="" /></div>
                    </div>
                    <div class="carousel-item">
                        <div class="cache1"><img src="https://www.c1plus-informatique.fr/img/index1.jpg" alt=""></div>
                        <div class="cache2"><img src="https://www.c1plus-informatique.fr/img/slider2-mini.jpg" alt="" /></div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
            <p class="text-center">C1plus Informatique, c'est 20 ans d'expérience, le choix, les conseils et le Professionnalisme en + :<br /><br />

                <strong>Nos clients :</strong> grands comptes, PME-TPE, sites industriels, logistiques ou universitaires, groupes scolaire, architectes, BTP...<br />

                <strong>Un réseau de partenaires leaders sur leurs marchés :</strong> HP, Microsoft, Cisco, Adobe, Apple... et de nombreuses certifications constructeurs professionnels.
            </p>
        </main>
        <section class="red col-lg-6 col-12">
            <h1>Pourquoi choisir C1+ Informatique</h1>
            <hr />
            <p>
                C1Plus est dédié aux professionnels pour répondre aux besoins de tous avec des techniciens dédiés :</p>
            <ul class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <li>Matériel informatique Mac et PC</li>
                    <li>Maintenance informatique</li>
                    <li>Solutions d'impression</li>
                    <li>Solutions Cloud</li>
                    <li>Sauvegarde automatique</li>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <li>Sécurité informatique</li>
                    <li>Internet Haut débit</li>
                    <li>Messagerie Antivirus</li>
                    <li>Solutions logicielles</li>
                    <li>Cloud computing</li>
                    <li>Infogérance</li>
                </div>
            </ul>
        </section>
        <section class="red col-lg-6 col-12">
            <h1>Le savoir-faire C1+ Informatique</h1>
            <hr />
            <p>
                Fort de son expérience de 20 ans, C1plus Informatique Mac &amp; PC, c'est votre partenaire de proximité :<br /><br /> • Pour les professionnels, des techniciens dédiés et expérimentés : Matériel informatique, Maintenance informatique, Solutions d'impression, Solutions Cloud, Sauvagarde automatique, Sécurité informatique, Internet haut débit, Messagerie Antivirus, Solutions logicielles, Cloud computing, Infogérance.<br /><br /> • Offrir aux Professionnels les meilleures solutions d’impression (Multifonctions avec contrat d'entretien...) : Print Solutions
            </p>
        </section>
    </div>
    <footer class="row">
        <div class="col-lg-10 col-sm-9 col-12">
            <p class="footerp col-12 text-center"><a href="tel:0247889366"><strong>02 47 88 93 66 </strong> </a>
                <a target="blank_" href="https://www.facebook.com/c1plusinformatique"><i class="fab fa-facebook-square"></i></a>
                <a target="blank_" href="https://www.linkedin.com/in/c1plusinformatique/"><i class="fab fa-linkedin"></i></a></p>
            <p class="col-12 text-center"><a href="https://www.cep-socotic.com"><strong>&copy;CEP - Socotic </strong> - 2018 -</a><a href="https://www.c1plus-informatique.fr/mentions.php"><i>Mentions légales</i></a></p>
        </div>
        <div class="col-lg-2 col-sm-3 col-12">
            <p><img src="img/c1plus2.png" alt="" /></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="js/verifs-mini.js" type="text/javascript"></script>
    <link href="css/style-mini.css" rel="stylesheet" type="text/css">
</body>

</html>
