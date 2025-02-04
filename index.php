<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de curl; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*  Ejecutar la petición  
    y guardar el resultado
*/
$result = curl_exec($ch);

/*
Una alternativa más facil sería utilizar file_get_contents
$result = file_get_contents(API_URL); 
Si solo quieres hacer un get de una API
*/

$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <title>La próxima pelicula de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>"  width= "400" alt="" style="border-radius: 25px"/>
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content:  center;
        text-align: center;
    }



    img {
        margin: 0 auto;
    }
</style>