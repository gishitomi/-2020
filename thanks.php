<?php 
if($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.php');
}
require_once('function.php');
require_once('dbconnect.php');

//名前を保持
$user_name = $_POST['user-name'];
//メールアドレス
$e_mail = $_POST['e-mail'];
//お問い合わせ内容
$message = $_POST['message'];

$stmt = $db->prepare('INSERT INTO surveys (username, email, content) VALUES (?, ?, ?)');
$stmt->execute([$user_name, $e_mail, $message]);
// shell_exec("sh notify_slack.sh $nickname $email $content $url");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>無事送信されました。</h1>
</body>
</html>