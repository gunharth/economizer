<?php // page settings
$lang = 'en';
$title = "Challenge";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-2-1.jpg";
$main_nav = "we-do";
$nav = "challenge";
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
                        <h1><span class="orange forcelinebreak">The</span> Challenge</h1>
                        <p class="h1-subtext font-weight-bold">
                            We have <br>the best solution <br>for the Lignocellulose-Complex.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>The Lignocellulose-Complex</h2>
                                <p>Straw, manure, green waste and crop residues – all the alternative kinds of feedstock we utilise have one thing in common: the Lignocellulose-Complex.</p>
                                <p>This means these materials in great parts consist of an incrustinated composite of cristalline cellulose and hemicellulose, coated by lignin. This complex is extremely rich in energy, but almost indigestible for biogas bacteria.</p>
                                <p>Without suitable pre-treatment a biogas plant can't get hold of the energy potential, and the substrates leave the fermenter before they have been turned into biogas.</p>
                                <p>And in addition you have to fight operational problems like floating layers and sediments building up from undigested feedstock.</p>
                                <p>For this challenge we offer the best solution.</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-2-1.png" alt="" class="full">

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
