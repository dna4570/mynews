<!DOCTYPE html>
<html lang="ja">
<head>
    <title>My Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="images/favicon.ico.png">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-title-area">
            <a href="index.html"><img src="images/CHECK IT .png" width="50" height="50" alt="山ロゴ" /></a>
            <a href="index.html"><img src="images/Pixel Art.jpg" width="50" height="50" alt="N-Scriptロゴ" /></a>
            <a href="index.html"><img src="images/CHECK IT .png" width="50" height="50" alt="山ロゴ" /></a>
            <div class="box">
                <ul>
                    <li><a href="https://nscript916282270.wordpress.com">Login</a></li>
                    <li><a href="https://nscript916282270.wordpress.com">Sign Up</a></li>
                </ul>
            </div>
            </div>
        </div>
    </header>

    <main>
        <section>
        <ul class="header-navigation">
            <li class="nav_left"><a href="index.html">HOME</a></li>
            <li class="nav_center"><a href="bio.html">BIO</a></li>
            <li class="nav_center"><a href="video.html">VIDEO</a></li>
            <li class="nav_center"><a href="music.html">MUSIC</a></li>
            <li class="nav_center"><a href="shop.html">SHOP</a></li>
            <li class="nav_right"><a href="event.html">EVENT</a></li>
        </ul>

        <div class="container">
            <h1>IMAGENATION</h1>
            <a href="" class="btn btn-primary btn-lg">Get It Now!</a>
        </div>
        <div class="section">
            <h2 class="text-center mb-5">SHOP</h2>
                <fieldset>
                    <p class="shop_img"><img src="images/abstract-business-code-270348.jpg" <img src="img/movie.png" class="w-100 rounded-circle"></p>
                    <img src="img/movie.png" class="w-100 rounded-circle">
                </fieldset>
                <form method="post" action="http://wtk.me/mcd13/shop.php">
                <fieldset>
                    <legend> ご注文の商品</legend>
                    <p>お名前：<input name="i-name" id="i-name" value="" type="text"></p>
                    <p>ご連絡先：<input name="mail" id="mail" value="" type="text"></p>
                    <p>phone-number：<input name="mail" id="mail" value="" type="text"></p>
                    <p>メルアド：<input name="mail" id="mail" value="" type="text"></p>
                        <div>
                            <label for="room_name">注文したい商品</label>
                            <select id="room_name" name="room_name">
                                <option selected>商品を選んでください</option>
                                <option>Computer-Sience_foodparka</option>
                                <option>N-Script_eco-bag </option>
                                <option>N-Script_T-shats</option>
                            </select>
                        </div>
                        <label>
                            <storong>T-shirts:</storong>
                                <select class=dorpdown>
                                    <option>S</opthion>
                                    <option>M</opthion>
                                    <option>L</opthion>
                                </select>
                        </label>
                        <div>配送方法：
                            <input type="radio" name="number" id="n1" value="1" /><label for="n1">着払い</label>
                            <input type="radio" name="number" id="n1" value="1" /><label for="n1">銀行振込</label>
                        </div>
                        <div>
                            <label for="comment">•ご意見•</label><br />
                            <textarea name="coment" id="coment" cols="55" rows="10"></textarea>
                        </div>
                    <input id="binid2" type="button"
                    value="Button 3">
                </fieldset>
            </form>
        </div>
        </div>
    </div>
</main>

<footer class="text-center text-muted py-4">
    <p>Copyright &copy;2019 旭町スタジオ All right reserved</p>
    <img src="images/foddaer_34.png" width="230" height="45" alt="logo" />
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    </body>
</html>
