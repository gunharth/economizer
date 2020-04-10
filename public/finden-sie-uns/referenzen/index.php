<?php // page settings
$lang = 'de';
$title = "Referenzen";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-2.jpg";
$main_nav = "finden-sie-uns";
$nav = "referenzen";
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
                        <h1><span class="orange forcelinebreak">Die</span> Referenzen</h1>
                        <p class="h1-subtext font-weight-bold">
                            Sie sind nicht unser erster Kunde.<br> Trotzdem werden wir <br> Sie so behandeln.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unsere Auftraggeber</h2>
                                <p>(Weitere Inhalte fehlen noch)<br />
                                    Das soll dann auch wie der Akkordeoneffekt bei &quot;Die Kennzahlen&quot; -&gt; Fallstudien funktionieren. Bitte siehe Originallayout.</p>


                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-2-links.jpg" alt="">
                                <img src="/images/economizer-4-2-rechts.jpg" alt="">

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
