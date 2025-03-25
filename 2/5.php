<?php
class SessionManager {
    private $sessionData = [];

    public function setSession($key, $value) {
        $this->sessionData[$key] = $value;
    }

    public function getSession($key) {
        return isset($this->sessionData[$key]) ? $this->sessionData[$key] : null;
    }

    public function destroySession() {
        $this->sessionData = [];
    }
}

// Пример использования
$session = new SessionManager();
$session->setSession("user_id", 1);
echo $session->getSession("user_id"); // 1
$session->destroySession();