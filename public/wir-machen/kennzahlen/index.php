<?php // page settings
$lang = 'de';
$title = "Kennzahlen";
$include_path = "../../";
$main_image = "economizer-header-2-4.jpg";
$main_nav = "wir-machen";
$nav = "kennzahlen";
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
                        <h1><span class="orange forcelinebreak">Die</span> Kennzahlen</h1>
                        <p class="h1-subtext font-weight-bold">
                            Die Bilanz sind 10.000 m³ Biogas <br>aus 20 Tonnen Stroh – <br>jeden Tag.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>ECONOMIZER SE 2.5</h2>
                                <hr />
                                <p><em><strong>Eigentlich bräuchte ich hier bitte eine andere Formatierung der Tabelle als im Markdown Cheatsheet angegeben. In der linken Spalte sollten die Header stehen und dann - mit mehr Abstand) rechts die Tabelleninhalte. Beim untersten Eintrag &quot;Typische Biogaserträge&quot; sollte es eigentlich eine Tabelle mit 3 Spalten sein, sodass die Zahlen schön untereinander stehen zwecks Übersichtlichkeit. Oder geht das alles nicht?! Ich schreib hier jetzt mal den Text rein, aber eine Tabelle wäre schön ;o)</strong></em></p>
                                <p><strong>Kapazität:</strong> 6.000 Tonnen Trockensubstanz pro Jahr<br />
                                    (das sind 7.000 t Stroh oder bis zu 21.000 t Mist oder…)</p>
                                <p><strong>Energiebedarf:</strong> 25 kW Strom (600 kWh/Tag)/ 275 kW Wärme (6.000 kWh/Tag)<br />
                                    (Hochtemperatur-Wärme: AbgasWT oder Brenner)</p>
                                <p><strong>Eigenenergiebedarf:</strong> 15 %<br />
                                    (bezogen auf Gärpotential und 85 % Gesamtwirkungsgrad)</p>
                                <p><strong>Produziertes Gärsubstrat:</strong> 60 to/Tag (bei 30 %TS)</p>
                                <p><strong>Gärpotential:</strong> 9.000 bis 11.000 m³ Biogas pro Tag</p>
                                <p><strong>Typische Biogaserträge:</strong> <br />
                                    Stroh (A-Qualität) 520 m³/tFM<br />
                                    Altstroh 340 m³/tFM<br />
                                    Stallmist 125 m³/tFM<br />
                                    Bagasse 450 m³/tFM<br />
                                    Grünschnitt 200 m³/tFM</p>
                                <hr />

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">
                                <img src="/images/economizer-2-4-links.jpg" alt="">
                                <img src="/images/economizer-2-4-rechts.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Fallstudien</h2>
                                <p>Inhalte fehlen noch. Sollte dann nach Akkordeoneffekt funktionieren wie im Entwurf, wo alle Seiten drin sind.</p>


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
