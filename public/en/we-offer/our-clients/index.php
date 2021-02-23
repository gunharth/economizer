<?php // page settings
$lang = 'en';
$title = "Our Clients";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-3-1.jpg";
$main_nav = "we-offer";
$nav = "our-clients";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Our</span> Clients</h1>
                        <p class="h1-subtext font-weight-bold">
                            It will be hard in future <br>to operate biogas plants <br>without ECONOMIZER SE.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Operators of agricultural biogas plants</h2>
                                <p>Increasing feedstock costs and tough regulations demanding alternative feedstocks burden your plant's economy.</p>
                                <p>With the ECONOMIZER SE you will process straw, manure and other agricultural residues so that your biogas plant is able to digest these substrates trouble-free and with impressive biomethane yields.</p>
                                <h2>Operators of waste AD plants</h2>
                                <p>Installations for anaerobic biowaste and foodwaste digestion are state of the art.</p>
                                <p>However the one-sided feedstock characteristics are difficult to handle.</p>
                                <p>ECONOMIZER SE provides the opportunity to add low in nutrient substrates like residual straw, which stabilises the fermentation balance and increases biomethane yields significantly.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-1-links-1.jpg" alt="">
                                <img src="/images/economizer-3-1-rechts-1.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Green waste disposers</h2>
                                <p>Assorted green waste and landscaping residues don't have to take the composting path completely.</p>
                                <p>Much more sense it makes to produce biogas. After pre-treatment with the ECONOMIZER SE technology waste biomass is converted into a high-value alternativ feedstock for a sustainable energy generation.</p>
                                <h2>Agricultural industry</h2>
                                <p>Worldwide huge quantities of industrial waste and residual materials are used inefficently or simply disposed of. Sugar cane bagasse or palm oil fruit residues are well known examples.</p>
                                <p>Why not digest these feedstocks after treatment with ECONOMIZER SE, and generate sustainable renewable energy for self-sufficiency or grid feed?</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">

                                <img src="/images/economizer-3-1-links-2.jpg" alt="">
                                <img src="/images/economizer-3-1-rechts-2.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <hr />
                                <p>The minimum size to apply the ECONOMIZER technology typically is 1 MW (electricity production) resp. 250 m³/h biomethane (gas2grid).</p>
                                <p>For biogas plants exceeding 1.5 MW several ECONOMIZER SE lines can be installed.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between">

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
