<main class="auth">
        <form action="/register" class="auth__form">
            <h1 class="auth__title">Регистрация</h1>
            <label for="email" class="auth__label">Введите почту</label>
            <input type="email" placeholder="Введите почту" name="email" id="email" class="auth__input">
            <label for="login" class="auth__label">Придумайте логин</label>
            <input type="text" placeholder="Придумайте логин" name="login" id="login" class="auth__input">
            <label for="password" class="auth__label">Придумайте пароль</label>
            <input type="password" placeholder="Придумайте пароль" name="password" id="password" class="auth__input">
            <label for="repeat-password" class="auth__label">Повторите пароль</label>
            <input type="password" placeholder="Повторите пароль" name="repeat-password" id="repeat-password" class="auth__input">
            <input type="submit" value="Войти" class="action-button">
        </form>
    </main>
