<?php
class Counter {
    private $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function getCount() {
        return $this->count;
    }
}

// Пример использования
$counter = new Counter();
$counter->increment();
$counter->increment();
$counter->decrement();
echo $counter->getCount(); // 1