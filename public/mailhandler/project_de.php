<?php

// collect form details
// brochures
$subject = "Agres Systems Projekt";
$Auswahl = $_POST['Auswahl'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Nachricht = $_POST['Nachricht'];

if($Name == "" || $Email == "") {
    echo "Bitten geben Sie einen Namen und eine E-Mail Nachricht an";
    die();
}

$body = "
Auswahl: $Auswahl <br>
Name: $Name <br>
Email: $Email <br>
Nachricht: " . nl2br($Nachricht) . " <br>
";

$success = '<p>
                Vielen Dank! Wir werden uns umgehend bei Ihnen melden.
            </p>';
