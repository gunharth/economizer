<script src="/assets/js/site.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<?php
if ($lang == 'de') {
    include($include_path . 'templates/_cookieconsent-de.php');
} else {
    include($include_path . 'templates/_cookieconsent.php');
}
?>
