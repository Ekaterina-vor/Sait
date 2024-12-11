<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 29237f98aa7934d4b05d491df0c9e55f7c36f471
<?php session_start();
//проверка аутентификакции
include_once('api/db.php');

if (array_key_exists('token', $_SESSION)){
    //если токен есть, проверяем его валидность
    $token = $_SESSION['token'];
    $userId = $db->query("
    SELECT id FROM users WHERE api_token ='$token'
    ")->fetchAll();

    if (empty($userId)) {
        unset($_SESSION['token']);
        header('Location: login.php'); 
    }

}else {
    //если токена нет, редирект на главную
   header('Location: login.php'); 
}


?>
<<<<<<< HEAD
=======
=======
<?php session_start(); ?>
>>>>>>> 597e13c134d716b50237299d684807957d89cd78
>>>>>>> 29237f98aa7934d4b05d491df0c9e55f7c36f471
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts Awesome-->
    <link rel="stylesheet" href="library/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/pages/profile.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая Жизнь | Профиль</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="glavn.php" class="header-link">На главную</a>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info-content">
                    <img src="images/img/lev.jpg" alt="profile" class="info-img">
                </div>
                <div class="info-content">
                    <ul class="info-list">
                        <li><i class="fa fa-phone"></i> Номер телефона: +79999999999</li>
                        <li><i class="fa fa-envelope"></i> Email: example@example.com</li>
                        <li><i class="fa fa-plus-circle"></i> Количество добавленных объявлений: 10</li>
                        <li><i class="fa fa-paw"></i> Количество животных, которые вернулись к хозяевам: 5</li>
                        <li><i class="fa fa-clock-o"></i>Дата регистрации: 01.01.2021</li>
                    </ul>
                    <button class="info-btn">Выйти</button>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <h2>Обьявления</h2>
                <select name="type" id="type">
                    <option value="0">Активно</option>
                    <option value="1">На модернизации</option>
                    <option value="2">Найдено</option>
                    <option value="3">В архиве</option>
                </select>
                <ul>
                    <li>
                        <img src="images/img/lev.jpg" alt="">
                        <small>23.11.2024 | Кировский р-н</small>
                        <h3>Барс</h3>
                        <p>Дополнительная информация</p>
                    </li>
                    <li>
                        <img src="images/img/lev.jpg" alt="">
                        <small>23.11.2024 | Кировский р-н</small>
                        <h3>Барс</h3>
                        <p>Дополнительная информация</p>
                    </li>
                    <li>
                        <img src="images/img/lev.jpg" alt="">
                        <small>23.11.2024 | Кировский р-н</small>
                        <h3>Барс</h3>
                        <p>Дополнительная информация</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>