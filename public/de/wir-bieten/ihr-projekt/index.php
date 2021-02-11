<?php // page settings
$lang = 'de';
$title = "Ihr Projekt";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-3-4.jpg";
$main_nav = "wir-bieten";
$nav = "ihr-projekt";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-de.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Ihr</span> Projekt</h1>
                        <p class="h1-subtext font-weight-bold">
                            Nur vom Reden <br> passiert nichts.<br> Packen Sie’s an!
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Ihre Eckdaten …</h2>
                                <p>(Dann hier ein Formular!)</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-4-links.jpg" alt="">
                                <img src="/images/economizer-3-4-rechts.jpg" alt="">

                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <?php
            include($include_path . 'templates/_footer-de.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
