<?php // page settings
$lang = 'en';
$title = "Contact";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-4-1.jpg";
$main_nav = "find-us";
$nav = "contact";
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
                        <h1><span class="orange forcelinebreak">The</span> Contact</h1>
                        <p class="h1-subtext font-weight-bold">
                            Here you can ask any of us –<br> or just express <br> your enthusiasm.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>AGRES SYSTEMS GmbH</h2>
                                <p><img src="<?php echo $include_path;?>svg-icons/telefon-icon.svg" alt="" class="icon-inline" style="height: 31px;"> +43 676 5745829</p>
                                <hr />
                                <p><img src="<?php echo $include_path;?>svg-icons/adresse-icon.svg" alt="" class="icon-inline" style="height: 31px;"> Gewerbestr. 2 / 5201 Seekirchen / Austria</p>
                                <p><strong>@GUNI: Und hier ein Formular laut Enwurf auf office@agres.systems</strong></p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-1-links.jpg" alt="">
                                <img src="/images/economizer-4-1-rechts.jpg" alt="">

                            </div>
                        </div>

						<div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Distribution partners</h2>
                                <hr /><p>
<strong>Germany</strong><br>
                                    <em>STEAMFIBER Cellulose-Projects</em><br>
                                    FIBERS<sup>365</sup> GmbH<br>
                                    Mr. Stefan Radlmayr<br>
                                    Adolf-Scheufelen-Str. 33<br>
                                    73252 Lenningen<br>
                                    Germany<br>
                                    eMail: <a href="mailto:sr@fibers365.com">sr@fibers365.com</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Italy</strong><br>
                                    ORSAMAGGIORE srl<br>
                                    Mr. Giulio Borgia<br>
                                    Via Birmania 123<br>
                                    58100 Grosseto<br>
                                    Italy<br>
                                    eMail: <a href="mailto:info@orsamaggiore.tech">info@orsamaggiore.tech</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Poland</strong><br>
                                    Mr. Joachim Felix<br>
									Representative AGRES SYSTEMS GmbH<br>
									eMail: <a href="mailto:j.felix@agres.systems">j.felix@agres.systems</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Thailand</strong><br>
                                    JIAMPHATTANA ENERGY GROUP co.,ltd<br>
                                    Mr. Udomsak Lohachitpitaks<br>
                                    Senior Executive Vice President<br>
                                    eMail: <a href="mailto:udomsak@jiamenergy.com">udomsak@jiamenergy.com</a>
                                    <hr /></p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">



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
