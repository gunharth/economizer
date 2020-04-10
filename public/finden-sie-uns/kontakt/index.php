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
                                <h2>ECONOMIZER GmbH</h2>
                                <p>(telefon-icon.svg)Telefon +43 6212 31602</p>
                                <hr />
                                <p>(adresse-icon.svg)Gewerbestraße 2 / 5201 Seekirchen / Austria</p>
                                <p>(Und dann ein Formular)<br />
                                    Die Icons schick ich dir im Mail. Leider weiß ich nicht, wie ich die hochladen soll, dass du sie dann findest ;o)</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-1-links.jpg" alt="">
                                <img src="/images/economizer-4-1-rechts.jpg" alt="">

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
