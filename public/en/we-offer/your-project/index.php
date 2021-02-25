<?php // page settings
$lang = 'en';
$title = "Your Project";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-3-4.jpg";
$main_nav = "we-offer";
$nav = "your-project";
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
                        <h1><span class="orange forcelinebreak">Your</span> Project</h1>
                        <p class="h1-subtext font-weight-bold">
                            Just talking <br> nothing happens. <br> Get on with it!
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-8 col-xxl-6">
                                <h2>Your project's key data …</h2>

                                <form role="form" id="projectForm" name="projectForm" method="post" style="position: relative">
                                    <div id="sendProgress"></div>
                                    <p><span class="text-highlight">*</span> Required Fields</p>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="Name" id="Name" placeholder="Name*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" id="Email" name="Email" placeholder="eMail*" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Nachricht" id="Nachricht" class="form-control input-lg" rows="2" placeholder="Message*" required=""></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <p>
                                                    <input class="form-check-input" type="checkbox" value="Yes" id="Agree" name="Agree">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I agree to the <a href="../../disclaimer" target="_blank">Disclaimer</a>.
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-right">
                                                <a id="submitProjectForm" href=""><img src="<?php echo $include_path; ?>svg-icons/mail-button.svg" class="icon-inline" alt="" style="height: 60px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="form" value="project">
                                    <input type="hidden" name="language" value="<?php echo $lang; ?>">
                                </form>
                                <div id="projectArea"></div>

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

    <script>
        var projectFormOptions = {
            beforeSubmit: validate,
            type: 'POST',
            url: '/mailhandler/index.php',
            target: '#projectArea',
            success: function() {
                $('#projectForm').slideUp()
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
            if (!form.Nachricht.value) {
                fields += 'Message\n';
            }
            if (!$('#Agree').prop('checked')) {
                fields += 'Disclaimer\n';
            }
            if (fields != '') {
                alert(message + fields);
                return false;
            }
            $('#sendProgress').show();
        }

        $(function() {

            $('#projectForm').ajaxForm(projectFormOptions);

            $('#submitProjectForm').on('click', function(e) {
                e.preventDefault();
                $('#projectForm').ajaxSubmit(projectFormOptions);
            });

        });
    </script>

</body>

</html>
