<?php
    session_start();

    if ($_SESSION['isLogged']) {
        $name = $_SESSION['username'];
    } else {
        $name = "Invité";
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

        <p>Bonjour, <?= $name ?></p>