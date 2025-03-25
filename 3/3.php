<?php
class Document {
    public function save() {
        // Общая логика сохранения документа
    }
}

class PDFDocument extends Document {
    public function save() {
        return "Сохранение в формате PDF...";
    }
}

class WordDocument extends Document {
    public function save() {
        return "Сохранение в формате Word...";
    }
}

class ExcelDocument extends Document {
    public function save() {
        return "Сохранение в формате Excel...";
    }
}

// Пример использования
$documents = [
    new PDFDocument(),
    new WordDocument(),
    new ExcelDocument(),
];

foreach ($documents as $document) {
    echo $document->save() . "<br>";
}