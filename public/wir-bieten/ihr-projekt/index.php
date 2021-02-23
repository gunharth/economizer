<?php // page settings
$lang = 'de';
$title = "Ihr Projekt";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-3-4.jpg";
$main_nav = "wir-bieten";
$nav = "ihr-projekt";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-' . $lang . '.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Ihr</span> Projekt</h1>
                        <p class="h1-subtext font-weight-bold">
                            Nur vom Reden <br> passiert nichts.<br> Packen Sie’s an!
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Ihre Eckdaten …</h2>

                                

                                <form role="form" id="brochuresForm" name="brochuresForm" method="post">
                                    <p><span class="text-highlight">*</span> Erforderliche Felder</p>
                                    <div class="form-group">
                                        <select class="form-control input-lg" id="Auswahl" name="Auswahl">
                                            <option value="">Bitte auswählen</option>
                                            <option value="Betreiber">Betreiber</option>
                                            <option value="Anlagenbauer">Anlagenbauer</option>
                                            <option value="Planung">Planung</option>
                                            <option value="Behörde">Behörde</option>
                                            <option value="Forschung">Forschung</option>
                                            <option value="andere">andere</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Name" id="Name" placeholder="Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" id="Email" name="Email" placeholder="eMail*" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Nachricht" id="Nachricht" class="form-control input-lg" rows="2" placeholder="Nachricht*" required=""></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Ich habe die <a href="../../datenschutz/index.php" target="_blank">Datenschutzbestimmungen</a> gelesen.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-right">
                                                <a id="submitBrochuresForm" href=""><img src="<?php echo $include_path; ?>svg-icons/mail-button.svg" class="icon-inline" alt="" style="height: 60px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-4-links.jpg" alt="">
                                <img src="/images/economizer-3-4-rechts.jpg" alt="">

                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <?php
            include($include_path . 'templates/_footer-' . $lang . '.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
