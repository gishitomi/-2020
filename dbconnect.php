<?php
$dbname = "okinawa_db";
$host = "localhost";
$user = 'root';
$password = '';
$dbn = "mysql:dbname=$dbname;host=$host;charset=utf8";
try {
    $db = new PDO($dbn, $user, $password);

} catch(PDOException $e) {
    echo '接続エラーー:' . $e->getMessage();
}

?>
