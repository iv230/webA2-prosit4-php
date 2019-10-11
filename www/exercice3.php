<?php
    $array = array(
        array(
            "marque" => "Audi",
            "modele" => "A1",
            "type" => "Citadine"
        ),
        array(
            "marque" => "Volkswagen",
            "modele" => "Passat",
            "type" => "Berline"
        ),
        array(
            "marque" => "Volkswagen",
            "modele" => "Golf",
            "type" => "Compact"
        ),
        array(
            "marque" => "Mazda",
            "modele" => "CX-5",
            "type" => "SUV"
        )
        );

    $page = 3;

    include("header.php");
    include("nav.php");
?>

<h3>Tableau non trié</h3>

<?php
    echo '<pre>';
    print_r($array);
    echo '</pre>';            
?>

<h3>Tableau trié</h3>

<?php
    sort($array);
    
    foreach($array as $vehicle) {
        foreach($vehicle as $key => $element) {
            echo ucfirst($key) . " : " . $element . ", ";
        }
        echo "<br/>";
    }

    include("footer.php");
?>