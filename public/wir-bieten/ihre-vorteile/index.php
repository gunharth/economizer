<?php // page settings
$lang = 'de';
$title = "Ihre Vorteile";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-3-3.jpg";
$main_nav = "wir-bieten";
$nav = "ihre-vorteile";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Ihre</span> Vorteile</h1>
                        <p class="h1-subtext font-weight-bold">
                            Silage vergären war gestern.<br> Ab jetzt haben Sie <br> die volle Auswahl.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Das spricht für uns</h2>
                                <p>ECONOMIZER SE-Anlagen eignen sich optimal als Nachrüstung zur Erweiterung und Optimierung bestehender Biogasanlagen.</p>
                                <p>Neue Biogasanlagen können mit der ECONOMIZER SE viel kleiner und günstiger gebaut werden, da das Substrat nach der ECONOMIZER-Vorbehandlung schneller und effizienter umgesetzt wird.</p>
                                <p>Das spricht für den Einsatz unserer ECONOMIZER SE-Technologie auf ihrer Anlage:</p>
                                <p>• Ersatz teurer Energiepflanzen<br />
                                    • Flexible Substratauswahl<br />
                                    • Hohe Gaserträge aus verholzten Substraten<br />
                                    • Störungsfreie und schnelle Vergärung<br />
                                    • Klimafreundlich<br />
                                    • Wirtschaftlich</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-3-links.jpg" alt="">
                                <img src="/images/economizer-3-3-rechts.jpg" alt="">

                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <?php
            include($include_path . 'templates/_footer-'.$lang.'.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
