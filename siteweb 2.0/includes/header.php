<header class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <p class="text-center no-indent"><a class="col-lg-12" href="index.php"><img class="logo" src="img/c1plus2.png" alt="C1+ Informatique XEDI Tours votre partenaire informatique de proximité"/></a><br />
        </p>
    </div>
    <div class="menuhaut col-lg-9 col-md-6 col-sm-12 align-self-start">

        <div class="projet text-right">
            <a href="tel:0247889366"><button class="btn btn-outline-danger" type="button" aria-haspopup="true" aria-expanded="true">
            Un projet ? Appelez-nous: <br />
                <strong>02 47 88 93 66</strong>
            </button></a>
        </div>
        <p class="slogan cool-link text-center"><span class="blanc">Par des professionnels, pour des professionnels.</span></p>
    </div>
    <div class="lignerouge cache1 col-12">
        <ul class="row">
            <?php if ($page != 1) { echo '<li><a class="col-lg-3" href="index.php">Accueil</a></li>'; } ?>
            <?php if ($page !=2) { echo '<li><a class="col-lg-3" href="solutions.php#materiel">Nos solutions</a>
                <ul class="cache3">
                    <li><a href="solutions.php#materiel">Matériel informatique</a></li>
                    <li><a href="solutions.php#maintenance">Maintenance informatique</a></li>
                    <li><a href="solutions.php#cloud">Solutions Cloud</a></li>
                    <li><a href="solutions.php#print">Solutions print</a></li>
                    <li><a href="solutions.php#internet">Internet &amp; haut débit</a></li>
                    <li><a href="solutions.php#logiciel">Solutions logiciels</a></li>
                    <li><a href="solutions.php#messagerie">Messagerie &amp; antivirus</a></li>
                    <li><a href="solutions.php#sauvegarde">Sauvegarde</a></li>
                    <li><a href="solutions.php#securite">Sécurité informatique</a></li>
                    <li><a href="solutions.php#cloudcomputing">Cloud Computing</a></li>
                    <li><a href="solutions.php#infogerance">Infogérance</a></li>
                </ul>
            </li>';} ?>

            <?php if ($page != 3) { echo '<li><a class="col-lg-3" href="xefi.php">XEFI Tours</a></li>'; } ?>
            <?php if ($page != 4) { echo '<li><a class="col-lg-3" href="contact.php#contact">Se faire rappeler</a></li>'; } ?>
            <li><a target="blank_" href="https://www.facebook.com/c1plusinformatique" class="fa fa-facebook-square"></a></li>
            <li><a target="blank_" href="https://www.linkedin.com/in/c1plusinformatique/" class="fa fa-linkedin"></a></li>
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
                    <li><a class="col-3" href="index.php">Accueil</a></li>
                    <li><a class="col-3" href="solutions.php#materiel">Nos solutions</a> </li>
                    <li><a class="col-lg-3" href="xefi.php">XEFI Tours</a></li>
                    <li><a class="col-lg-3" href="contact.php#contact">Se faire rappeler</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
