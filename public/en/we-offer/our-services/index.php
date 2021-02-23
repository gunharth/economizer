<?php // page settings
$lang = 'en';
$title = "Our Services";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-3-2.jpg";
$main_nav = "we-offer";
$nav = "our-services";
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
                        <h1><span class="orange forcelinebreak">Our</span> Services</h1>
                        <p class="h1-subtext font-weight-bold">
                            We make <br>more  of your <br> project.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Your perspectives</h2>
                                <p>You want to make your biogas plant more sustainable and economic by utilisation of residual materials?</p>
                                <p>You have significant amounts of organic residues like straw, manure and other biowaste available?</p>
                                <p>In this case we should take a look.</p>
                                <p>First we evaluate the potential of your plant for the utilisation of the available alternative feedstock. 
We make use of our huge database, and for special substrates we can offer you pilot tests at our own R&amp;D center.</p>
                                <p>Together we evaluate your project's economics and design the integration of the ECONOMIZER SE plant into your biogas plant.</p>
                                <p>We build, deliver and install your ECONOMIZER system, and also take care of interfaces and peripheric systems like feeders and shredders.</p>
                                <p>After commissioning we perform training and consult you and your operation team, and will be your partner for service and maintenance.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-2-links.jpg" alt="">
                                <img src="/images/economizer-3-2-rechts.jpg" alt="">

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
