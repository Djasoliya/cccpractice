<?php
class book{
    public $title;
    public $author;
    public function bookInfo(){
        echo "Title : $this->title <br> Author : $this->author <br>";
    }
}
class library{
    private $books = [];
    public function addbook(book $book){
        $this->books[] = $book;
    }
    public function allBooks(){
        foreach($this->books as $book){
            $book->bookInfo();
        }
    }
}
$book1 = new book();
$book1->title = "The Catcher in the Rye";
$book1->author = "J.D. Salinger";

$book2 = new book();
$book2->title = "To Kill a Mockingbird";
$book2->author = "Harper Lee";

$library = new library();
$library->addbook($book1);
$library->addbook($book2);
$library->allBooks();
?>