<?php // page settings
$lang = 'en';
$title = "Technology";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-2-3.jpg";
$main_nav = "we-do";
$nav = "technology";
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
                        <h1><span class="orange forcelinebreak">The</span> Technology</h1>
                        <p class="h1-subtext font-weight-bold">
                            Just a few steps, <br>and straw and manure become <br>the perfect biogas feedstock.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>That's how it works</h2>
                                <p>First coarse cut residual materials are mixed with low quality water <span class='orange'>(1)</span> and pre-heated by re-cycled process steam <span class='orange'>(2)</span>.</p>
                                <p>Then the substrate is fed in batches to the pressure steamcooker <span class='orange'>(3)</span> and heated up to an optimum pressure and temperature level multiple times <span class='orange'>(4)</span>.</p>
                                <p>Subsequently the cooked material is released in portions with overpressure from the cooker <span class='orange'>(5)</span>. There a rapid pressure drop takes place, which effects the spontaneous evaporation of a part of the present water. This causes the “Steam Explosion Effect“: the rapidly expanding steam bubbles tear the soft-cooked substrates into finest fibres.</p>
                                <p>After the disintegrated slurry has cooled down <span class='orange'>(6)</span> a liquid or solids feeding systems transfers the feedstock <span class='orange'>(7)</span> to the fermenter.</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <a href="/images/economizer-2-3.jpg" data-footer="Blending of pre-shredded feedstock with process water <span class='orange'>(1)</span>&nbsp;/ Pre-heating by recycled flash steam <span class='orange'>(2)</span>&nbsp;/ Feed Tank <span class='orange'>(3)</span>&nbsp;/ Steam cooker <span class='orange'>(4)</span>&nbsp;/ Steam Explosion flash pipe <span class='orange'>(5)</span>&nbsp;/ Storage and cooling <span class='orange'>(6)</span>&nbsp;/ Fermenter feed line <span class='orange'>(7)</span>" data-toggle="lightbox">
                                    <img src="/images/economizer-2-3.jpg" alt="" class="full">
                                </a>

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
