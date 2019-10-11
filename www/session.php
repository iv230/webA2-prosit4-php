<?php
    session_start();

    $users = array(
        array(
            'mail' => "jgallet@viacesi.fr",
            'username' => "Jérémy",
            'password' => "sn"
        ),
        array(
            'mail' => "rcoma@viacesi.fr",
            'username' => "Roland",
            'password' => "rouan"
        ),
        array(
            'mail' => "lkessayan@viacesi.fr",
            'username' => "Lucas",
            'password' => "1234"
        ),
    );

    if ($_GET['logout']) {
        session_destroy();
        $isLogged = false;
    }

    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $isLogged = isset($_SESSION['logged']);

    echo "Is connected? " . ($isLogged ? "true" : "false");
    echo "<br/>Tracking info - Mail = " . $mail . " - Password - " . $password;

    if (!$isLogged) {
        foreach ($users as $user) {
            echo "<br/>Looking for " . $user['username'] . " (" . $user['mail'] . ", ". $user['password'] . ")";

            if ($user['mail'] == $mail && $user['password'] == $password) {
                echo "<br/>Connected!";
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['logged'] = true;
                $_SESSION['failed'] = false;
                $isLogged = true;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice Sessions</title>
    </head>
    <body>

    <?php if (!$isLogged) { ?>

        <h1>Se connecter</h1>

        <form action="" method="post">
            <p>Email : <input type="text" name="mail" /></p>
            <p>Mot de passe : <input type="password" name="password" /></p>
            <input type="submit" />
        </form>

    <?php } else { ?>

        <h1>Vous êtes connecté</h1>

        <p>Bonjour <?= $_SESSION['username'] ?> !</p>
        
        <a href="?logout=true">Se déconnecter</a>
    <?php } ?>

    </body>
</html>
        