<?php // page settings
$lang = 'de';
$title = "Impressum";
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
                                <h2>ECONOMIZER GmbH</h2>
								<p>Richtiger Text von Hermanns Rechtsanwalt! Hier keine Bilder rechts, Text über gesamte Breite?!<br><br><br></p>
								<p><strong>Firmenwortlaut</strong> ECONOMIZER GmbH</p>
								<p><strong>UID-Nummer</strong> ATU65609059</p>
								<p><strong>Firmenbuchnummer/-gericht</strong> FN 342410 w, Landesgericht Salzburg</p>
								<p><strong>Firmensitz</strong> Gewerbestrasse 2, 5201 Seekirchen, Austria</p>
								<p><strong>Kontaktdaten</strong> Tel.: +43 (0)6212.31602</p>
								<p><strong>E-Mail</strong> office@economizer.systems</p>
								<p><strong>Gewerbe</strong> Mechatroniker für Elektromaschinenbau und Automatisierung, verbunden mit Mechatroniker für Maschinen- und Fertigungstechnik (Handwerk)</p>
                                <hr />
                                <p><strong>Webdesign</strong> <a href="https://www.bit-pool.com/" target="_blank">www.bit-pool.com</a> / Silke Sporn</p>
								<p><strong>Programmierung</strong> <a href="https://gunharth.io/" target="_blank">https://gunharth.io</a> / Gunharth Randolf</p>
                                <hr />
								<p><strong>Bildnachweise</strong><br>
								Wir sind - Die Mission: (Schubkarre) © Suju / pixabay.com<br>
								Wir sind - Die Firma: (Portrait- und Gruppenfoto) © Raggio Dorato Photography<br>
								Wir sind - Die Neuigkeiten: https://de.wikipedia.org/wiki/Datei:Cup_plant.jpg<br>
								Wir bieten - Unsere Kunden: (Kompost) © Ben_Kerckx / pixabay.com, (Harvested oil palm fruits with workers in background) © t4nkyong / Adobe Stock Bilder, (LKW lädt Container mit Grünschnitt auf dem Wertstoffhof auf) © Kzenon / Adobe Stock Bilder<br>
								Wir bieten - Ihr Projekt: (Hände) © Scott Graham / unsplash.com<br>
								Finden Sie uns - Der Kontakt: (Hände) Nic Macmillan / unsplash.com, (Hände am Laptop) © Scott Graham / unsplash.com<br>
								Wir bieten - Die Broschüren (Deckblatt Broschüren) / Glossar / Datenschutz / Impressum: © Matthis Dierkes / photocase.de<br>
								Alle anderen: © ECONOMIZER GmbH</p>
								<p><strong>Videonachweise</strong> © ECONOMIZER GmbH</p>

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
