<?php

require_once 'funcDabble.php';
require_once 'header.php';

$books = getBooks();
// if (isset($_GET['genre'])){
//     $filteredBooks = filterByGenre($books, $_GET['genre']);
//     echo "<h2>Filtered by: {$_GET['genre']}</h2>";
// } else {
    $filteredBooks = $books;
    echo "<h2>All Books</h2>";
//}

foreach ($filteredBooks as $book){
    displayBook($book);
}

require_once 'footer.php';
?>

