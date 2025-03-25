<?php
trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setTimestamps() {
        $this->createdAt = date("Y-m-d H:i:s");
        $this->updatedAt = $this->createdAt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function update() {
        $this->updatedAt = date("Y-m-d H:i:s");
    }
}

class Post {
    use Timestampable;

    public function __construct() {
        $this->setTimestamps();
    }

    public function publish() {
        echo "Post published at " . $this->getCreatedAt() . "<br>";
    }
}

// Пример использования
$post = new Post();
$post->publish();