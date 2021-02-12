<?php // page settings
$lang = 'de';
$title = "Maschine";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-1-2.jpg";
$main_nav = "wir-sind";
$nav = "maschine";
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
                        <h1><span class="orange forcelinebreak">Die</span> Maschine</h1>
                        <p class="h1-subtext font-weight-bold">
                            Die ECONOMIZER-Technologie ist einzigartig und international patentiert.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unsere Serienmaschine</h2>
                                <p>Die ECONOMIZER SE gibt es als Serienmaschine in der Baugröße 2.5:</p>
                                <hr />
                                <p><strong>Verarbeitungskapazität:</strong> 6.000 Tonnen Trockensubstanz pro Jahr<br />
                                    <strong>Energiebedarf:</strong> 25 kW Strom – 275 kW Wärme permanent<br />
                                    <strong>Baugröße:</strong> Länge 14 m – Breite 3 m – Höhe 8 m</p>
                                <hr />
                                <p>Für größere Anlagen werden mehrere ECONOMIZER SE 2.5 parallel installiert.</p>
                                <p>Unsere ECONOMIZER SE-Anlagen sind standardisiert und modular aufgebaut. Das ermöglicht uns eine Qualitätssicherung auf höchstem Niveau. Nach der Werksabnahme erfolgt der Transport und Aufbau der Containermodule innerhalb weniger Tage.</p>
                                <p>Neben der Robustheit und Zuverlässigkeit des Verfahrens steht vor allem die Wirtschaftlichkeit im Fokus. Wir setzen in der ECONOMIZER SE auf hochwertige Werkstoffe und Komponenten, denn nur eine hohe Verfügbarkeit stellt hohe Erträge sicher.</p>
                                <p>Die ECONOMIZER-Technologie ist international patentrechtlich geschützt (Patente Nr. EP 1 177 280 und EP 2 567 757).</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-2-links.jpg" alt="">
                                <img src="/images/economizer-1-2-rechts.jpg" alt="">

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
