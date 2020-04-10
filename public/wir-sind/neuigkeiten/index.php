<?php // page settings
$lang = 'de';
$title = "Mission";
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
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Die</span> Mission</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wir stehen für nachhaltig und wirtschaftlich erzeugte, erneuerbare Energie aus organischen Reststoffen.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Needs a new Template</h2>
                                <p>Unsere ECONOMIZER SE-Technologie verwandelt Stroh, Mist, Ernte- und Grünabfälle unter Einsatz von Wärme und Druck in hochwertige Substrate für Biogasanlagen.</p>
                                <p>ECONOMIZER SE-Anlagen ermöglichen den Einsatz großer Mengen bislang ungenutzter Reststoffe anstatt teurer Energiepflanzen – bei vergleichbar hoher Biogasausbeute.</p>
                                <p>Unsere ECONOMIZER SE-Anlagen amortisieren sich innerhalb weniger Jahre, und nehmen den Druck stetig steigender Substratpreise.</p>
                                <p>Unsere Kunden machen ihre Biogasanlagen mit der ECONOMIZER SE-Technologie unabhängig, flexibel und zukunftssicher.</p>
                                <p>Gemeinsam leisten wir einen bedeutenden Beitrag zum Klimaschutz, denn nachhaltig aus Stroh und Reststoffen gewonnenes Biogas ist ein wichtiger Baustein der Energiewende.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-1-links.jpg" alt="">
                                <img src="/images/economizer-1-1-rechts.jpg" alt="">

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
