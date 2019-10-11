<?php
    session_start();

    if ($_SESSION['logged'] == true) {
        $name = $_SESSION['username'];
        $url = "./logout.php";
        $action = "déconnecter";
    } else {
        $name = "Invité";
        $url = "./session.php";
        $action = "connecter";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice <?= $page ?></title>
    </head>
    <body>
        <h1>Exercice <?= $page ?></h1>

        <p>Bonjour, <?= $name ?>. <a href="<?= $url ?>">Cliquez ici</a> pour vous <?= $action ?>.</p>