<?php
    $string = "ce ne sera pas nécessaire !";

    $page = 2;

    include("header.php");
    include("nav.php");
?>

        <ul>
            <li><?= ucfirst($string); ?></li>
            <li><?= ucwords($string); ?></li>
            <li><?= str_replace(" ", "_", $string) ?></li>
            <li><?= str_word_count($string) . " mot(s) dans la phrase" ?></li>
            <li><?= strlen($string) . " caractères" ?></li>
        </ul>

<?php
    include("footer.php");
?>