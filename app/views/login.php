
    <main class="auth">
        <form action="/login" method="post" class="auth__form">
            <h1 class="auth__title">Авторизация</h1>
            <div><?=$data?></div>

            <label for="login" class="auth__label">Введите логин</label>
            <input type="text" placeholder="Введите логин" name="login" id="login" class="auth__input">

            <label for="password" class="auth__label">Введите пароль</label>
            <input type="password" placeholder="Введите пароль" name="password" id="password" class="auth__input">
            
            <input type="submit" value="Войти" class="action-button">
            <a href="/register" class="upload-video__cancel-button">Зарегестрироваться</a>
        </form>
    </main>
