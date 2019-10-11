<?php
    $page = 1;

    include("header.php");
    include("nav.php");

    $version = phpversion();
    $OS = php_uname("s") . " " . php_uname("r");
    $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);;

    echo "<p>PHP <strong>$version</strong>, under <strong>$OS</strong> with locale <strong>$locale</strong>.</p>";

    include("footer.php");
?>