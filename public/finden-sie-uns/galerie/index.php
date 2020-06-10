<?php // page settings
$lang = 'de';
$title = "Galerie";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-4.jpg";
$main_nav = "finden-sie-uns";
$nav = "galerie";
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
                        <h1><span class="orange forcelinebreak">Die</span> Galerie</h1>
                        <p class="h1-subtext font-weight-bold">
                            Damit Sie sich jetzt schon<br> an den Anblick <br> gewöhnen können.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unsere Videos</h2>
                                <p>(Inhalte fehlen noch)<br />
                                    Hier kommen weder Text in der Mitte noch Dekobilder rechts, sondern bitte wie im Originallayout.</p>
                                <p>Thumbnails von den Videos in einer Reihe und von den Fotos unten auch.</p>
                                <p>Videos bitte mit Posterfunktion, sodass ich das Standbild designen kann. Leider habe ich weder zu Videos noch Fotos Infos von Hermann noch.</p>
                                <p>Bitte alle zum Großklicken und bei den Fotos die Möglichkeit, dann eine Bildunterschrift zu setzen - wie im Originallayout ;o)</p>
                                <p>Danke!</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unsere Fotos</h2>
                                <p>(Inhalte fehlen noch, Fotos und Videos zum Großklicken und Bildunterschriften bei den Fotos dann bitte)</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">

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
