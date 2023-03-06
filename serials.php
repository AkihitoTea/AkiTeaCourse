<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сериалы</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/serials.css">
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
    <script src="./scripts/completeSearch.js" defer></script>
        <div class="h_s2">
                <input class="searchInput" type="search" name="search" id="" >
                <button onclick="startSearch()"><img src="./imgs/searchBtn.png" alt=""></button>
        </div>
    <div class="h_s3">
        <a href="./cabinet.php"><img src="./imgs/user.png" alt=""></a>
    </div>
</header>
<wrapper>
    <div class="firstSection">
        <div class="t5Serials">
            <img src="./content/serials/1/1h.png" alt="">
            <img src="./content/serials/2/2h.png" alt="">
            <img src="./content/serials/3/3h.png" alt="">
            <img src="./content/serials/4/4h.png" alt="">
            <img src="./content/serials/5/5h.png" alt="">
            <img src="./content/serials/6/6h.png" alt="">
        </div>
    </div>
    <div class="secondSection">
        <div class="ssTop">
            <input type="text">
            <div class="ssFilters">
                <button>1 filter</button>
                <button>2 filter</button>
                <button>3 filter</button>
                <button>4 filter</button>
                <button>5 filter</button>
            </div>
        </div>
        <div class="ssBottom">
            <div class="ssLine">
                <img src="./content/serials/1/1h.png" alt="">
                <img src="./content/serials/2/2h.png" alt="">
                <img src="./content/serials/3/3h.png" alt="">
                <img src="./content/serials/4/4h.png" alt="">
                <img src="./content/serials/5/5h.png" alt="">
            </div>
            <div class="ssLine">
                <img src="./content/serials/1/1h.png" alt="">
                <img src="./content/serials/2/2h.png" alt="">
                <img src="./content/serials/3/3h.png" alt="">
                <img src="./content/serials/4/4h.png" alt="">
                <img src="./content/serials/5/5h.png" alt="">
            </div>
        </div>
    </div>
</wrapper>
</body>
</html>

