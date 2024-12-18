<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="library/font-awesome/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/pages/glavn.css">
    <link rel="stylesheet" href="styles/settings.css">
    <title>Новая Жизнь | Главная страница</title>
</head>
<body>
   
    <!-- Шапка сайта -->
    <header class="header">
        <!-- Логотип -->
        <div class="container">
            <a href="glavn.html" class="logo"><img src="images/logo1.png" alt="Логотип"><span class="logo-text">NWS</span></a>
        <!-- Меню навигации -->
        <nav>
            <ul>
                <li><a href="#" class="search"><i class="fa fa-search"></i> Поиск</a></li> 
                <li><a href="register.php" class="register"><i class="fa fa-user-plus"></i> Регистрация</a></li> 
                <li><a href="profile.php" class="profile"><i class="fa fa-user"></i> Личный кабинет</a></li> 
                <li><a href="#" class="add"><i class="fa fa-plus-circle"></i> Добавить</a></li> 
                <li><a href="#" class="reviews"><i class="fa fa-comments"></i> Отзывы</a></li>
                <?php 
                    if (array_key_exists('token', $_SESSION)){
                        echo "<li><a href='api/logoutUser.php' class='reviews'>Выход</a></li>";
                    }
                    ?>
            </ul>
        </nav>
    </div>
    </header>

    <!-- Основной контент -->
    <main>
        <!-- Здесь будет основное содержимое страницы -->
        <section class="hero">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке..</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="swiper-slide"><img src="images/img/lev.jpg">
                        <small>Пума</small> 
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>
                        <a href="#">Подробнее</a>
                    </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
            </div>
        </section>
        <section class="short-search">
            <form>
                <label for="type-animal">Вид животного</label>
                <select name="type-animal" id="type-animal">
                    <option value="cat">Кот</option>
                    <option value="dog">Собака</option>
                    <option value="rabbit">Кролик</option>
                    <option value="hamster">Хомяк</option>
                    <option value="parrot">Попугай</option>
                </select>
                <button type="submit">Поиск</button>
            </form>
        </section>
        <section class="facts">
            <div class="container">
                <h2>Факты</h2>
                <ul>
                    <li class="fact-item">
                        <i class="fa fa-paw" aria-hidden="true"></i>
                        <h3>Помогли найти более 500 животных.</h3>
                    </li>
                    <li class="fact-item">
                        <i class="fa fa-ravelry" aria-hidden="true"></i>
                        <h3>Собрали более 1000 отзывов.</h3>
                    </li>
                    <li class="fact-item">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <h3>Поддерживаем более 300 приютов.</h3>
                    </li>
                </ul>
                
            </div>
            
        </section>
        <section class="search"> 
            <div class="container"> 
                <div class="search-item"> 
                    <form> 
                        <label for="place">Район</label> 
                        <select name="place" id="place"> 
                            <option value="0">Правый берег</option> 
                            <option value="1">Левый берег</option> 
                        </select> 
                        <label for="animal">Вид животного</label> 
                        <select name="animal" id="animal"> 
                        <option value="cat">Кот</option> 
                        <option value="dog">Собака</option> 
                        <option value="rabbit">Кролик</option> 
                        <option value="hamster">Хомяк</option> 
                        <option value="parrot">Попугай</option> 
                    </select> 
                        <button type="submit">Поиск</button> 
                    </form> 
                </div> 
                <div class="search-item">
                    <img src="images/img/lev.jpg" alt="">
                </div>
            </div> 
        </section>
        <section class="reviews">
            <div class="container">
                <h2 class="aa">Отзывы</h2>
                <!-- Swiper -->
                <div class="swiper reviews-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo">
                                <h3 class="author-name">Анна</h3>
                                <p class="review-text">Это лучший питомец, которого я когда-либо имела! Он всегда радует меня своим настроением.</p>
                                <span class="review-date">15 ноября 2024</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo">
                                <h3 class="author-name">Сидор</h3>
                                <p class="review-text">Мой кот — это просто находка! Он всегда веселит и приносит радость в дом.</p>
                                <span class="review-date">14 ноября 2024</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo">
                                <h3 class="author-name">Мария Иванова</h3>
                                <p class="review-text">Я не представляю свою жизнь без своей собаки. Она — мой лучший друг и верный компаньон.</p>
                                <span class="review-date">13 ноября 2024</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo">
                                <h3 class="author-name">Владик</h3>
                                <p class="review-text">Очень смешной и  прикольный</p>
                                <span class="review-date">13 ноября 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="sub">
            <div class="container">
                <form> 
                    <label for="email">Почта</label>
                    <input type="email" name="email" id="email" placeholder="example@.com">
                    <input type="checkbox"  name="agree" id="agree">
                    <label for="agree">Согласие на обработку персональных данных</label>
                    
                    <button type="submit">Подписаться</button>
                    
                </form>
            </div>
        </section>
        <!--Подвал сайта-->
        <footer class="footer">
            <div class="container">
                <div class="footer-item">
                    <a class="tel" href="tel:8800553555">8 800 555 35 55</a>
                    <a class="mail" href="mailto:mail@newlife.ru">mailto:mail@newlife.ru</a>
                </div>
                <div class="footer-item">
                    <ul>
                        <li><a href="glavn.html">Главная</a></li>
                        <li><a href="#register">Регистрация</a></li>
                        <li><a href="#login">Авторизация</a></li>
                        <li><a href="#my">Личный кабинет</a></li>
                        <li><a href="#animal">Найдено животное</a></li>
                        <li><a href="#search">Поиск</a></li>

                    </ul>
                </div>
                </div>
            
        </footer>
    </main>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
      },
    });
    var reviewsSwiper = new Swiper(".reviews-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
</html>