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
                                <p>Zuerst werden grob vorzerkleinerte Reststoffe mit Brauchwasser vermischt <span class='orange'>(1)</span>, und durch rezirkulierten Prozessdampf vorerhitzt <span class='orange'>(2)</span>.</p>
                                <p>Dann wird das Substrat in Chargen in den Koch-Reaktor beschickt <span class='orange'>(3)</span>, und dort mehrmals auf ein optimales Druck- und Temperatur-Niveau erhitzt <span class='orange'>(4)</span>.</p>
                                <p>Anschließend wird es portionsweise mit Druck aus dem aus dem Kocher abgelassen <span class='orange'>(5)</span>. Dabei kommt es zu einem abrupten Druckabfall, bei dem ein Teil des im Substrat enthaltenen Wassers spontan verdampft. Und das erzeugt die „Steam Explosion“: Die rasch expandierenden Dampfblasen zerreißen das weichgekochte Substrat in feinste Fasern.</p>
                                <p>Nachdem das so aufgeschlossene Material abgekühlt ist <span class='orange'>(6)</span>, geht es mit einer Fest- oder Flüssigbeschickung <span class='orange'>(7)</span> in den Fermenter.</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <a href="/images/economizer-2-3.jpg" data-footer="Vermischung der vorzerkleinerten Reststoffe mit Brauchwasser <span class='orange'>(1)</span> / Vorerhitzung durch rezirkulierten Prozessdampf <span class='orange'>(2)</span> / Druckschleuse <span class='orange'>(3)</span> / Druck-Koch-Reaktor <span class='orange'>(4)</span> / Steam-Explosion-Entspannungsleitung <span class='orange'>(5)</span> / Zwischenspeicher und Abkühlung <span class='orange'>(6)</span> / Fermenterbeschickung <span class='orange'>(7)</span>" data-toggle="lightbox">
                                    <img src="/images/economizer-2-3.jpg" alt="" class="full">
                                </a>

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
