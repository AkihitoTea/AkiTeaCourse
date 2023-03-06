<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление контента</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
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
    <script src="./scripts/startSearch.js" defer></script>
        <div class="h_s2">
                <input class="searchInput" type="search" name="search" id="" >
                <button onclick="startSearch()"><img src="./imgs/searchBtn.png" alt=""></button>
        </div>
    <div class="h_s3">
        <a href="./cabinet.php"><img src="./imgs/user.png" alt=""></a>
    </div>
</header>
<wrapper>
</wrapper>
</body>
</html>
