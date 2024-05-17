<?php
class Book {
    private $availableCopies;

    private $title;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No more copies available";
        }
    }

    public function getAvailableCopies() {
        //   return $this->availableCopies;
        return "Available Copies of '" . $this->title . "': " . $this->availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook($book) {
        $book->borrowBook();
    }

    public function getName() {
        return $this->name;
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

$book1 = new Book('The Great Gatsby', '5');
$book2 = new Book('To Kill a Mockingbird', '3');

$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

$member1->borrowBook($book1);
$member2->borrowBook($book2);

// $member1->returnBook($book1);
// $member2->returnBook($book2);

echo $book1->getAvailableCopies() . "\n";
echo $book2->getAvailableCopies();
