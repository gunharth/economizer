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
            <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>
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
                                <p>Please register. The download links will be activated immediately.</p>
                                <p><strong>(Dann Formular und Downloadbereich wie Originallayout bitte.)</strong></p>

                                <form role="form" id="downloadForm" name="downloadForm" method="post" enctype="multipart/form-data">
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

                                    <input type="submit" name="submit" id="submit" value="Absenden" class="btn btn-lg btn-warning"> <i id="processing" style="display: none" class="fa fa-lg fa-cog fa-spin"></i>
                                </form>

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
</body>

</html>
