<?php // page settings
$lang = 'en';
$title = "Imprint";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-5.jpg";
$main_nav = "";
$nav = "";
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
                        <h1><span class="orange forcelinebreak">The</span> Imprint</h1>
                        <p class="h1-subtext font-weight-bold">
                            Obligation to inform according to <br>§5 par. 1 E-Commerce-Law and <br>obligation to disclose according to Media Law § 25
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-12">
                                <h2>AGRES SYSTEMS GmbH</h2>
								<p>Responsible for the content of this Website is:<br></p>
								<p><strong>Company name</strong> AGRES SYSTEMS GmbH</p>
								<p><strong>Managing Director</strong> DI Helge Leinich</p>
								<p><strong>VAT No.</strong> ATU75675903</p>
								<p><strong>Company register No.</strong> FN 534497a, LG Graz</p>
								<p><strong>Head office</strong> Graz / <strong>Production site</strong> Gewerbestr. 2, 5201 Seekirchen am Wallersee, Austria</p>
								<p><strong>Phone</strong> +43 676 5745829</p>
								<p><strong>eMail</strong> <a href="mailto: office@agres.systems">office@agres.systems</a></p>
								<p><strong>Member</strong> of the WKÖ (Austrian Chamber of Commerce)</p>
								<p><strong>Business</strong> Mechatronics for electromechanical engineering and automation in connection with mechatronics for machine technology and manufacturing engineering; mechatronics for electronics, office and IT technologies; mechatronics for medical technologies (affiliated trades)</p>
								<hr />
								<p>Consumers shall address any claims to the Online-Dispute-Settling-Platform of the EC: <a href="http://ec.europa.eu/odr" target="_blank">http://ec.europa.eu/odr</a>. Also you may address any complaints to the email address listed above.</p>
								<hr />
								<p><strong>Registered brands, trademarks and patents</strong><br>
								The product names ECONOMIZER, ECONOMAIZE and AGROWFIBER are registered trademarks. Any commercial utilisation and/or use of these brands is prohibited, if not explicitely approved by AGRES SYSTEMS GmbH in writing. The ECONOMIZER-technology is patent protected. The AGROWFIBER-technology is applied for patent.</p>
                                <hr />
								<p><strong>Pictures, videos and schemes</strong><br>
								Any distribution, reproduction and/or use of pictures and schemes shown on this Website is prohibited, if not explicitely approved by AGRES SYSTEMS GmbH in writing.<br><br>
								External picture credits:<br>
								We are - The Company: (Portrait- and group foto) © Raggio Dorato Photography<br>
								We offer - Our clients: Harvested oil palm fruits with workers in background © t4nkyong / Adobe Stock Bilder, Truck loads containers with green waste at the recycling center © Kzenon / Adobe Stock Bilder<br>
								Find us - The brochures (Cover brochures) / Imprint / Disclaimer: © Matthis Dierkes / photocase.de<br>
								Further: pixabay.com, unsplash.com</p>
								<hr />
                                <p><strong>Webdesign</strong> <a href="https://www.bit-pool.com/" target="_blank">www.bit-pool.com</a> / Silke Sporn</p>
								<p><strong>Programming</strong> <a href="https://gunharth.io/" target="_blank">https://gunharth.io</a> / Gunharth Randolf</p>

                            </div>
                            <!-- <div class="col-xl-4 col-xxl-6 d-flex flex-xl-column flex-xxl-row justify-content-between justify-content-xl-start justify-content-xxl-between align-items-start">

                                <img src="/images/economizer-3-1-links-1.jpg" alt="">
                                <img src="/images/economizer-3-1-rechts-1.jpg" alt="">

                            </div> -->
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
