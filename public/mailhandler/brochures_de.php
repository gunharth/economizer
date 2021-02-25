<?php

// collect form details
// brochures
$subject = "Agres Systems Broschüren";
$Name = $_POST['Name'];
$Firma = $_POST['Firma'];
$Adresse = $_POST['Adresse'];
$Telefon = $_POST['Telefon'];
$Email = $_POST['Email'];
$Auswahl = $_POST['Auswahl'];

if($Name == "" || $Email == "") {
    echo "Bitten geben Sie einen Namen und eine E-Mail Adresse an";
    die();
}

$body = "
Name: $Name <br>
Firma: $Firma <br>
Adresse: " . nl2br($Adresse) . " <br>
Telefon: $Telefon <br>
Email: $Email <br>
Auswahl: $Auswahl <br>
";

$success = '<p>
                <img src="/svg-icons/pdf-icon-orange.svg" alt="" class="icon-inline" style="height: 38px;">
                <a href="/pdf/Economizer-wwwFolder-d.pdf" target="_blank">Infobroschüre deutsch</a>
            </p>

            <p>
                <img src="/svg-icons/pdf-icon-orange.svg" alt="" class="icon-inline" style="height: 38px;">
                <a href="/pdf/Economizer-wwwFolder-e.pdf" target="_blank">Infobroschüre englisch</a>
            </p>';
