<?php
class Payment {
    public function process() {
        // Общая логика платежей
    }
}

class CreditCardPayment extends Payment {
    public function process() {
        return "Processing credit card payment...";
    }
}

class PayPalPayment extends Payment {
    public function process() {
        return "Processing PayPal payment...";
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        return "Processing bank transfer payment...";
    }
}

// Пример использования
$payments = [
    new CreditCardPayment(),
    new PayPalPayment(),
    new BankTransferPayment(),
];

foreach ($payments as $payment) {
    echo $payment->process() . "<br>";
}