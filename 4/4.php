<?php
trait Cacheable {
    private $cache = [];

    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;

    public function getData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData) {
            return $cachedData;
        }

        $data = "Some data for {$key}";
        $this->setCache($key, $data);
        return $data;
    }
}

// Пример использования
$dataProvider = new DataProvider();
echo $dataProvider->getData("key1") . "<br>";
echo $dataProvider->getData("key1") . "<br>"; // Теперь данные кэшированы