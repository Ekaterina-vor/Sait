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
    <!-- Styles -->
    <link rel="stylesheet" href="styles/pages/add.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая Жизнь | Новое объявление</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="glavn.php" class="header-link">На главную</a>
        </div>
    </header>
    <main>
        <section class="add">
            <div class="container">
                <label for="phone">Телефон</label>
                <input type="tel" name="phone" id="phone">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <select name="type" id="type">
                    <option value="cat">Кот</option>
                    <option value="dog">Собака</option>
                </select>
                <label for="photo">Фотография животного</label>
                <input type="file" name="photo" id="photo">
                <label for="desc">Дополнительная информация</label>
                <textarea name="desc" id="desc"></textarea>
                <label for="mark">Клеймо (если есть)</label>
                <input type="text" name="mark" id="mark">
                <select name="place" id="place">
                    <option value="0">Кировский</option>
                    <option value="1">Центр</option>
                </select>
                <label for="date">Дата</label>
                <input type="date" name="date" id="date">
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree">
                    Согласие на обработку персональных данных
                </label>
                <button type="submit">Добавить</button>
            </div>
        </section>
    </main>
</body>
</html>