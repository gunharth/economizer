<?php // page settings
$lang = 'en';
$title = "Home";
$description = "";
$include_path = "../";
$main_image = "economizer-index.jpg";
$main_nav = "";
$nav = "";
?>
<?php include($include_path . 'templates/_head.php'); ?>

<body id="index">
    <script>
        // lang detection
        // function setCookie(name, value, days) {
        //     var expires = "";
        //     if (days) {
        //         var date = new Date();
        //         date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        //         expires = "; expires=" + date.toGMTString();
        //     }
        //     document.cookie = name + "=" + value + expires + "; path=/";
        // }

        // function getCookie(name) {
        //     var nameEQ = name + "=";
        //     var ca = document.cookie.split(";");
        //     for (var i = 0; i < ca.length; i++) {
        //         var c = ca[i];
        //         while (c[0] == " ") c = c.substring(1, c.length);
        //         if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        //     }
        //     return null;
        // }
        // if (navigator.language.startsWith("de")) {
        //     var cookie = getCookie("browserlang");
        //     if (!cookie) {
        //         setCookie("browserlang", "de");
        //         document.location.href = "/de";
        //     }
        // }
    </script>

    <?php include($include_path . 'templates/_nav-'.$lang.'.php'); ?>

    <div class="header-image" style="background:url(/images/<?php echo $main_image; ?>) no-repeat center center; background-size:cover;">
    </div>

    <main>
        <h1>Change<br />
            Biogas<br />
            Generation
        </h1>
    </main>
    <?php
    include($include_path . 'templates/_footer-'.$lang.'.php');
    include($include_path . 'templates/_scripts.php');
    ?>
</body>

</html>
