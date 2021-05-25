<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentCreator</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <aside class="sidebar-menu">
        <div class="sidebar-menu__header">
            <img src="../../img/menu-cut.png" alt="Меню" class="sidebar-menu__menu-icon">
            <img src="../../img/logo.png" alt="Content Creation" class="logo">
        </div>
        <div class="sidebar-menu__user-info">
            <img src="../../img/avatar.png" alt="Аватар" class="sidebar-menu__user-avatar">
            <div class="sidebar-menu__user-wrapper">
                <div class="sidebar-menu__user-name">Cameron Williamson</div>
                <div class="sidebar-menu__subs">1023 подписчиков</div>
                <div class="sidebar-menu__exit-button">Выйти</div>
            </div>
        </div>
        <nav class="nav">
            <a href="" id="home" class="nav__item nav__item_home-pic">Главная</a>
            <a href="" id="subs" class="nav__item">Подписки</a>
            <a href="" id="my-channel" class="nav__item">Мой канал</a>
            <h3 class="nav__title">Библиотека</h3>
            <a href="" id="history" class="nav__item">История</a>
            <a href="" id="channels" class="nav__item">Каналы</a>
            <a href="" id="music" class="nav__item">Музыка</a>
            <h3 class="nav__title">Библиотека</h3>
            <a href="" id="theme" class="nav__item">Светлая тема</a>
            <a href="" id="settings" class="nav__item">Настройки</a>
            <a href="" id="upload" class="nav__item">Загрузить видео</a>
        </nav>
    </aside>

    <main class="main">

        <section class="recommendation">
            <h2 class="section-title">Редакция рекомендует:</h2>
            <div class="recommendation__wrapper">
                <div class="recommendation__video">
                    <img src="../../img/recommendation.png" alt="Видео" class="recommendation__preview">
                    <div class="recommendation__hover">
                        <img src="../../img/playbutton.png" alt="Смотреть" class="recommendation__play-button">
                        <div class="recommendation__view">Смотреть</div>
                    </div>
                </div>
                <div class="recommendation__vide-info">
                    <h4 class="recommendation__title">Как создать сайт за 20 минут</h4>
                    <div class="recommendation__stats">100 тыс. просмотров - неделю назад</div>
                    <div class="recommendation__user">
                        <img src="../../img/recommendation-avatar.png" alt="Аватар" class="recommendation__user-avatar">
                        <div class="recommendation__user-name">Cameron Williamson</div>
                    </div>
                    <p class="recommendation__desc">Сложно сказать, почему интерактивные прототипы набирают
                        популярность среди определенных слоев населения, а значит, должны быть обнародованы.</p>
                </div>
            </div>
        </section>

        <section class="search">
            <img src="../../img/search.png" alt="Искать" class="search__img">
            <input type="search" placeholder="Поиск..." name="search" id="search"  class="search__input">
        </section>

        <section class="categories">
            <h2 class="section-title">Категории:</h2>
            <div class="categories__wrapper">

                <div class="categories__item">
                    <div class="categories__ico">
                        <img src="../../img/music-ico.png" alt="Музыка" class="categories__img">
                    </div>
                    <div class="categories__title">Музыка</div>
                </div>

                <div class="categories__item">
                    <div class="categories__ico">
                        <img src="../../img/film-ico.png" alt="Фильмы" class="categories__img">
                    </div>
                    <div class="categories__title">Фильмы</div>
                </div>

                <div class="categories__item">
                    <div class="categories__ico">
                        <img src="../../img/game-ico.png" alt="Игры" class="categories__img">
                    </div>
                    <div class="categories__title">Игры</div>
                </div>

                <div class="categories__item">
                    <div class="categories__ico">
                        <img src="../../img/film-ico.png" alt="Сериалы" class="categories__img">
                    </div>
                    <div class="categories__title">Сериалы</div>
                </div>

                <div class="categories__item">
                    <div class="categories__ico">
                        <img src="../../img/music-ico.png" alt="Другое" class="categories__img">
                    </div>
                    <div class="categories__title">Другое</div>
                </div>
            </div>
        </section>

        <section class="interesting">
            <h2 class="section-title">Каналы, которые могут Вам понравится:</h2>
            <div class="video-grid">
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
            </div>
            <div class="get-more">Показать больше <img src="../../img/arrow-down.png" alt="V" class="get-more__arrow"></div>
        </section>

        <section class="new">
            <h2 class="section-title">Новое:</h2>
            <div class="video-grid">
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
                <div class="video-item">
                    <img src="../../img/vidos.png" alt="Видео" class="video-item__preview">
                    <div class="video-item__wrapper">
                        <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
                        <div class="video-item__info">
                            <h4 class="video-item__title">Как создать сайт за 20 минут?</h4>
                            <div class="video-item__user-name">Cameron Williamson</div>
                        </div>
                    </div>
                    <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
                </div>
            </div>
            <div class="get-more">Показать больше <img src="../../img/arrow-down.png" alt="V" class="get-more__arrow"></div>
        </section>
    </main>
</body>
</html>