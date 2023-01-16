<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $title = "My first post";
    $author = "Miauri";
    $wordcount = 400;
    include "article-header.php";

    include "useful-tools.php";
    echo ("<br>");
    sayHi("Pratt");
    echo ($feetInMile);

    class Book
    {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }

        function morePagesThan500()
        {
            if ($this->pages >= 500) {
                return "true";
            } else {
                return "false";
            }
        }
    }

    $book1 = new Book("Harry Potter", "Jk Rowling", 500);
    $book2 = new Book("Lord of The Rings", "Tolkien", 700);
    $book3 = new Book("Cupcake", "Lillia", 300);
    // $book1->title = "Harry Potter";
    // $book1->author = "Jk Rowling";
    // $book1->pages = 500;

    echo "<hr> $book1->author, $book1->pages, $book1->title";
    echo "<hr> Is it true that book1 has more than 500 pages?";
    echo $book1->morePagesThan500();


    echo "<hr>";
    class Movie
    {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);  
        }

        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "G" || $rating == "R" || $rating == "NR") {
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "PG-13");
    $avengers->setRating("PG-13");
    echo $avengers->getRating();

    ?>
</body>

</html>