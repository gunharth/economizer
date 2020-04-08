<?php // page settings
$lang = 'de';
$title = "Unsere Kunden";
$include_path = "../../";
$main_image = "economizer-header-3-1.jpg";
$main_nav = "wir-bieten";
$nav = "unsere-kunden";
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
                        <h1><span class="orange forcelinebreak">Unsere</span> Kunden</h1>
                        <p class="h1-subtext font-weight-bold">
                            Es wird schwer sein, Biogasanlagen zukünftig ohne ECONOMIZER SE zu betreiben.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-lg-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Betreiber landwirtschaftlicher Biogasanlagen</h2>
                                <p>Steigende Substratkosten und Auflagen zum Einsatz alternativer Substrate belasten die Wirtschaftlichkeit Ihrer Anlage.</p>
                                <p>Mit der ECONOMIZER SE bereiten Sie Stroh, Mist und viele andere landwirtschaftliche Reststoffe so auf, dass Ihre Biogasanlage diese störungsfrei und mit sehr hohen Gaserträgen verwerten kann.</p>
                                <h2>Betreiber von Abfall-Biogasanlagen</h2>
                                <p>Anlagen zur anaeroben Biomüll- und Lebensmittelabfall-Behandlung sind heute Stand der Technik.</p>
                                <p>Durch die einseitige Substratcharakteristik sind sie aber nicht einfach zu betreiben.</p>
                                <p>ECONOMIZER SE bietet die Möglichkeit, zusätzlich nährstoffarme Substrate wie Reststroh einzusetzen, die das Fermenter-Gleichgewicht stabilisieren und die Biogaserträge deutlich steigern.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-1-links-1.jpg" alt="">
                                <img src="/images/economizer-3-1-rechts-1.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Biomasse-Entsorger</h2>
                                <p>Sortierter Grünschnitt und Landschaftspflegematerial müssen nicht komplett kompostiert werden.</p>
                                <p>Sinnvoller ist die Umwandlung in Biogas. Nach der Vorbehandlung mit der ECONOMIZER SE-Technologie wird Abfall-Biomasse als hochwertiges Alternativ-Substrat zur nachhaltigen Energieerzeugung eingesetzt.</p>
                                <h2>Agrar-Industrie</h2>
                                <p>Weltweit werden riesige Mengen an Reststoffen in der Industrie nicht oder ineffizient genutzt. Bagasse und Palmölabfälle sind bekannte Beispiele.</p>
                                <p>Vergären Sie diese Reststoffe nach der ECONOMIZER SE-Behandlung, und erzeugen Sie nachhaltig erneuerbare Energie – zur Selbstversorgung oder Netzeinspeisung.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">

                                <img src="/images/1AdobeStock_233367765_Preview.jpg" alt="">
                                <img src="/images/2AdobeStock_160234675_Preview.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <hr />
                                <h2>Biomasse-Entsorger</h2>
                                <p>Die Mindestanlagengröße für den Einsatz der ECONOMIZER SE-Technologie beträgt typisch 1 MW (Verstromung) bzw. 250 Nm3/h Biomethan (Einspeiseanlage).</p>
                                <p>Bei Biogasanlagen über 1,5 MW können mehrere ECONOMIZER SE installiert werden.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between">

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
