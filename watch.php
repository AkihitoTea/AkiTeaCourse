<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/watch.css">
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
    <div class="topWatch">
        <img class="watchPoster" src="./content/films/1/1h.png" alt="">
        <div class="topRight">
            <h1>Название какого-то NN фильма</h1>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eveniet natus provident quisquam quos, rem velit vero! Aperiam autem, beatae delectus eveniet illum ipsum itaque labore laudantium, libero nesciunt odio pariatur quibusdam ratione, reprehenderit tenetur ut voluptatum? Blanditiis dolores ducimus, ipsum iusto laboriosam nemo nihil nobis quas suscipit, tempora voluptates.</h3>
            <div class="watchStars">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
            </div>
            <div class="bottomRight">
                <h2>Название: Maxwell cat</h2>
                <h2>Год выхода: 2077</h2>
                <h2>Страна: Catland</h2>
                <h2>Категории:
                    <a href="">Кот</a> /
                    <a href="">Крутится</a> /
                    <a href="">loop</a> /
                    <a href="">мем</a> /
                    <a href="">почему?</a>
                </h2>
            </div>

        </div>
        <div class="asLikeIt">
            <img src="./content/films/3/3w.png" alt="">
            <img src="./content/films/6/6w.png" alt="">
            <img src="./content/films/5/5w.png" alt="">
        </div>
    </div>
    <div class="midWatch">
        <video controls="controls" poster="./content/films/1/1w.png">
            <source src="./content/films/1/Maxwell%20the%20Cat%20Theme.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
    </div>
    <div class="bottomWatch">
        <div class="comments">
            <div class="comment">
                <img src="./imgs/user.png" alt="">
                <div class="commText">
                    <h2>user name</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque id laudantium neque possimus quia, sunt. Accusantium doloremque maiores quam.</h3>
                </div>
            </div>
        </div>
        <div class="createComm">
            <textarea name="" id="" cols="30" rows="3"></textarea>
            <div class="commStars">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
                <img src="./imgs/star.png" alt="">
            </div>
            <button>Добавить комментарий</button>
        </div>
    </div>
</wrapper>
</body>
</html>
