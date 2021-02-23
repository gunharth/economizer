<?php // page settings
$lang = 'en';
$title = "Mission";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-1-1.jpg";
$main_nav = "we-are";
$nav = "mission";
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
                        <h1><span class="orange forcelinebreak">The</span> Mission</h1>
                        <p class="h1-subtext font-weight-bold">
                            We stand for sustainable and ecological generation of renewable energy from organic residues.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>ECONOMIZER SE</h2>
                                <p>Our ECONOMIZER SE technology uses heat and pressure to convert straw, manure, crop residues and green waste into high-quality feedstock for biogas plants.</p>
                                <p>ECONOMIZER SE systems allow the utilisation of so far unused residual materials instead of expensive renewable energy crops – at comparably high biomethane yields.</p>
                                <p>Our ECONOMIZER SE installations pay for themselves within a few years, easing the pressure of steadily rising feedstock costs.</p>
                                <p>With the ECONOMIZER SE technology our clients' biogas plants are independent, flexible and future proof.</p>
                                <p>Together we make an important contribution to climate protection: sustainable biogas generated from straw and residues is a real support to the energy transition process.</p>

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
            include($include_path . 'templates/_footer-'.$lang.'.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
