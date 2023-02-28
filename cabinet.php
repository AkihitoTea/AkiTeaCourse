<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/cabinet.css">
    <script src=""></script>
</head>
<body>
<header>
    <div class="h_s1">
        <img src="./imgs/hamb.png" alt="" class="hambBtn">
        <img src="./imgs/logo.png" alt="" class="headLogo">
    </div>
    <div class="burgar">
        <div class="burgList">
            <a href="./index.php">Главная</a>
            <a href="./films.php">Фильмы</a>
            <a href="./serials.php">Сериалы</a>
            <a href="./cabinet.php">Профиль</a>
            <a href="./cabinet.php">Приобретенное</a>

        </div>
    </div>
    <div class="h_s2">
        <input type="search" name="" id="">
        <img src="./imgs/searchBtn.png" alt="">
    </div>
    <div class="h_s3">
        <a href=""><img src="./imgs/user.png" alt=""></a>
    </div>
</header>
<wrapper>
<div class="cab__left">
    <div class="avatar">
        <img src="" alt="">
        <label>
        <input type="file" id="profile_pic" name="profile_pic"
               accept=".jpg, .jpeg, .png">
        </label>
    </div>
    <div class="cab__warn">
        <h2>Удалить профиль</h2>
        <h2>Изменить логин</h2>
    </div>
</div>
    <div class="cab__mid">
        <div class="mid__inputs">
            <div class="cab__name">
                <h2>Имя:</h2>
                <input type="text">
            </div>

            <div class="cab__surname">
                <h2>Фамилия:</h2>
                <input type="text">
            </div>

            <div class="cab__site">
                <h2>Сайт:</h2>
                <input type="text">
                </div>
        </div>

        <div class="mid__mail">
            <input type="text">
            <h2>somemail@gmail.com</h2>
        </div>

        <div class="mid__about">
            <div class="mAbout__you">
                <h2>Немного о себе</h2>
                <input type="text">
                <h3>Краткий рассказ о себе — кто вы, чем занимаетесь и прочее...
                    не более 300 символов</h3>
            </div>

            <div class="mAbout_interest">
                <h2>Ваши интересы</h2>
                <input type="text">
                <h3>Перечислите ваши интересы (хобби) через запятую.
                        например: футбол, ролики, рыбалка, вязание</h3>
            </div>
        </div>
    </div>
    <div class="cab__right">
        <div class="cabR__top">
            <h2>Пол</h2>
            <select name="" id="">
                <option>Мужской</option>
                <option>Женский</option>
            </select>

            <h2>Дата рождения</h2>
            <div class="CRT__date">
                <input type="date">
                <input type="checkbox">
                <h2>Не показывать в профиле</h2>
            </div>
        </div>
        <h2>Страна</h2>
        <input type="text">

        <h2>Город</h2>
        <input type="text">

        <h2>Вконтакте</h2>
        <input type="text">

        <h2>Telegram</h2>
        <input type="text">
        <button>Сохранить</button>
    </div>
</wrapper>
</body>
</html>
