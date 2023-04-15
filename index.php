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
