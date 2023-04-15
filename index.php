<?php
class Movie
{
    public $title;
    public $type;
    public $year;
    function __construct($title, $type, $year)
    {
        $this->title = $title;
        $this->type = $type;
        $this->year = $year;
    }

    function get_title()
    {
        return $this->title;
    }
}
$movie1 = new Movie("Il Signore degli Anelli", "Fantasy", "2001");
$movie2 = new Movie("The Departed - Il bene e il male", "Thriller", "2006");
$movie3 = new Movie("Star Wars - Una nuova speranza", "Fantasy", "1977");

echo "Title: " . $movie1->get_title() . "<br>";
echo "Director: " . $movie1->type . "<br>";
echo "Year: " . $movie1->year . "<br><hr>";

echo "Title: " . $movie2->get_title() . "<br>";
echo "Director: " . $movie2->type . "<br>";
echo "Year: " . $movie2->year . "<br><hr>";

echo "Title: " . $movie3->get_title() . "<br>";
echo "Director: " . $movie3->type . "<br>";
echo "Year: " . $movie3->year . "<br>";