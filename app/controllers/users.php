<?php
    include("./app/database/db.php");

    $errMsg = '';



    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
        $admin = 0;
        $login = trim($_POST['login']);
        $email = trim($_POST['mail']);
        $passF = trim($_POST['pass-first']);
        $passS = trim($_POST['pass-second']);

        if ($login === '' || $email === '' || $passF === '' || $passS === '') {
            $errMsg = 'Не все поля заполнены!';
        } elseif (mb_strlen($login, 'UTF8') < 2) {
            $errMsg = 'Логин должен быть более 2-х символов';
        } elseif ($passF !== $passS) {
            $errMsg = 'Пароли в обоих полях должны совпадать'; 
        } elseif ($passF !== $passS) {
            $errMsg = 'Пароли в обоих полях должны совпадать'; 
        } 
        else {
            $existance = selectOne('users', ['email' => $email]);
            if ($existance['email'] === $email) {
                $errMsg = 'Пользователем с такой почтой уже существует'; 
            } else {
                $pass = password_hash($passF, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass,
                ];     
                $id = insert('users', $post);

                $user = selectOne('users', ['id' => $id]);
                
                userAuth($existance);
            }
        }
    } else {
        $login = '';
        $email = '';
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
        $email = trim($_POST['mail']);
        $pass = trim($_POST['password']);
        
        if ($email === '' || $pass === '') {
            $errMsg = 'Не все поля заполнены!';
        } else {
            $existance = selectOne('users', ['email' => $email]);
            if ($existance && password_verify($pass, $existance['password'])) {
                userAuth($existance);
            } else {
                $errMsg = 'Почта или пароль введены неверно'; 
            }
        }
        
    } else {
        $login = '';
        $email = '';
    }
    
?>