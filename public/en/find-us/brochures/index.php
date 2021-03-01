<?php // page settings
$lang = 'en';
$title = "Brochures";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-4-3.jpg";
$main_nav = "find-us";
$nav = "brochures";
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
                        <h1><span class="orange forcelinebreak">The</span> Brochures</h1>
                        <p class="h1-subtext font-weight-bold">
                            Comprehensive information –<br> for reading and <br> displaying.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Our Services</h2>
                                <p>Here you can download our ECONOMIZER SE brochures and other interesting reading materials.</p>

                                <form role="form" id="brochuresForm" name="brochuresForm" method="post">

                                    <p>Please register. The download links will be activated immediately.</p>

                                    <div id="sendProgress"></div>
                                    <p><span class="text-highlight">*</span> Required Fields</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Name" id="Name" placeholder="Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Firma" id="Firma" placeholder="Company">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Adresse" id="Adresse" class="form-control input-lg" rows="2" placeholder="Addresse"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Telefon" id="Telefon" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" id="Email" name="Email" placeholder="eMail*" required="">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control input-lg" id="Auswahl" name="Auswahl">
                                            <option value="">Please select</option>
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
                                                <p>
                                                    <input class="form-check-input" type="checkbox" value="Yes" id="Agree" name="Agree">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I accept the <a href="../../disclaimer" target="_blank">Disclaimer</a>.
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-right">
                                                <a id="submitBrochuresForm" href=""><img src="<?php echo $include_path; ?>svg-icons/mail-button.svg" class="icon-inline" alt="" style="height: 60px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="form" value="brochures">
                                    <input type="hidden" name="language" value="<?php echo $lang; ?>">
                                </form>

                                <h2>Our Downloads</h2>

                                <div id="brochuresArea">
                                    <p>
                                        <img src="<?php echo $include_path; ?>svg-icons/pdf-icon-grau.svg" alt="" class="icon-inline" style="height: 38px;">
                                        Brochure english
                                    </p>

                                    <p>
                                        <img src="<?php echo $include_path; ?>svg-icons/pdf-icon-grau.svg" alt="" class="icon-inline" style="height: 38px;">
                                        Brochure german
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
            include($include_path . 'templates/_footer-' . $lang . '.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>

    <script>
        var brochureFormOptions = {
            beforeSubmit: validate,
            type: 'POST',
            url: '/mailhandler/index.php',
            target: '#brochuresArea',
            success: function() {
                $('#brochuresForm').slideUp()
            }
        };

        function validate(formData, jqForm, options) {
            var form = jqForm[0];
            console.log(form)
            var message = 'Please provide the following information: \n';
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
            if (!$('#Agree').prop('checked')) {
                fields += 'Disclaimer\n';
            }
            if (fields != '') {
                alert(message + fields);
                return false;
            }
        }

        $(function() {

            $('#brochuresForm').ajaxForm(brochureFormOptions);

            $('#submitBrochuresForm').on('click', function(e) {
                e.preventDefault();
                $('#brochuresForm').ajaxSubmit(brochureFormOptions);
            });

        });
    </script>
</body>

</html>
