<?php // page settings
$lang = 'de';
$title = "Aufgabe";
$include_path = "../../";
$main_image = "economizer-header-2-1.jpg";
$main_nav = "wir-machen";
$nav = "aufgabe";
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
                        <h1><span class="orange forcelinebreak">Die</span> Aufgabe</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wir haben <br>die beste Lösung <br>für den Lignozellulose- Komplex.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>Der Lignozellulose-Komplex</h2>
                                <p>Stroh, Mist, Grünschnitt und Ernteabfälle – die von uns eingesetzten Reststoff-Substrate – haben alle eines gemeinsam: den Lignozellulose-Komplex.</p>
                                <p>Das bedeutet, diese Substrate bestehen zu großen Teilen aus einem verholzten Verbund von Zellulose- und Hemizellulose, ummantelt mit Lignin. Dieser Komplex ist zwar äußerst energiereich – aber für Biogasbakterien leider nahezu unverdaulich.</p>
                                <p>Ohne die passende Vorbehandlung kommt die Biogasanlage nicht an die Energie ran, und die Substrate verlassen den Fermenter wieder, ohne dass daraus Biogas produziert wurde.</p>
                                <p>Dazu kommen noch Betriebsprobleme durch Schwimm- und Sinkschichten aus unverdautem Material.</p>
                                <p>Für diese Aufgabe haben wir die beste Lösung.</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-2-1.png" alt="" class="full">

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
