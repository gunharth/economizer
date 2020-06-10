<?php // page settings
$lang = 'de';
$title = "Neuigkeiten";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-1-4.jpg";
$main_nav = "wir-sind";
$nav = "mission";
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
                    <div class="col-md-4 col-xl-3 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Die</span> Neuigkeiten</h1>
                        <p class="h1-subtext font-weight-bold">
                            Projekte, Messen, Nachrichten - <br>
                            wir halten Sie <br>
                            auf dem Laufenden.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>Fasergewinnungsprojekt auf der Biogasanlage Hahnennest</h2>
                                <p>Im Dezember 2019 wurden 2 Stück ECONOMIZER SE 2.5 auf der Biogasanlage Hahnennest in Deutschland installiert. Durch die ECONOMIZER-Behandlung wird aus Silphie-Silage hochwertiger Zellstoff für die Papierproduktion gewonnen, und im selben Zug ein äußerst hochwertiges Biogassubstrat erzeugt.</p>
                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-4-2.jpg" class="full" alt="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <hr />
                            </div>
                            <div class="col-xl-5 col-xxl-6">&nbsp;</div>
                        </div>

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>ECONOMIZER GmbH auf der ECOMONDO 2019 in Rimini</h2>
                                <p>Anfang November 2019 wurde auf dem Stand der HERA Group das aus dem EU-LIFE-Programm geförderte gemeinsame Projekt „LIFE STEAM“ vorgestellt: Auf einer 1 MW-Biogasanlage des Projektpartners AYRION bei Ravenna wird im Sommer 2020 eine Steam-Explosion-Prototypenanlage zur Aufbereitung von mehr als 10.000 Tonnen Grünschnitt errichtet und von den Partnern betrieben. Das Ziel des F+E-Projektes ist die Nachrüstung einer Vielzahl von Biogasanlagen, die von NaWaRos auf kommunale Reststoffe umgestellt werden sollen.</p>
                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-4-1.jpg" class="full" alt="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <hr />
                            </div>
                            <div class="col-xl-5 col-xxl-6">&nbsp;</div>
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
