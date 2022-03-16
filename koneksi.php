<?php
$conn_str = "host=kandula.db.elephantsql.com " .
    "port=5432 " .
    "user=zhzvcbjc " .
    "dbname=zhzvcbjc " .
    "password=cTVL26P71Byx40yZpD4RPIeAp9ajSfHj";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?> 