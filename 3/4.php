<?php
interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        return "Подключение к MySQL базе данных...";
    }

    public function query($sql) {
        return "Выполнение запроса MySQL: {$sql}";
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        return "Подключение к PostgreSQL базе данных...";
    }

    public function query($sql) {
        return "Выполнение запроса PostgreSQL: {$sql}";
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        return "Подключение к SQLite базе данных...";
    }

    public function query($sql) {
        return "Выполнение запроса SQLite: {$sql}";
    }
}

// Пример использования
$databases = [
    new MySQLDatabase(),
    new PostgreSQLDatabase(),
    new SQLiteDatabase(),
];

foreach ($databases as $database) {
    echo $database->connect() . "<br>";
    echo $database->query("SELECT * FROM users") . "<br>";
}