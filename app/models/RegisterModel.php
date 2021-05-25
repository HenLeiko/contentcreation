<?php


//namespace app\models;

use app\core\Model;
class RegisterModel extends Model
{
    protected $email;
    protected $login;
    protected $password;
    protected $repeatPassword;

    public function insert($email, $login, $password, $repeatPassword)
    {
        $user = R::dispense('users');
        $user->email = $email;
        $user->login = $login;
        $user->password = md5($password);
        $user->subs = 0;
        $_SESSION['subs'] = 0;
        $_SESSION['login'] = $login;
        R::store($user);
        $_SESSION['id'] = $user->id;
//        header('Location: /');
    }
}