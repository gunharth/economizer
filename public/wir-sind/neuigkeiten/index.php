<?php // page settings
$lang = 'de';
$title = "Mission";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-1-1.jpg";
$main_nav = "wir-sind";
$nav = "mission";
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
                        <h1><span class="orange forcelinebreak">Die</span> Neuigkeiten</h1>
                        <p class="h1-subtext font-weight-bold">
                            Projekte, Messen, Nachrichten - <br>
                            wir halten Sie <br>
                            auf dem Laufenden.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>News Item 1</h2>
                                <p>Unsere ECONOMIZER SE-Technologie verwandelt Stroh, Mist, Ernte- und Grünabfälle unter Einsatz von Wärme und Druck in hochwertige Substrate für Biogasanlagen.</p>
                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-4-2.jpg" class="full" alt="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <hr />
                            </div>
                            <div class="col-xl-5 col-xxl-6">&nbsp;</div>
                        </div>

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>News Item 2</h2>
                                <p>Unsere ECONOMIZER SE-Technologie verwandelt Stroh, Mist, Ernte- und Grünabfälle unter Einsatz von Wärme und Druck in hochwertige Substrate für Biogasanlagen.</p>
                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-4-2.jpg" class="full" alt="">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <hr />
                            </div>
                            <div class="col-xl-5 col-xxl-6">&nbsp;</div>
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
