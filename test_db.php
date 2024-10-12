<?php
$conn = new PDO('mysql:host=127.0.0.1;dbname=shop', 'admin', 'admin');
if($conn) {
    echo "Підключення успішне!";
} else {
    echo "Підключення не вдалося.";
}
?>
