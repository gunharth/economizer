<?php // page settings
$lang = 'de';
$title = "Lösung";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-2-2.jpg";
$main_nav = "wir-machen";
$nav = "loesung";
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
                        <h1><span class="orange forcelinebreak">Die</span> Lösung</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wer sagt, dass Männer <br>nicht kochen <br>können?
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unser Schnellkochtopf</h2>
                                <p>Eine ECONOMIZER SE-Anlage funktioniert wie ein großer Schnellkochtopf.</p>
                                <p>Beim Kochen mit Überdruck und bis zu 180°C in der ECONOMIZER SE-Anlage zersetzt sich die verholzte Substrat-Struktur:</p>
                                <p>Der Lignin-Mantel schmilzt, die Hemizellulose löst sich auf und es bilden sich freie Zucker.</p>
                                <p>Aus unverdaulichen Fasern wird so eine süß riechende Masse, die von jeder Biogasanlage optimal verwertet werden kann.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">

                                <img src="/images/economizer-2-2-links.jpg" alt="">
                                <img src="/images/economizer-2-2-rechts.jpg" alt="">

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
