<?php // page settings
$lang = 'de';
$title = "Kontakt";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-1.jpg";
$main_nav = "finden-sie-uns";
$nav = "kontakt";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Der</span> Kontakt</h1>
                        <p class="h1-subtext font-weight-bold">
                            Hier können Sie uns alles fragen –<br> oder einfach nur <br> Ihre Begeisterung ausdrücken.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>AGRES SYSTEMS GmbH</h2>
                                <p><img src="../../svg-icons/telefon-icon.svg" alt="" class="icon-inline" style="height: 31px;"> Telefon +43 kommt noch!!!</p>
                                <hr />
                                <p><img src="../../svg-icons/adresse-icon.svg" alt="" class="icon-inline" style="height: 31px;"> Gewerbestraße 2 / 5201 Seekirchen / Österreich</p>
                                <p><strong>@GUNI: Und hier ein Formular laut Enwurf auf office@agres.systems</strong></p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-1-links.jpg" alt="">
                                <img src="/images/economizer-4-1-rechts.jpg" alt="">

                            </div>
                        </div>
						
						<div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Vertriebspartner</h2>
                                <p>
<strong>Deutschland</strong><br>
<em>STEAMFIBER Zellulose-Projekte</em><br>
FIBERS<sup>365</sup> GmbH<br>
Hr. Stefan Radlmayr<br>
Adolf-Scheufelen-Straße 33<br>
73252 Lenningen<br>
Deutschland<br>
eMail: <a href="mailto:sr@fibers365.com">sr@fibers365.com</a>
</p><hr />			
								<p>
<strong>Italien</strong><br>
ORSAMAGGIORE srl<br>
Mr. Giulio Borgia<br>
Via Birmania 123<br>
58100 Grosseto<br>
Italia<br>
eMail: <a href="mailto:info@orsamaggiore.tech">info@orsamaggiore.tech</a>
</p><hr />	
								<p>
<strong>Polen</strong><br>
VEGAS Reks<br>
Hr. Joachim Felix
</p><hr />	
								<p>
<strong>Thailand</strong><br>
JIAMPHATTANA ENERGY GROUP co.,ltd<br>
Mr. Udomsak Lohachitpitaks<br>
Senior Executive Vice President<br>
Web: <a href="http://www.jiam-energy.com" target="_blank">www.jiam-energy.com</a><br>
eMail: <a href="mailto:udomsak@jiamenergy.com">udomsak@jiamenergy.com</a>
								</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                

                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <?php
            include($include_path . 'templates/_footer.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
