<?php
require_once('function.php');
//名前を保持
$user_name = $_POST['user-name'];
//メールアドレス
$e_mail = $_POST['e-mail'];
//お問い合わせ内容
$message = $_POST['message'];
require_once('function.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コンタクトフォーム</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/drawermenu.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="header">
        <div v-bind:class="mainPageWrapper">
            <header v-bind:class="mainPage">
                <div class="top-page-wrapper">
                    <a href="./index.html">
                        <div class="top-page-img">
                            <img src="./img/hibiscus-787030_1280.jpg" alt="">
                        </div>
                    </a>
                    <div class="top-page">
                        <a href="./index.php">
                            <p>地元民が選ぶ</p>
                            <h1>オススメスポット</h1>
                            <p>沖縄の紹介サイト</p>
                        </a>
                    </div>
                </div>
                <ul class="header-list">
                    <li v-bind:class="border"><a href="./index.php">TOP</a></li>
                    <li v-bind:class="border"><a href="./north.php">北部</a></li>
                    <li v-bind:class="border"><a href="./center.php">中部</a></li>
                    <li v-bind:class="border"><a href="./south.php">南部</a></li>
                    <li v-bind:class="border"><a href="./contact.php">お問い合わせ</a></li>
                </ul>
                <p v-bind:class="text" v-if="time >= 18">
                    {{evening}}、見てくれてありがとうございます
                </p>
                <p v-bind:class="text" v-else-if="time >= 12">
                    {{afternoon}}、見てくれてありがとうございます
                </p>
                <p v-bind:class="text" v-else-if="time >= 6">
                    {{morning}}。見てくれてありがとうございます
                </p>
                <p v-bind:class="text" v-else>
                    {{evening}}、見てくれてありがとうございます
                </p>
            </header>
        </div>
    </div>
    <div class="ham">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav class="side-menu">
        <ul>
            <li id="side-guide">エリア別で見る<br>オススメ観光スポット</li>
            <li><a href="north.php">北部</a></li>
            <li><a href="center.php">中部</a></li>
            <li><a href="south.php">南部</a></li>
        </ul>
    </nav>
    <div class="contact-form" id="contact">
        <h1>Contact form</h1>
        <p>
            このWebサイトについて、または私について何かお聞きしたいことがありましたら、こちらからお願いいたします。
        </p>
        <form v-on:submit="checkError" action="check.php" method="POST">
            <table>
                <tr>
                    <td class="user-label"><label for="user-name">名前</label></td>
                    <td class="user-data"><input type="text" id="user-name" name="user-name" placeholder="名前を入力してください" v-bind="userName" value="<?php echo $user_name; ?>">
                        <p v-if="isName" v-bind:style="danger">※名前{{errorMessage}}</p>
                        <p><?php echo $user_name; ?></p>
                    </td>
                </tr>
                <tr>
                    <td class="user-label"><label for="e-mail">メールアドレス</label></td>
                    <td class="user-data">
                        <input type="text" id="e-mail" name="e-mail" placeholder="例) abc@okinawa.co.jp" v-model="Email">
                        <br>
                        <p v-if="isEmail" v-bind:style="danger">※メールアドレス{{errorMessage}}</p>
                        <br>
                        <p>
                            ▼確認のため、再度メールアドレスの入力をお願いいたします。
                        </p>
                        <input type="text" id="e-mail" name="e-mail" placeholder="例) abc@okinawa.co.jp" v-model="checkEmail">
                        <p v-if="checkEmail !== Email" v-bind:style="danger">メールアドレスが一致しません。</p>
                    </td>
                </tr>
                <tr>
                    <td class="user-label"><label for="message">お問い合わせ内容</label></td>
                    <td class="user-data">
                        <textarea name="message" id="message" cols="70" rows="10" v-model="contact"></textarea>
                        <p v-if="isContact" v-bind:style="danger">※お問い合わせ内容{{errorMessage}}</p>
                    </td>
                </tr>
            </table>
            <button class="btn-flat-border" name="register" type="submit" v-on:click="checkError">入力内容の確認画面へ</button>
        </form>
        <div>
            <br><br>
            {{$data}}
            <br>
            {{errorCounters.length}}
        </div>
    </div>
    <footer>
        <div class="profile">
            <div class="img-wrapper">
                <img src="./img/IMG_3755 3.jpeg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#"> <i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#"> <i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
            </div>
            <article>
                <h5>Shota Gishotomi</h5>
                <p>フロントエンドを現在勉強中</p>
            </article>
        </div>
        <div class="category">
            <ul class="blogs">

                <h3>BLOG</h3>
                <a href="https://qiita.com/gishitomi">
                    <li>Qiita</li>
                </a>
                <a href="https://note.com/gisho1140">
                    <li>note</li>
                </a>
                <a href="https://shotagishitomi-portfolio-site.herokuapp.com/">
                    <li>About me</li>
                </a>
            </ul>
            <div class="line"></div>
            <ul class="blogs">
                <h3>Doing</h3>
                <a href="">
                    <li>
                        machine learning
                    </li>
                </a>
                <a href="">
                    <li>programing</li>
                </a>

            </ul>
        </div>
    </footer>
    <div class="overlay"></div>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.ripples-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="./js/app.js"></script>
    <script src="./js/vue-app.js"></script>
    <script src="./js/contact.js"></script>
</body>

</html>