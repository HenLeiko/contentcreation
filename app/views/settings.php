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

    <main class="settings">
        <form action="" method="post" class="settings__form">
            <div class="settings__avatar-settings">
                <img src="../../img/avatar.png" alt="Аватар" class="settings__avatar-img">
                <div class="settings__avatar-wrapper">
                    <label for="uploadavatar" class="settings__avatar-label">Изменить изображение</label>
                    <input type="file" name="uploadavatar" id="uploadavatar" class="settings__avatar-input">
                    <p class="settings__prompt">Поддерживаемые форматы: PNG, JPG, GIF</p>
                </div>
            </div>
            <div class="settings__main">
                <label for="resetname" class="settings__label">Изменить имя профиля</label>
                <input type="text" placeholder="Cameron Williamson" name="resetname" id="resetname" class="settings__input">
                <label for="information" class="settings__label">Контактная информация</label>
                <textarea name="information" placeholder="Напишите что-нибудь о себе..." id="information" cols="30" rows="10" class="settings__textarea"></textarea>
                <label for="oldpassword" class="settings__label">Смена пароля</label>
                <input type="text" placeholder="Старый пароль" name="oldpassword" id="oldpassword" class="settings__input">
                <input type="text" placeholder="Новый пароль" name="newpassword" id="newpassword" class="settings__input">
                <input type="submit" value="Подтвердить" class="action-button">
            </div>
        </form>
    </main>

</body>
</html>