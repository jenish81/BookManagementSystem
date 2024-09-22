<?php
class Book {
    private $title;
    private $author;
    private $year;

    public function __construct($title, $author, $year) {
        if (empty($title) || empty($author) || !is_numeric($year) || $year < 0) {
            throw new Exception("Invalid data.");
        }
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }
}
?>