<?php
$ch = curl_init('https://repo.packagist.org/packages.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo 'Éxito, bytes recibidos: ' . strlen($response);
}
curl_close($ch);