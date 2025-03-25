<?php
class User {
    private $username;
    private $passwordHash;

    public function setPassword($password) {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

// Пример использования
$user = new User();
$user->setUsername("john_doe");
$user->setPassword("securepassword");
echo $user->getUsername(); // john_doe
echo $user->checkPassword("securepassword") ? "Password is correct." : "Invalid password."; // Password is correct.