<?php // page settings
$lang = 'de';
$title = "Broschüren";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-4-3.jpg";
$main_nav = "finden-sie-uns";
$nav = "brochueren";
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
                        <h1><span class="orange forcelinebreak">Die</span> Broschüren</h1>
                        <p class="h1-subtext font-weight-bold">
                            Gebündelte Informationen –<br> zum Lesen und <br> Herzeigen.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Unser Service</h2>
                                <p>Als Service bieten wir Ihnen hier die Möglichkeit, sich unsere Infobroschüren über den ECONOMIZER SE in verschiedenen Sprachen kostenlos herunterzuladen.</p>
                                <p>Registrieren Sie sich dazu bitte hier. Die Downloadlinks werden im Anschluss sofort freigeschaltet.</p>

                                <form role="form" id="brochuresForm" name="brochuresForm" method="post">
                                    <p><span class="text-highlight">*</span> Erforderliche Felder</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Name" id="Name" placeholder="Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Firma" id="Firma" placeholder="Firma">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Adresse" id="Adresse" class="form-control input-lg" rows="2" placeholder="Adresse"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Telefon" id="Telefon" placeholder="Telefon">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" id="Email" name="Email" placeholder="eMail*" required="">
                                    </div>
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
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Ich habe die Datenschutzbestimmungen gelesen
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-right">
                                                <a id="submitBrochuresForm" href=""><img src="<?php echo $include_path;?>svg-icons/mail-button.svg" class="icon-inline" alt="" style="height: 40px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <h2>Unser Downloadbereich</h2>
                                <p>Als Service bieten wir Ihnen hier die Möglichkeit, sich unsere Infobroschüren über den ECONOMIZER SE in verschiedenen Sprachen kostenlos herunterzuladen.</p>
                                <p>Registrieren Sie sich dazu bitte hier. Die Downloadlinks werden im Anschluss sofort freigeschaltet.</p>
                                <div id="brochuresArea">
                                    <p>
                                        <img src="<?php echo $include_path;?>svg-icons/pdf-icon-grau.svg" alt="" class="icon-inline" style="height: 38px;">
                                        Infobroschüre deutsch
                                    </p>
                                </div>


                            </div>
                            <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-4-3.png" alt="" class="full">

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
    <script>
        // Options for checkout page
        var brochureFormOptions = {
            //beforeSubmit: validate,
            //dataType:  'json',
            type: 'POST',
            url: '/mailhandler/brochures.php',
            target: '#brochuresArea'
        };

        function validate(formData, jqForm, options) {
            var form = jqForm[0];
            var message = 'Bitte füllen Sie folgende Felder aus: \n';
            var fields = '';
            if (!form.Name.value) {
                fields += 'Name\n';
            }
            if (!form.Adresse.value) {
                fields += 'Adresse\n';
            }
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = form.Email.value;
            if (reg.test(address) == false) {
                fields += 'E-Mail\n';
            }
            if (fields != '') {
                alert(message + fields);
                return false;
            }
        }

        $(function() {

            //$('#brochuresForm').on(function() {
            $('#brochuresForm').ajaxForm(brochureFormOptions);
            //     return false;
            // });

            $('#submitBrochuresForm').on('click', function(e) {
                e.preventDefault();
                $('#brochuresForm').ajaxSubmit(brochureFormOptions);
            });

        });
    </script>
</body>

</html>
