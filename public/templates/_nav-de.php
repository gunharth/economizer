<nav class="navbar navbar-expand-xl navbar-dark fixed-top">
    <a class="navbar-brand" href="/"><img src="/assets/images/Logo-Economizer.svg" alt=""></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="navDropdown" class="navbar-nav d-flex ml-auto justify-content-between mr-4">
            <li class="nav-item dropdown <?php if ($main_nav == "wir-sind") echo "active"; ?>">
                <a class="nav-link" href="#" id="dropdown84f35faa-9b26-4b75-ba96-dbfba39478a7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wir sind</a>
                <div class="dropdown-menu" aria-labelledby="dropdown84f35faa-9b26-4b75-ba96-dbfba39478a7">
                    <span>Agres Systems</span>
                    <a class="dropdown-item <?php if ($nav == "mission") echo "active"; ?>" href="/wir-sind/mission"><span>•</span> Mission</a>
                    <a class="dropdown-item <?php if ($nav == "maschine") echo "active"; ?>" href="/wir-sind/maschine"><span>•</span> Maschine</a>
                    <a class="dropdown-item <?php if ($nav == "firma") echo "active"; ?>" href="/wir-sind/firma"><span>•</span> Firma</a>
                    <a class="dropdown-item <?php if ($nav == "neuigkeiten") echo "active"; ?>" href="/wir-sind/neuigkeiten"><span>•</span> Neuigkeiten</a>

                </div>
            </li>
            <li class="nav-item dropdown <?php if ($main_nav == "wir-machen") echo "active"; ?>">
                <a class="nav-link" href="#" id="dropdownbb6dcda1-4dbd-47b8-b4a3-9500d0b6be9a" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wir machen</a>
                <div class="dropdown-menu" aria-labelledby="dropdownbb6dcda1-4dbd-47b8-b4a3-9500d0b6be9a">
                    <span>Steam Explosion</span>
                    <a class="dropdown-item <?php if ($nav == "aufgabe") echo "active"; ?>" href="/wir-machen/aufgabe"><span>•</span> Aufgabe</a>
                    <a class="dropdown-item <?php if ($nav == "loesung") echo "active"; ?>" href="/wir-machen/loesung"><span>•</span> Lösung</a>
                    <a class="dropdown-item <?php if ($nav == "technik") echo "active"; ?>" href="/wir-machen/technik"><span>•</span> Technik</a>
                    <a class="dropdown-item <?php if ($nav == "kennzahlen") echo "active"; ?>" href="/wir-machen/kennzahlen"><span>•</span> Kennzahlen</a>

                </div>
            </li>
            <li class="nav-item dropdown <?php if ($main_nav == "wir-bieten") echo "active"; ?>">
                <a class="nav-link" href="#" id="dropdown9d393296-614d-42f6-8a8b-432ac2471045" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wir bieten</a>
                <div class="dropdown-menu" aria-labelledby="dropdown9d393296-614d-42f6-8a8b-432ac2471045">
                    <span>Perspektiven</span>
                    <a class="dropdown-item <?php if ($nav == "unsere-kunden") echo "active"; ?>" href="/wir-bieten/unsere-kunden"><span>•</span> Unsere Kunden</a>
                    <a class="dropdown-item <?php if ($nav == "unsere-leistungen") echo "active"; ?>" href="/wir-bieten/unsere-leistungen"><span>•</span> Unsere Leistungen</a>
                    <a class="dropdown-item <?php if ($nav == "ihre-vorteile") echo "active"; ?>" href="/wir-bieten/ihre-vorteile"><span>•</span> Ihre Vorteile</a>
                    <a class="dropdown-item <?php if ($nav == "ihr-projekt") echo "active"; ?>" href="/wir-bieten/ihr-projekt"><span>•</span> Ihr Projekt</a>

                </div>
            </li>
            <li class="nav-item dropdown <?php if ($main_nav == "finden-sie-uns") echo "active"; ?>">
                <a class="nav-link" href="#" id="dropdowndca789c4-2bf0-4a6c-bf8b-b75ba88212f7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Finden Sie uns</a>
                <div class="dropdown-menu" aria-labelledby="dropdowndca789c4-2bf0-4a6c-bf8b-b75ba88212f7">
                    <a class="dropdown-item <?php if ($nav == "kontakt") echo "active"; ?>" href="/finden-sie-uns/kontakt"><span>•</span> Kontakt</a>
                    <a class="dropdown-item <?php if ($nav == "referenzen") echo "active"; ?>" href="/finden-sie-uns/referenzen"><span>•</span> Referenzen</a>
                    <a class="dropdown-item <?php if ($nav == "broschueren") echo "active"; ?>" href="/finden-sie-uns/broschueren"><span>•</span> Broschüren</a>
                    <a class="dropdown-item <?php if ($nav == "galerie") echo "active"; ?>" href="/finden-sie-uns/galerie"><span>•</span> Galerie</a>

                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link" href="#" id="dropdown7cee16a2-631d-4787-b68e-8989b9ab216c" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change Language</a>
                <div class="dropdown-menu" aria-labelledby="dropdown7cee16a2-631d-4787-b68e-8989b9ab216c">
                    <a class="dropdown-item <?php if ($lang == "en") echo "active"; ?>" href="/en"><span>•</span> English</a>
                    <a class="dropdown-item  <?php if ($lang == "de") echo "active"; ?> " href="/"><span>•</span> Deutsch</a>

                </div>
            </li>
        </ul>
    </div>
</nav>
<div id="nav-dropdown-bg"></div>
