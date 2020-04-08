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
                            <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 41.46 34.72">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                        }

                                        .cls-2 {
                                            clip-path: url(#clip-path);
                                        }

                                        .cls-3 {
                                            fill: #f18711;
                                        }
                                    </style>
                                    <clipPath id="clip-path" transform="translate(0 0)">
                                        <rect class="cls-1" width="41.45" height="34.71" />
                                    </clipPath>
                                </defs>
                                <title>zitatzeichen</title>
                                <g class="cls-2">
                                    <g id="Gruppe_346" data-name="Gruppe 346">
                                        <g id="Gruppe_345" data-name="Gruppe 345">
                                            <path id="Pfad_91" data-name="Pfad 91" class="cls-3" d="M14,0Q12.07,1.4,9.66,3.56a35.11,35.11,0,0,0-4.57,5,29.05,29.05,0,0,0-3.63,6.36A19.42,19.42,0,0,0,0,22.5a20.1,20.1,0,0,0,.38,3.37,12.7,12.7,0,0,0,1.53,4.07,10.35,10.35,0,0,0,3.18,3.37,9.2,9.2,0,0,0,5.34,1.4,7,7,0,0,0,5.34-2.2,6.91,6.91,0,0,0,2-4.73A6.19,6.19,0,0,0,15.89,23a6.62,6.62,0,0,0-4.7-1.76,5.22,5.22,0,0,0-3.5,1.13,20,20,0,0,0-2.1,2q-.37-.63-1.2-2.16a8.63,8.63,0,0,1-.83-4.09,12,12,0,0,1,1.08-5,22.21,22.21,0,0,1,2.8-4.53,33.65,33.65,0,0,1,3.68-4q2-1.78,3.88-3.32ZM37.64,0q-1.92,1.4-4.33,3.56a35.11,35.11,0,0,0-4.57,5,29.05,29.05,0,0,0-3.63,6.36,19.42,19.42,0,0,0-1.46,7.56A20.1,20.1,0,0,0,24,25.87a12.47,12.47,0,0,0,1.53,4.07,10.35,10.35,0,0,0,3.18,3.37,9.2,9.2,0,0,0,5.34,1.4,7.24,7.24,0,0,0,7.37-6.93A6.17,6.17,0,0,0,39.54,23a6.64,6.64,0,0,0-4.7-1.76,5.22,5.22,0,0,0-3.5,1.13,20,20,0,0,0-2.1,2C29,24,28.59,23.24,28,22.22a8.63,8.63,0,0,1-.82-4.09,12,12,0,0,1,1.08-5,22.21,22.21,0,0,1,2.8-4.53,33.65,33.65,0,0,1,3.68-4q2-1.78,3.88-3.32Z" transform="translate(0 0)" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                        </p>
                        <hr class="d-block d-lg-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>ECONOMIZER SE</h2>
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
