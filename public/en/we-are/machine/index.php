<?php // page settings
$lang = 'en';
$title = "Maschine";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-1-2.jpg";
$main_nav = "we-are";
$nav = "maschine";
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
                        <h1><span class="orange forcelinebreak">The</span> Machine</h1>
                        <p class="h1-subtext font-weight-bold">
                            The ECONOMIZER technology is<br>unique and internationally<br>patented.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Our series machine</h2>
                                <p>The ECONOMIZER SE currently is available in the size 2.5:</p>
                                <hr />
                                <p><strong>Processing capacity:</strong> 6,000 tons of dry matter per year<br />
                                    <strong>Energy consumption:</strong> 25 kW electricity and 275 kW caloric power – permanent<br />
                                    <strong>Size:</strong> length 14 m – width 3 m – height 8 m</p>
                                <hr />
                                <p>For bigger installations parallel configurations of more ECONOMIZER SE 2.5 units are possible.</p>
                                <p>The construction of our ECONOMIZER SE systems is modular and standardised. This allows quality control on highest level. After the Factory Acceptance Test shipping and final erection on site take place within a few days.</p>
                                <p>Robustness and reliabilty of the process are key issues to achieve a high profitability. Therefore the ECONOMIZER machine is built from high quality materials and components, because only a high availability guarantees high economic yields.</p>
                                <p>The ECONOMIZER technology is protected by international patents (Patents No. EP 1 177 280 and EP 2 567 757).</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-2-links.jpg" alt="">
                                <img src="/images/economizer-1-2-rechts.jpg" alt="">

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
