<?php

$g = [
    "A" => [
        "Fermenter" => "Was ist ein Fermenter",
        "Biogas" => "Biogas is great"
    ],
    "b" => "foo",
];

echo $g["A"]["Fermenter"];

foreach($g as $gitem) {
    echo $gitem[0];
}
