<?php
trait Authenticatable {
    public function login($username, $password) {
        // Логика авторизации
        return "User {$username} logged in.";
    }

    public function logout() {
        // Логика выхода
        return "User logged out.";
    }
}

class User {
    use Authenticatable;
}

// Пример использования
$user = new User();
echo $user->login("Alex", "password123") . "<br>";
echo $user->logout() . "<br>";