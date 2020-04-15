<?php // page settings
$lang = 'de';
$title = "Technik";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-2-3.jpg";
$main_nav = "wir-machen";
$nav = "technik";
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
                        <h1><span class="orange forcelinebreak">Die</span> Technik</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wenige Schritte, und aus Stroh <br>und Mist wird ein optimales <br>Biogas-Substrat.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>So funktioniert’s</h2>
                                <p>Zuerst werden grob vorzerkleinerte Reststoffe mit Brauchwasser vermischt (1), und durch rezirkulierten Prozessdampf vorerhitzt (2).</p>
                                <p>Dann wird das Substrat in Chargen in den Koch-Reaktor beschickt (3), und dort mehrmals auf ein optimales Druck- und Temperatur-Niveau erhitzt (4).</p>
                                <p>Anschließend wird es portionsweise mit Druck aus dem aus dem Kocher abgelassen (5). Dabei kommt es zu einem abrupten Druckabfall, bei dem ein Teil des im Substrat enthaltenen Wassers spontan verdampft. Und das erzeugt die „Steam Explosion“: Die rasch expandierenden Dampfblasen zerreißen das weichgekochte Substrat in feinste Fasern.</p>
                                <p>Nachdem das so aufgeschlossene Material abgekühlt ist (6), geht es mit einer Fest- oder Flüssigbeschickung (7) in den Fermenter.</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-2-3.jpg" alt="" class="full">

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
