<?php 
if($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.html');
}

//名前を保持
$user_name = $_POST['user-name'];
//メールアドレス
$e_mail = $_POST['e-mail'];
//お問い合わせ内容
$message = $_POST['message'];

//入力内容のチェック
if ($user_name == '' || $e_mail == '' || $message == '') {
    $confirm_text = '未記入事項があります。';
} else {
    $confirm_text = 'こちらの内容でよろしいですか。';
}
if ($user_name == '') {
    $user_name_text = '名前が未記入です。';
} 
if ($e_mail == '') {
    $e_mail_text = 'メールアドレスが未記入です。';
}
if ($massage == '') {
    $message_text = 'お問い合わせ内容が未記入です。';
}


?>

