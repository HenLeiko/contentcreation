<?php


//namespace app\models;

use app\core\Model;

class LoginModel extends Model
{
    public function login($login, $password)
    {
        if (empty($login))
        {
            return 'Введите логин';
        }

        if (empty($password))
        {
            return 'Введите пароль';
        }

        $user = R::findOne('users', 'login = ?', [$login]);

        if (!$user)
        {
            return 'Не верный логин или пароль';
        }

        if ($user->password != $this->passHash($password))
        {
            return 'Не верный логин или пароль';
        }

        $_SESSION['id'] = $user->id;
        $_SESSION['login'] = $user->login;
        $_SESSION['subs'] = $user->subs;
        header('Location: /');

    }

    public function findingUser($login)
    {
        $user = R::findOne('users', 'login = ?', [$login]);
        return $user;
    }

    public function passHash($pass) {
        return md5($pass);
    }
}