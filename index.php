<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/mainPage.css">

    <script src=""></script>
</head>
<body>
<header>
    <script src="./scripts/burgMenu.js"></script>
    <div class="h_s1" onmouseover="menuShow()" onmouseout="menuHide()">
        <img src="./imgs/hamb.png" alt="" class="hambBtn">
        <img src="./imgs/logo.png" alt="" class="headLogo">
    </div>
    <div class="menu" onmouseout="menuHide()" onmouseover="menuShow()">
        <div class="burgList">
            <a href="./index.php">Главная</a>
            <a href="./films.php">Фильмы</a>
            <a href="./serials.php">Сериалы</a>
            <a href="./cabinet.php">Профиль</a>
            <a href="./cabinet.php?scroll=on">Приобретенное</a>
        </div>
    </div>
        <div class="h_s2">
            <input type="search" name="" id="">
            <img src="./imgs/searchBtn.png" alt="">
        </div>
        <div class="h_s3">
            <a href="./cabinet.php"><img src="./imgs/user.png" alt=""></a>
        </div>
</header>
<wrapper>
    <div class="t3Films">
        <h1>Топ 3 фильма</h1>
        <div class="t3fList">
            <img src="./content/films/1/1w.png" alt="">
            <img src="./content/films/2/2w.png" alt="">
            <img src="./content/films/3/3w.png" alt="">
        </div>
    </div>
    <div class="t3Serials">
        <h1>Топ 3 сериала</h1>
        <div class="t3sList">
            <img src="./content/serials/1/1w.png" alt="">
            <img src="./content/serials/2/2w.png" alt="">
            <img src="./content/serials/3/3w.png" alt="">
        </div>
    </div>
    <div class="new">
        <h1>Новинки</h1>
        <div class="nList">
            <img src="./content/serials/9/9h.png" alt="">
            <img src="./content/serials/1/1h.png" alt="">
            <img src="./content/films/7/7h.png" alt="">
            <img src="./content/films/5/5h.png" alt="">
            <img src="./content/serials/4/4h.png" alt="">
            <img src="./content/films/3/3h.png" alt="">
        </div>
    </div>
</wrapper>
</body>
</html>

