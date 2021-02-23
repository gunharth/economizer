<?php // page settings
$lang = 'en';
$title = "Key Figures";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-2-4.jpg";
$main_nav = "we-do";
$nav = "key-figures";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;">
            </div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xl-3 col-xxl-3">
                        <h1><span class="orange forcelinebreak">The</span> Key Figures</h1>
                        <p class="h1-subtext font-weight-bold">
                            The balance is 10,000 m³ biogas <br>from 20 tons of straw – <br>day by day.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>ECONOMIZER SE 2.5 – the Basic Case</h2>
                                <hr />


                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><strong>Capacity:</strong></td>
                                                <td colspan="2">6,000 tons dry matter per year<br />
                                                    (that's 7,000 tons of straw or up to 21,000 tons of manure or…)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Energy consumption:</strong></td>
                                                <td colspan="2">25 kW electricity (600 kWh/day)<br />
													275 kW caloric power (6,000 kWh/day)
													</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Produced feedstock:</strong></td>
                                                <td colspan="2">60 tons/day (at 30 % dry matter)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Biogas potential:</strong></td>
                                                <td colspan="2">9,000 to 11,000 m³ biogas per day</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Typical biogas yields:</strong></td>
                                                <td>straw (A-quality)<br />
                                                    straw (B/C-quality)<br />
                                                    manure rich in straw)<br />
                                                    bagasse<br />
                                                    green waste</td>
                                                <td>520 m³/ton FM<br />
                                                    340 m³/ton FM<br />
                                                    125 m³/ton FM<br />
                                                    450 m³/ton FM<br />
                                                    200 m³/ton FM</td>
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
                                <h2>STEAMFIBER –<br>the AGROWFIBER SE &ldquo;upgrade&rdquo;</h2>
								 <hr />

                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><strong>Capacity:</strong></td>
                                                <td colspan="2">11,000 tons dry matter per year<br />
                                                    (that's 13,000 tons of straw)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Energy consumption:</strong></td>
                                                <td colspan="2">225 kW electricity (5,400 kWh/day)<br />
													550 kW caloric power (12,000 kWh/day)
												</td>
                                            </tr>

                                                <td><strong>Biogas potential:</strong></td>
                                                <td colspan="2">8,250 to 10,000 m³ biogas per day</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pulp production:</strong></td>
                                                <td>6,000 tons cellulose fibers (pulp) per year (bdu)</td>
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
            include($include_path . 'templates/_footer-'.$lang.'.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
