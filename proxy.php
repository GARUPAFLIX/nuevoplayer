
<?php
// La URL que quieres cargar en el iframe
$url = 'https://a3.115tv.site/cvatt.html?get=Q2FuYWw3&start=true';

// Inicializa una sesión cURL para hacer la solicitud
$ch = curl_init($url);

// Configura cURL para seguir redirecciones y devolver el contenido de la página
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Ejecuta la solicitud
$response = curl_exec($ch);

// Verifica si ocurrió algún error en la solicitud
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Devuelve el contenido de la página sin restricciones de cabeceras
    echo $response;
}

// Cierra la sesión cURL
curl_close($ch);
?>
