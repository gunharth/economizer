<?php // page settings
$lang = 'en';
$title = "Gallery";
$description = "";
$include_path = "../../../";
$main_image = "economizer-header-4-4.jpg";
$main_nav = "find-us";
$nav = "gallery";
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
                        <h1><span class="orange forcelinebreak">The</span> Gallery</h1>
                        <p class="h1-subtext font-weight-bold">
                            So that you can get used<br> to the sight <br> now.
                            <?php include($include_path . 'templates/_zitatszeichen.php'); ?>
                        </p>
                        <hr class="d-block d-md-none" />
                    </div>

                    <div class="col-md-8 col-xxl-9">





                        <div class="row">
                            <div class="col-md-12">
                                <h2>Our Photos</h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">

                                        <!-- bilder  -->
                                        <a href="/images/bilder-galerie/italien-leona.jpg?image=251" data-footer="Società Agricola Leona S.S., Italy" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                            <img src="/images/bilder-galerie/italien-leona.jpg?image=251" class="img-fluid">
                                        </a>
                                        <a href="/images/bilder-galerie/ukraine-teofipol1.jpg?image=252" data-footer="Teofipolskey Sugar Mill, Ukraine" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                            <img src="/images/bilder-galerie/ukraine-teofipol1.jpg?image=252" class="img-fluid">
                                        </a>
                                        <a href="/images/bilder-galerie/ukraine-teofipol2.jpg?image=253" data-footer="Teofipolskey Sugar Mill, Ukraine" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                            <img src="/images/bilder-galerie/ukraine-teofipol2.jpg?image=253" class="img-fluid">
                                        </a>

                                    </div>
									
									<div class="row">

                                        <!-- bilder  -->
                                        <a href="/images/bilder-galerie/deutschland-hahnennest.jpg?image=254" data-footer="Energiepark Hahnennest, Germany" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                            <img src="/images/bilder-galerie/deutschland-hahnennest.jpg?image=254" class="img-fluid">
                                        </a>
                                       

                                    </div>

                                </div>
                            </div>
                        </div>

						<div class="row">
                            <div class="col-md-12">
                                <h2>Our Videos</h2>


                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">

                                        <!-- videos  -->
                                        <a href="https://youtu.be/m-WonOgu_sI" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                                            <img src="/images/bilder-galerie/video-poster/video-poster.jpg" class="img-fluid">
                                        </a>
                                        <a href="https://youtu.be/Sdt9Z6DAUnA" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                                            <img src="/images/bilder-galerie/video-poster/video-poster.jpg" class="img-fluid">
                                        </a>
                                        <a href="https://youtu.be/02BLlaynJB0" data-toggle="lightbox" data-gallery="youtubevideos" class="col-sm-4">
                                            <img src="/images/bilder-galerie/video-poster/video-poster.jpg" class="img-fluid">
                                        </a>

                                    </div>
                                </div>
                            </div>
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
