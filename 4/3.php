<?php
trait Validatable {
    public function validate($data) {
        // Общая логика валидации
        return !empty($data);
    }
}

class RegistrationForm {
    use Validatable;

    public function register($data) {
        if ($this->validate($data)) {
            echo "User registered.";
        } else {
            echo "Invalid registration data.";
        }
    }
}

class LoginForm {
    use Validatable;

    public function login($data) {
        if ($this->validate($data)) {
            echo "User logged in.";
        } else {
            echo "Invalid login data.";
        }
    }
}

// Пример использования
$registrationForm = new RegistrationForm();
$registrationForm->register("John Doe");

$loginForm = new LoginForm();
$loginForm->login("");