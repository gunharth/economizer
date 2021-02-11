<?php
error_reporting(0);
$basepath = '/';
if ($lang == 'de') {
    include($include_path . 'de/glossar/glossar.php');
} else {
    include($include_path . 'glossary/glossar.php');
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="theme-color" content="00908F">
    <link rel="stylesheet" href="//use.typekit.net/nvh1bxa.css">
    <link href="//fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />
    <link rel="stylesheet" href="/assets/css/site.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
