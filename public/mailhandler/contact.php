<?php

// collect form details
// brochures
$subject = "Agres Systems Broschüren";
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Nachricht = $_POST['Nachricht'];

if($Name == "" || $Email == "") {
    echo "Bitten geben Sie einen Namen und eine E-Mail Nachricht an";
    die();
}

$body = "
Name: $Name <br>
Email: $Email <br>
Nachricht: " . nl2br($Nachricht) . " <br>
";

$success = '<p>
                Danke
            </p>';
