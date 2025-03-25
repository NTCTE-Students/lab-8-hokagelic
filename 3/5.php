<?php
class Order {
    public function calculateTotal() {
        return 0; // Общая стоимость заказа
    }
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        return 100; // стоимость онлайн заказа
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        return 150; // стоимость заказа в магазине
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        return 120; // стоимость телефонного заказа
    }
}

// Пример использования
$orders = [
    new OnlineOrder(),
    new StoreOrder(),
    new TelephoneOrder(),
];

foreach ($orders as $order) {
    echo "Total: " . $order->calculateTotal() . "<br>";
}