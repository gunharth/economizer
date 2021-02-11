<?php // page settings
$lang = 'en';
$title = "Imprint";
$description = "";
$include_path = "../";
$main_image = "economizer-header-5.jpg";
$main_nav = "";
$nav = "";
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
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Das</span> Impressum</h1>
                        <p class="h1-subtext font-weight-bold">
                            Informationspflicht lt. &sect; 5 Abs. 1 E-Commerce-Gesetz und Offenlegungspflicht gemäß Mediengesetz &sect; 25.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-12">
                                <h2>AGRES SYSTEMS GmbH</h2>
								<p>Für den Inhalt dieser Webseite verantwortlich ist:<br></p>
								<p><strong>Firmenwortlaut</strong> AGRES SYSTEMS GmbH</p>
								<p><strong>Geschäftsführer</strong> DI Helge Leinich</p>
								<p><strong>UID-Nummer</strong> ATU75675903</p>
								<p><strong>Firmenbuchnummer/-gericht</strong> FN 534497a, Landesgericht Graz</p>
								<p><strong>Firmensitz</strong> Gewerbestr. 2, 5201 Seekirchen am Wallersee, Österreich</p>
								<p><strong>Telefon</strong> +43 676 5745829</p>
								<p><strong>eMail</strong> <a href="mailto: office@agres.systems">office@agres.systems</a></p>
								<p><strong>Mitglied</strong> WKÖ</p>
								<p><strong>Gewerbe</strong> Mechatroniker für Elektromaschinenbau und Automatisierung verbunden mit Mechatroniker für Maschinen- und Fertigungstechnik; Mechatroniker für Elektronik, Büro- und EDV-Systemtechnik; Mechatroniker für Medizingerätetechnik (verbundenes Handwerk)</p>
								<hr />
								<p>Verbraucher haben die Möglichkeit, Beschwerden an die Online-Streitbeilegungsplattform der EU zu richten: <a href="http://ec.europa.eu/odr" target="_blank">http://ec.europa.eu/odr</a>. Sie können allfällige Beschwerden auch an die oben angegebene eMailadresse richten.</p>
								<hr />
								<p><strong>Marken- und Patentschutzrechte</strong><br>
								Die Produktbezeichnungen ECONOMIZER, ECONOMAIZE und AGROWFIBER sind geschützte Marken. Jegliche kommerzielle Nutzung und/oder Verwendung dieser Produktbezeichnungen ist ohne ausdrückliche und schriftliche Zustimmung der AGRES SYSTEMS GmbH untersagt. Die ECONOMIZER-Technologie ist patentrechtlich geschützt. Die AGROWFIBER-Technologie ist zum Patent angemeldet.</p>
                                <hr />
								<p><strong>Fotos, Bilder und Videos</strong><br>
								Jegliche Verbreitung, Reproduktion und/oder Verwendung der Fotos, Bilder und Videos, die auf dieser Website eingebunden sind, ist ohne ausdrückliche und schriftliche Zustimmung der AGRES SYSTEMS GmbH untersagt: © AGRES SYSTEMS GmbH, Martin Dauser<br><br>
								Externe Bildnachweise:<br>
								Wir sind - Die Firma: (Portrait- und Gruppenfoto) © Raggio Dorato Photography<br>
								Wir bieten - Unsere Kunden: Harvested oil palm fruits with workers in background © t4nkyong / Adobe Stock Bilder, LKW lädt Container mit Grünschnitt auf dem Wertstoffhof auf © Kzenon / Adobe Stock Bilder<br>
								Wir bieten - Die Broschüren (Deckblatt Broschüren) / Impressum / Datenschutz: © Matthis Dierkes / photocase.de<br>
								Weitere: pixabay.com, unsplash.com</p>
								<hr />
                                <p><strong>Webdesign</strong> <a href="https://www.bit-pool.com/" target="_blank">www.bit-pool.com</a> / Silke Sporn</p>
								<p><strong>Programmierung</strong> <a href="https://gunharth.io/" target="_blank">https://gunharth.io</a> / Gunharth Randolf</p>

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
            include($include_path . 'templates/_footer.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
