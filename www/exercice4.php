<?php
    $asked = "";
    $display = "";

    switch ($_POST['format']) {
        case 'html':
            $asked = "HTML";
            $display = "Marque : " . $_POST['marque'] . "<br/>Modèle : " . $_POST['modele'] . "<br/>Type : " . $_POST['type'];
            break;
        case 'csv':
            $asked = "CSV";
            $display = $_POST['marque'] . "," . $_POST['modele'] . "," . $_POST['type'];
            break;
        case 'json':
            $asked = "JSON";
            $display = "{<br/>\t'marque': '" . $_POST['marque'] . "',<br/>\t'modele': '" . $_POST['modele'] . "',<br/>\t'type' : '" . $_POST['type'] . "'<br/>}";
            break;
        default:
            $asked = "none";
    };

    $page = 4;

    include("header.php");
    include("nav.php");
?>

<h3>Formulaire d'entrée</h3>

<form method="post" action="">
    <p>Marque : <input name="marque" /></p>
    <p>Modèle : <input name="modele" /></p>
    <p>Type : <input name="type" /></p>
    <p>Format : <select name="format">
        <option value="html">HTML</option>
        <option value="csv">CSV</option>
        <option value="json">json</option>
    </select></p>
    <p><input type="submit" /></p>
</form>

<?php if ($asked != "none") { ?>

<h3>Données affichées</h3>

<p>Format demandé : <?= $asked ?></p>
<p><?= $display ?>

<?php
    } 
    include("footer.php");
?>