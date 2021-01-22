<?php // page settings
$lang = 'de';
$title = "Kennzahlen";
$description = "";
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

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;">
            </div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xl-3 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Die</span> Kennzahlen</h1>
                        <p class="h1-subtext font-weight-bold">
                            Die Bilanz sind 10.000 m³ Biogas aus 20 Tonnen Stroh – jeden Tag.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>ECONOMIZER SE 2.5 – basic case</h2>
                                <hr />


                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><strong>Kapazität:</strong></td>
                                                <td colspan="2">6.000 Tonnen Trockensubstanz pro Jahr<br />
                                                    (das sind 7.000 t Stroh oder bis zu 21.000 t Mist oder…)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Energiebedarf:</strong></td>
                                                <td colspan="2">25 kW Strom (600 kWh/Tag)<br />
													275 kW Wärme (6.000 kWh/Tag)<br />
                                                    (Hochtemperatur-Wärme: AbgasWT oder Brenner)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Produziertes Gärsubstrat:</strong></td>
                                                <td colspan="2">60 t/Tag (bei 30 %TS)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Gärpotential:</strong></td>
                                                <td colspan="2">9.000 bis 11.000 m³ Biogas pro Tag</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Typische Biogaserträge:</strong></td>
                                                <td>Stroh (A-Qualität)<br />
                                                    Altstroh<br />
                                                    Stallmist<br />
                                                    Bagasse<br />
                                                    Grünschnitt</td>
                                                <td>520 m³/tFM<br />
                                                    340 m³/tFM<br />
                                                    125 m³/tFM<br />
                                                    450 m³/tFM<br />
                                                    200 m³/tFM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">
                                <img src="/images/economizer-2-4-links.jpg" alt="">
                                <img src="/images/economizer-2-4-rechts.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>STEAMFIBER –<br>das AGROWFIBER SE „upgrade“</h2>
								 <hr />

                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><strong>Kapazität:</strong></td>
                                                <td colspan="2">11.000 Tonnen Trockensubstanz pro Jahr<br />
                                                    (das sind 13.000 t Stroh)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Energiebedarf:</strong></td>
                                                <td colspan="2">225 kW Strom (5.400 kWh/Tag)<br />
													550 kW Wärme (12.000 kWh/Tag)<br />
                                                    (Hochtemperatur-Wärme: AbgasWT oder Gasbrenner)</td>
                                            </tr>
                                            
                                                <td><strong>Gärpotential:</strong></td>
                                                <td colspan="2">8.250 bis 10.000 m³ Biogas pro Tag</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Zellulose-Produktion:</strong></td>
                                                <td>6.000 t Zellulose pro Jahr (atro)</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                               


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
