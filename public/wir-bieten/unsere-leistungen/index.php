<?php // page settings
$lang = 'de';
$title = "Unsere Leistungen";
$include_path = "../../";
$main_image = "economizer-header-3-2.jpg";
$main_nav = "wir-bieten";
$nav = "unsere-leistungen";
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
                        <h1><span class="orange forcelinebreak">Unsere</span> Leistungen</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wir machen mehr <br> aus Ihrem <br> Biogas-Projekt.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Ihre Perspektiven</h2>
                                <p>Sie wollen Ihre Biogasanlage durch den Einsatz von Reststoffen nachhaltiger und wirtschaftlicher machen?</p>
                                <p>Sie haben große Mengen organischer Reststoffe wie Stroh, Mist oder andere pflanzliche Abfälle zur Verfügung?</p>
                                <p>Dann sollten wir uns das gemeinsam ansehen.</p>
                                <p>Zuerst bewerten wir das Potential Ihrer Anlage für den Einsatz der verfügbaren Reststoffe. Dabei bauen wir auf einem großen Daten-Pool auf, für besondere Einsatzstoffe bieten wir Ihnen Pilotversuche in unserer Testanlage an.</p>
                                <p>Zusammen prüfen wir die Wirtschaftlichkeit Ihres Projektes und planen die Einbindung der ECONOMIZER SE-Anlage in Ihre Biogasanlage.</p>
                                <p>Wir bauen, liefern und installieren Ihre ECONOMIZER SE-Anlage, und kümmern uns auch um die Peripherie wie z. B. Beschickungs- und Zerkleinerungstechnik.</p>
                                <p>Nach der Inbetriebnahme schulen und beraten wir Sie und Ihr Personal, und sind Ihr Partner für Wartungen, Ersatz- und Verschleißteile.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-2-links.jpg" alt="">
                                <img src="/images/economizer-3-2-rechts.jpg" alt="">

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
