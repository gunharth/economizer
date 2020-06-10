<?php // page settings
$lang = 'de';
$title = "Datenschutz";
$description = "";
$include_path = "../";
$main_image = "economizer-header-5.jpg";
$main_nav = "";
$nav = "";
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
                        <h1><span class="orange forcelinebreak">Der</span> Datenschutz</h1>
                        <p class="h1-subtext font-weight-bold">
                            Selbstverständlich schützen wir<br>Ihre Daten gemäß der<br>EU-Datenschutz-Grundverordnung.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Datenschutz</h2>
								<p>Richtiger Text von Hermanns Rechtsanwalt! Hier keine Bilder rechts, Text über gesamte Breite?!<br><br><br></p>
                                <hr />
                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-1-links-1.jpg" alt="">
                                <img src="/images/economizer-3-1-rechts-1.jpg" alt="">

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
