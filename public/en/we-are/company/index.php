<?php // page settings
$lang = 'en';
$title = "Company";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-1-3.jpg";
$main_nav = "we-are";
$nav = "company";
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
                        <h1><span class="orange forcelinebreak">The</span> Company</h1>
                        <p class="h1-subtext font-weight-bold">
                            We all have <br>Steam Explosion <br>in our blood.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>This is us</h2>
                                <p>We are the only company in the world offering a technically and economically proven Steam Explosion system for biogas plants: the ECONOMIZER SE technology.</p>
                                <p>Behind this success stands an experienced team of engineers and plant constructors. We are the absolute experts for Steam Explosion applications in the field of biogas.</p>
                                <p>We give our best for our common goal: sustainably generated renewable energy from organic residues.</p>
                                <p><strong>In the above picture from left to right:</strong><br />
                                    Hermann Dauser (CTO)<br />
									Helge Leinich (MD/CEO)<br />
                                    Felix Nussbaumer (CFO)</p>
                                <p>In the group picture – the team</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-3-Raggiodorato.jpg" alt="" class="full">

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
