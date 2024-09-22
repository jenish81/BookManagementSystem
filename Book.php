<?php
class Book {
    private string $title;
    private string $author;
    private number $year;

    public function __construct($title, $author, $year) {
        if ($title == '' || $author == '' || $year == '') {
            throw new Exception("All fields are required");
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