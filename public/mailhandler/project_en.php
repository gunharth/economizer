<?php

// collect form details
// brochures
$subject = "Agres Systems Project";
$Auswahl = $_POST['Auswahl'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Nachricht = $_POST['Nachricht'];

if($Name == "" || $Email == "") {
    echo "Bitten geben Sie einen Namen und eine E-Mail Nachricht an";
    die();
}

$body = "
Selection: $Auswahl <br>
Name: $Name <br>
Email: $Email <br>
Message: " . nl2br($Nachricht) . " <br>
";

$success = '<p>
                Thank you! We will get in touch shortly.
            </p>';
