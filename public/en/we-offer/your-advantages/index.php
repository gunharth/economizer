<?php // page settings
$lang = 'en';
$title = "Your Advantages";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-3-3.jpg";
$main_nav = "we-offer";
$nav = "your-advantages";
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
                        <h1><span class="orange forcelinebreak">Your</span> Advantages</h1>
                        <p class="h1-subtext font-weight-bold">
                            Fermenting silage is old-fashioned.<br> From now on you have <br> the full choice.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Facts in our favor</h2>
                                <p>ECONOMIZER SE systems are ideal to upgrade, extend and optimise existing biogas plants.</p>
                                <p>With the ECONOMIZER SE new biogas plants can be designed much smaller and cheaper, because after pre-treatment the feedstock will be digested faster and more efficient.</p>
                                <p>These facts are in favor of our ECONOMIZER SE technology:</p>
                                <p>• replacement of expensive energy crops<br />
                                    • flexible feedstock choice<br />
                                    • high biogas yields from incrustinated substrates<br />
                                    • trouble-free and accelerated digestion<br />
                                    • climate friendly<br />
                                    • economically sound</p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-3-links.jpg" alt="">
                                <img src="/images/economizer-3-3-rechts.jpg" alt="">

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
