<?php
function getBooks(){
    return[
        [
            "title" => "Institute",
            "author" => "Stephen King",
            "genre" => "horror",
            "rating" => 8.8
        ],[
            "title" => "Fourth Wing",
            "author" => "Rebecca Yarros",
            "genre" => "sci-fi",
            "rating" => 9.2
        ],[
            "title" => "The Hunger Games",
            "author" => "Suzanne Collins",
            "genre" => "sci-fi",
            "rating" => 8.9
        ],[
            "title" => "The Fault In Our Stars",
            "author" => "John Green",
            "genre" => "romance",
            "rating" => 7.9
        ],[
            "title" => "The Love Hypothesis",
            "author" => "Ali Hazelwood",
            "genre" => "romance",
            "rating" => 7.5
        ]
    ];
}

// function filterByGenre($books, $genre){
//     return array_filter($books, function($book) use ($genre){
//         return strtolower($book['genre']) === strtolower($genre);
//     });
// }

function displayBook($book){
    echo "<div class='bookCard'>";
    echo "<h3>{$book['title']}</h3>";
    echo "<p>Year: {$book['author']}</p>";
    echo "<p>Year: {$book['genre']}</p>";
    echo "<p>Year: {$book['rating']}/10</p>";
    echo "</div>";
}

?>