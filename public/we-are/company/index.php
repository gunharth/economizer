<?php // page settings
$lang = 'en';
$title = "Company";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-1-3.jpg";
$main_nav = "we-are";
$nav = "company";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xl-3 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Die</span> Firma</h1>
                        <p class="h1-subtext font-weight-bold">
                            Wir haben alle <br>Steam Explosion <br>im Blut.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xl-9 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-7 col-xxl-6">
                                <h2>Das sind wir</h2>
                                <p>Als weltweit einziges Unternehmen bieten wir mit dem ECONOMIZER SE eine technisch und wirtschaftlich bewährte Steam Explosion-Technologie für Biogasanlagen an.</p>
                                <p>Hinter diesem Erfolg steht unser erfahrenes Team aus Ingenieuren und Anlagenbauern. Wir sind die Top-Experten für Steam Explosion-Anwendungen im Bereich Biogas.</p>
                                <p>Wir geben unser Bestes für unser gemeinsames Ziel: nachhaltig erzeugte, erneuerbare Energie aus organischen Reststoffen.</p>
                                <p><strong>Im Bild oben von links nach rechts:</strong><br />
                                    Hermann Dauser (CTO)<br />
									Helge Leinich (MD/CEO)<br />
                                    Felix Nussbaumer (CFO)</p>
                                <p>Im Gruppenbild – das Team</p>

                            </div>
                            <div class="col-xl-5 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-1-3-Raggiodorato.jpg" alt="" class="full">

                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <?php
            include($include_path . 'templates/_footer.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
