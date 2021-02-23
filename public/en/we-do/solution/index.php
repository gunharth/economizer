<?php // page settings
$lang = 'en';
$title = "Solution";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-2-2.jpg";
$main_nav = "we-do";
$nav = "solution";
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
                    <div class="col-md-4 col-xl-3 col-xxl-3">
                        <h1><span class="orange forcelinebreak">The</span> Solution</h1>
                        <p class="h1-subtext font-weight-bold">
                            Who says <br>men can't <br>cook?
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Our pressure cooker</h2>
                                <p>The ECONOMIZER SE system works like a giant pressure cooker.</p>
                                <p>Cooking at overpressure and up to 180 °C the ECONOMIZER SE disintegrates the incrustinated biomass structures.</p>
                                <p>The lignin coating melts off, hemicellulose dissolves and free sugars are formed.</p>
                                <p>That way indigestible fibers turn into a slurry which smells like candy. That's the perfect food for any biogas plant.</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between align-items-start">

                                <img src="/images/economizer-2-2-links.jpg" alt="">
                                <img src="/images/economizer-2-2-rechts.jpg" alt="">

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
