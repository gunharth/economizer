<?php // page settings
$lang = 'de';
$title = "Broschüren";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-3.jpg";
$main_nav = "finden-sie-uns";
$nav = "brochueren";
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
                        <h1><span class="orange forcelinebreak">Die</span> Broschüren</h1>
                        <p class="h1-subtext font-weight-bold">
                            Gebündelte Informationen –<br> zum Lesen und <br> Herzeigen.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unser Service</h2>
                                <p>Als Service bieten wir Ihnen hier die Möglichkeit, sich unsere Infobroschüren über den ECONOMIZER SE in verschiedenen Sprachen kostenlos herunterzuladen.</p>
                                <p>Registrieren Sie sich dazu bitte hier. Die Downloadlinks werden im Anschluss sofort freigeschaltet.</p>
                                <p><strong>(Dann Formular und Downloadbereich wie Originallayout bitte.)</strong></p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-3.png" alt="" class="full">

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
