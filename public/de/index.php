<?php // page settings
$lang = 'de';
$title = "Home";
$description = "";
$include_path = "../";
$main_image = "economizer-index.jpg";
$main_nav = "";
$nav = "";
?>
<?php include($include_path . 'templates/_head.php'); ?>
<body id="index">

    <?php include($include_path . 'templates/_nav-de.php'); ?>

    <div class="header-image" style="background:url(/images/<?php echo $main_image;?>) no-repeat center center; background-size:cover;">
    </div>

    <main>
        <h1>Change<br />
            Biogas<br />
            Generation
        </h1>
    </main>
    <?php
        include($include_path . 'templates/_footer-de.php');
        include($include_path . 'templates/_scripts.php');
    ?>
</body>

</html>
