<?php // page settings
$lang = 'de';
$title = "Glossar";
$description = "";
$include_path = "../../";
$main_image = "economizer-header-5.jpg";
$main_nav = "";
$nav = "";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body>
    <div id="wrapper">
        <div id="wrapper-content">
            <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>
            <div id="schleife"></div>

            <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;"></div>

            <main class="container-lg">
                <div class="row">
                    <div class="col-md-4 col-xxl-3">
                        <h1><span class="orange forcelinebreak">Das</span> Glossar</h1>
                        <p class="h1-subtext font-weight-bold">
                            Unser Lexikon für<br>Fachbegriffe<br>von A–Z.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">

                        <div class="row">
                            <div class="col-xl-12">

                                <?php
                                // include('de.php');
                                foreach ($g as $gkey => $items) {
                                    echo '<h2>' . $gkey . '</h2>';
                                    foreach ($items as $ikey => $item) {
                                        echo '<p><strong>';
                                        echo $ikey;
                                        echo '</strong></br>';
                                        echo $item;
                                        echo '</p>';
                                    }
                                    echo '<hr />';
                                }
                                ?>

                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id odit quasi excepturi, enim, veritatis esse quod <a href="#" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $g["A"]["AFermenter"]; ?>">Glositem</a> alias earum reprehenderit reiciendis laborum provident doloremque itaque magnam explicabo suscipit quos dignissimos quam.
                                </p>

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
            include($include_path . 'templates/_footer-'.$lang.'.php');
            include($include_path . 'templates/_scripts.php');
            ?>
        </div>
    </div>
</body>

</html>
