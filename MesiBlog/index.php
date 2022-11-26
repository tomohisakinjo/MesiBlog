<?php
require_once('phps/blog.php');
$blog = new Blog();
$blogData = $blog->getAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タッちゃんの飯ブログ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- グーグルフォント -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <header class="header">      <!--　ヘッダー　-->
            <div class="header-inner">

                <h1 class="header-title">  <!-- ヘッダータイトル -->
                    <a href="#">Tachan's Blog</a>
                </h1>

                <nav class="main-nav">   <!-- メインナビ -->
                  <li><a href="https://www.instagram.com/mesilog_okinawa/">Instagram</a></li>
                  <li><a href="#">facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                </nav>

                <nav class="hamburger-nav nav" id="js-nav">     <!--ハンバーガーナビ -->
                <h1 class="ham-title"><a href="index.html">Tachan's Blog</a></h1>
                <ul class="ham-nav-items">
                    <li class="ham-nav-item"><a href="">Main Blog</a></li>
                    <li class="ham-nav-item"><a href="">Map</a></li>
                    <li class="ham-nav-item"><a href="">Recommendation</a></li>
                </ul>
                </nav>
                
                <button class="header-hamburger hamburger" id="js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
            </div>
        </header>
        
        <main class="main"><!-- メイン -->
            <h1 class="main-title">My Blog</h1>

            <div class="mains">
                <?php foreach($blogData as $colum): ?>
                <div class="article">
                    <h1 class="sub-title"><?php echo $colum['title']?></h1>
                    <div class="sub">
                        <p class="post-date"><?php echo $colum['post_at']?></p>
                        <p class="category"><?php echo $blog->setCategoryName($colum['category'])?></p>

                        <div>
                            <p class="main-content"><?php echo $colum['content']?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </main>

        <footer  class="footer">     <!--フッター-->
            <h1 class="footer-title">SNS</h1>   <!--フッタータイトル-->

            <ul class="footer-items">     <!--snsアイコン-->
                <li class="footer-item"><a href="https://www.instagram.com/mesilog_okinawa/"><img class="icon" src="img/I-logo.png" alt="インスタ"></a></li>
                <li class="footer-item"><a href=""><img class="icon" src="img/f-logo.png" alt="フェイスブック"></a></li>
                <li class="footer-item"><a href=""><img class="icon" src="img/T-logo.png" alt=""></a></li>
            </ul>

            <ul class="footer-items">
                <li class="footer-item2"><a href="index.html">ホーム</a></li>
                <li class="footer-item2"><a href="">プロフィール</a></li>
                <li class="footer-item2"><a href="">お問合せ</a></li>
            </ul>

            <p class="copy-right">&copy; 2022 mesilog_okinawa</p>
        </footer>

        
    </div>
    <!-- jqの設定 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jQ/main.js"></script>
</body>
</html>