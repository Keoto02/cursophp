<?php
    $name = "Carlos";
    $isDev = true;
    $age = 1;
    //$newAge = $age . "1";

    $isOld = $age > 30;
    
    //define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

    /*
    $output = "Hola $name, con una edad de $age años";

    const NOMBRE = 'CARLOS';

   */

    $outputAge = match (true){
        $age < 2 => "Eres un bebé, $name 👶",
        $age < 10 => "Eres un niño, $name  👦",
        $age < 18 => "Eres una adolescente, $name 🏐",
        $age < 30 => "Eres un adulto joven, $name 🧑",
        default => "Eres un mayor, $name ☠️"
    };

    $bestLanguages = ["PHP", "JavaScript", "Pyton", 1, 2];
    $bestLanguages[] = "Java";
    $bestLanguages[] = "TypeScript";

    $person = [
        "name" => "Carlos",
        "age" => 10,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];

    $person["name"] = "David";
    $person["languages"][] = "Java";

?>

<h3>
    El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3>   

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>


<?php if($isOld) : ?>
    <h2>Eres viejo, Lo siento</h2>
<?php elseif($isDev) : ?>
    <h2>No eres viejo, pero eres Dev. Estas jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>

<h1>
    <?= $outputAge ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>