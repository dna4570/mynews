<!DOCTYPE html>
<html lang="ja">
<head>
    <title>My Portfolio</title>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="css/normalize.css">
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="images/favicon.ico.png">

    <style>
        .cover {
            background: url(img/bg.png);
            background-size: cover;
        }
        body{
        width:1200px;
        height:500px;
        font-family: "Open Sans", sans-serif;
        background-color:lightgray;
        font-family: verdana;
        margin:auto;
        }
        .container{
            width:1200px;
            margin: 0 auto 40px auto;
            background-color:gray;
            display:block;
            margin:auto;
        }
        .box{
            width:300px;
            height:54px;
            background-color:green;
            float:right;
            display:block;
            margin:auto;
        }
        .header-navigation{
            background-color:black;
            float:left;
            width:1200px;
            height:63px;
            list-style:none;
        }

        .footer{
            width:1200px;
            height:100px;
            background-color:gray;
            color:white;
            clear:both;
            text-align:center;
        }
        ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }
        li{
            float: left;
        }
        li a{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        li a:hover{
        background-color: #111;
        }
        .section {
        width: 1200px;
        background-color:gray;
        }
        .flex{
            display: flex;
            flex-row wrap;
            justify-content: space-around;
        }
        .d-flex{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>
</head>

<body>
<!-- Navigation -->
    <div class="container">
        <a href="index.html"><img src="images/CHECK IT .png" width="50" height="50" alt="山ロゴ" /></a>
        <a href="index.html"><img src="images/Pixel Art.jpg" width="50" height="50" alt="DNAロゴ" /></a>
        <a href="index.html"><img src="images/CHECK IT .png" width="50" height="50" alt="山ロゴ" /></a>

        <div class="box">
            <ul>
                <li><a href="https://nscript916282270.wordpress.com">Login</a></li>
                <li><a href="https://nscript916282270.wordpress.com">Sign Up</a></li>
            </ul>
        </div>
    </div>
    <div class="container mt-5">
        <ul class="nav-nav-tabs">
            <li class="nav_left">
                <a href="localhost:8000/archives"
                class="nav-link">HOME</a></li>
            <li class="nav_center">
                <a href="//localhost:8000/bio/"
                class="nav-link">bio</a></li>
            <li class="nav_center">
                <a href="//localhost:8000/video/"
                class="nav-link">video</a></li>
            <li class="nav_center">
                <a href="//localhost:8000/music/"
                class="nav-link">music</a></li>
            <li class="nav_center">
                <a href="//localhost:8000/shop/" class="nav-link">shop</a></li>
            <li class="nav_right">
                <a href="//localhost:8000/event/" class="nav-link">event</a></li>
        </ul>
    </div>

<!-- Team Memvers -->
    <div class="container">
        <div class="row">
            <div class="col-12 portfile-pictext-center">
                <div class="d-flex">
                    <img src="images/apple-black-coffee-business-461064.jpg" width="320" height="230" alt="pc" class="img-responsive">
                    <img src="images/apple-black-coffee-business-461064.jpg" width="320" height="230" alt="pc" class="img-responsive">
                    <img src="images/apple-black-coffee-business-461064.jpg" width="320" height="230" alt="pc" class="img-responsive">
                </div>
            </div>
        </div>

            <div class="container">
                <h1 class="text-center mb-5"">Welcome to My Website</h1>
                <h1 class="text-center mb-5"">This web site is coming soon</h1>
                <p class="text-center mb-5"">Let's Make something <strong>amazing</strong> with the<em>web!</em></p>
                <p class="text-center mb-5">we are going to have a lot of fun in these vidose learning how to code</p>
            </div>

    </div>
            <section class="py-5">
                <h2 class="text-center mb-5">Features</h2>
                <div class="container">
                    <div class="mb-5" row>
                        <div class="col">
                            <h3 class="text-center mb-5">Awesome</h3>
                            <p class="text-center mb-5">Hello.Hello.Hello..Hello.Hello.Hello.Hello.Hello</p>
                        </div>
                        <div class="col">
                            <img src="img/phone.png" class="w-100 rounded-circle">
                        </div>
                    </div>
                </div>
            <div class="container">
                <h3 class="text-center mb-5">Awesome</h3>
                <p class="text-center mb-5">Hello.Hello.Hello..Hello.Hello.Hello.Hello.Hello</p>
                <img src="img/movie.png" class="w-100 rounded-circle">
            </div>
            </section>

            <section class="bg-light text-center py-5">
                <h2 class="mb-5">Plans</h2>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Plan A</th>
                                <th>Plan B</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AA</td>
                                <td>BB</td>
                            </tr>
                            <tr>
                                <td>AAA</td>
                                <td>BBB</td>
                            </tr>
                            <tr>
                                <td>AAAA</td>
                                <td>BBBB</td>
                            </tr>
                        </tbody>
                    </table>
            </section>

            <section class="py-5">
                <h2 class="mb-5 text-center">How to use</h2>
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#ios" class="nav-link active" data-toggle="tab">iOS</a></li>
                        <li class="nav-item"><a href="#android" class="nav-link" data-toggle="tab">Andoloid</a></li>
                    </ul>
                    <div id="ios">
                        <p>Hello ios.Hello ios.Hello ios.<span class="font-weight-bold text-info">Hello ios.Hello ios.Hello
                                ios.</span>Hello ios.</p>
                    </div>
                    <div id="Android">
                        <p>Hello Android. Hello Android. Hello Android.
                            Hello Android. Hello Android. Hello Android.
                            Hello Android.</p>
                    </div>
                </div>
            </section>
            <section class="bg-light text-center py-5">
                <a href="" class="btn btn-primary btn-lg">Get It Now!</a>
            </section>

    <footer class="text-center text-muted py-4">
        <p>Copyright(C)旭町スタジオ All right Reserved</P>
        <img src="images/foddaer_34.png" width="230" height="45" alt="logo" />
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- 商用だと有料らしい　-->
    <script src="js/wow.min.js"></script>

    <script>new WOW().init();</script>

</body>
</html>
