<?php
$redirect_url = 'https://5e66f7uwtavwqla0vkyp4ayown.hop.clickbank.net';
$file = 'clicks_count.txt';
$count = 0;

if (file_exists($file)) {
    $count = (int) file_get_contents($file);
}
$count++;

// Guardamos el nuevo contador
file_put_contents($file, $count);

// Redirigimos al usuario a la página de venta
header("Location: " . $redirect_url);
exit();
?>