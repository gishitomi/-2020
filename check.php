<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.php');
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
if ($message == '') {
    $message_text = 'お問い合わせ内容が未記入です。';
}


require_once('function.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム 確認</title>
</head>

<body>
    <div id="check">
        <h1>Confirm</h1>
        <p>以下の内容でよろしいでしょうか。</p>
        <p>お名前: <?php echo h($user_name); ?></p>
        <p>メールアドレス: <?php echo h($e_mail); ?></p>
        <p>お問い合わせ内容: <?php echo h($message); ?></p>
    </div>
    <div class="btns">
        <form method="POST" action="edit.php">
            <input type="hidden" name="user-name" value="<?= h($user_name); ?>">
            <input type="hidden" name="e-mail" value="<?php echo h($e_mail); ?>">
            <input type="hidden" name="message" value="<?php echo h($message); ?>">
            <button type="submit">修正する</button>
        </form>
        <form method="POST" action="thanks.php">
            <input type="hidden" name="user-name" value="<?= h($user_name); ?>">
            <input type="hidden" name="e-mail" value="<?php echo h($e_mail); ?>">
            <input type="hidden" name="message" value="<?php echo h($message); ?>">
            <button type="submit">送信する</button>
        </form>


    </div>
</body>

</html>