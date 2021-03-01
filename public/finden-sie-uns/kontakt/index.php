<?php // page settings
$lang = 'de';
$title = "Kontakt";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-1.jpg";
$main_nav = "finden-sie-uns";
$nav = "kontakt";
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
                        <h1><span class="orange forcelinebreak">Der</span> Kontakt</h1>
                        <p class="h1-subtext font-weight-bold">
                            Hier können Sie uns alles fragen –<br> oder einfach nur <br> Ihre Begeisterung ausdrücken.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>AGRES SYSTEMS GmbH</h2>
                                <p><img src="<?php echo $include_path; ?>svg-icons/telefon-icon.svg" alt="" class="icon-inline" style="height: 31px;"> +43 676 5745829</p>
                                <hr />
                                <p class="d-flex align-items-center">
                                    <img src="<?php echo $include_path; ?>svg-icons/adresse-icon.svg" alt="" class="icon-inline" style="height: 31px;">
                                    <span class="ml-1">Gewerbestr. 2 / 5201 Seekirchen / Österreich</span>
                                </p>

                                <form role="form" id="contactForm" name="contactForm" method="post" style="position: relative">
                                    <div id="sendProgress"></div>
                                    <p><span class="text-highlight">*</span> Erforderliche Felder</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Name" id="Name" placeholder="Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Email" id="Email" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Nachricht" id="Nachricht" class="form-control input-lg" rows="2" placeholder="Nachricht*"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <p>
                                                    <input class="form-check-input" type="checkbox" value="Yes" id="Agree" name="Agree">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Ich habe die <a href="../../datenschutz" target="_blank">Datenschutzbestimmungen</a> gelesen.
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-right">
                                                <a id="submitContactForm" href=""><img src="<?php echo $include_path; ?>svg-icons/mail-button.svg" class="icon-inline" alt="" style="height: 60px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="form" value="contact">
                                    <input type="hidden" name="language" value="<?php echo $lang; ?>">
                                </form>
                                <div id="contactArea"></div>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-1-links.jpg" alt="">
                                <img src="/images/economizer-4-1-rechts.jpg" alt="">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Vertriebspartner</h2>
                                <hr />
                                <p>
                                    <strong>Deutschland</strong><br>
                                    <em>STEAMFIBER Zellulose-Projekte</em><br>
                                    FIBERS<sup>365</sup> GmbH<br>
                                    Hr. Stefan Radlmayr<br>
                                    Adolf-Scheufelen-Straße 33<br>
                                    73252 Lenningen<br>
                                    Deutschland<br>
                                    eMail: <a href="mailto:sr@fibers365.com">sr@fibers365.com</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Italien</strong><br>
                                    ORSAMAGGIORE srl<br>
                                    Mr. Giulio Borgia<br>
                                    Via Birmania 123<br>
                                    58100 Grosseto<br>
                                    Italia<br>
                                    eMail: <a href="mailto:info@orsamaggiore.tech">info@orsamaggiore.tech</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Polen</strong><br>
                                    Hr. Joachim Felix<br>
                                    Repräsentant AGRES SYSTEMS GmbH<br>
                                    eMail: <a href="mailto:j.felix@agres.systems">j.felix@agres.systems</a>
                                </p>
                                <hr />
                                <p>
                                    <strong>Thailand</strong><br>
                                    JIAMPHATTANA ENERGY GROUP co.,ltd<br>
                                    Mr. Udomsak Lohachitpitaks<br>
                                    Senior Executive Vice President<br>
                                    eMail: <a href="mailto:udomsak@jiamenergy.com">udomsak@jiamenergy.com</a>
                                    <hr />
                                </p>

                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

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

    <script>
        var contactFormOptions = {
            beforeSubmit: validate,
            type: 'POST',
            url: '/mailhandler/index.php',
            target: '#contactArea',
            success: function() {
                $('#contactForm').slideUp()
            }
        };

        function validate(formData, jqForm, options) {
            var form = jqForm[0];
            console.log(form)
            var message = 'Bitte füllen Sie folgende Felder aus: \n';
            var fields = '';
            if (!form.Name.value) {
                fields += 'Name\n';
            }
            // if (!form.Adresse.value) {
            //     fields += 'Adresse\n';
            // }
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = form.Email.value;
            if (reg.test(address) == false) {
                fields += 'E-Mail\n';
            }
            if (!form.Nachricht.value) {
                fields += 'Nachricht\n';
            }
            if (!$('#Agree').prop('checked')) {
                fields += 'Datenschutzbestimmung\n';
            }
            if (fields != '') {
                alert(message + fields);
                return false;
            }
            $('#sendProgress').show();
        }

        $(function() {

            $('#contactForm').ajaxForm(contactFormOptions);

            $('#submitContactForm').on('click', function(e) {
                e.preventDefault();
                $('#contactForm').ajaxSubmit(contactFormOptions);
            });

        });
    </script>
</body>

</html>
