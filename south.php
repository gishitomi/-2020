<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>沖縄紹介サイト（南部）</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/drawermenu.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/area.css">
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
            <li><a href="north.html">北部</a></li>
            <li><a href="center.html">中部</a></li>
            <li><a href="south.html">南部</a></li>
        </ul>
    </nav>
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
                <a href="https://qiita.com/gishitomi" target="_blank">
                    <li>Qiita</li>
                </a>
                <a href="https://note.com/gisho1140" target="_blank">
                    <li>note</li>
                </a>
                <a href="https://shotagishitomi-portfolio-site.herokuapp.com/" target="_blank">
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
                <a href="https://shotagishitomi-portfolio-site.herokuapp.com/portfolio.php" target="_blank">
                    <li>programing</li>
                </a>

            </ul>
        </div>
    </footer>
    <div class="overlay"></div>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.ripples-min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>