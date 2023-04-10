<?php

use Reflection\Book;
use Reflection\Seralizer;

require "Book.php";
require "Seralizer.php";

$book = new Book;
// echo "<pre>";
// print_r($book);
// echo "<pre>";
$book->setTitle('new book');
$book->setAuthor('admin');
$book->setCategory('idk');
$book->setCreatedAt('2023-04-10');
$book->setIsAvaliable(false);
$book->setDescription('testing');

$book1 = new Book;
$book1->setTitle('new book');
$book1->setAuthor('admin');
$book1->setCategory('idk');
$book1->setCreatedAt('2023-04-10');
$book1->setIsAvaliable(false);
$book1->setDescription('testing');

$book2 = new Book;
$book2->setTitle('new book');
$book2->setAuthor('admin');
$book2->setCategory('idk');
$book2->setCreatedAt('2023-04-10');
$book2->setIsAvaliable(false);
$book2->setDescription('testing');

$book3 = new Book;
$book3->setTitle('new book');
$book3->setAuthor('admin');
$book3->setCategory('idk');
$book3->setCreatedAt('2023-04-10');
$book3->setIsAvaliable(false);
$book3->setDescription('testing');

$bookArray= [
    $book,$book1,$book2,$book3,
];
$reflection = new ReflectionClass(Book::class);

echo "<pre>";
var_dump($reflection->getMethods());

$searalizer  = new Seralizer();
$result= $searalizer->serialize($bookArray,'object'); 