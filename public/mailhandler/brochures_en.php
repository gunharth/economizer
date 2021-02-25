<?php

// collect form details
// brochures
$subject = "Agres Systems Brochures";
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
Company: $Firma <br>
Address: " . nl2br($Adresse) . " <br>
Phone: $Telefon <br>
Email: $Email <br>
Selection: $Auswahl <br>
";

$success = '<p>
                <img src="/svg-icons/pdf-icon-orange.svg" alt="" class="icon-inline" style="height: 38px;">
                <a href="/pdf/Economizer-wwwFolder-e.pdf" target="_blank">Brochure englisch</a>
            </p>

            <p>
                <img src="/svg-icons/pdf-icon-orange.svg" alt="" class="icon-inline" style="height: 38px;">
                <a href="/pdf/Economizer-wwwFolder-d.pdf" target="_blank">Brochure german</a>
            </p>';
