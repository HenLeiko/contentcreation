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
            <textarea name="information" placeholder="Напишите что-нибудь о себе..." id="information" cols="30"
                rows="10" class="settings__textarea"></textarea>
            <label for="oldpassword" class="settings__label">Смена пароля</label>
            <input type="text" placeholder="Старый пароль" name="oldpassword" id="oldpassword" class="settings__input">
            <input type="text" placeholder="Новый пароль" name="newpassword" id="newpassword" class="settings__input">
            <input type="submit" value="Подтвердить" class="action-button">
        </div>
    </form>
</main>