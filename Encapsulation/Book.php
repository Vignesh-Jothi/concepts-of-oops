<?php
// This Class keyword used to create a class in php.
Class Book{
    // Using access Specifiers we can set the visibility of the properties. 
    // I used public like this we have private and protected.
    public $title;
    public $author;
    public $price;

    /**
     * This setProp method / function used to set the properties.
     * @param mixed $title
     * @param mixed $author
     * @param mixed $price
     * @return void
     */
    public function setProp($title,$author,$price){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    /**
     * Return the string value getProp
     * @return string
     */
    public function getProp(){
        return $this->title." ".$this->author." ".$this->price;
    }
}

// The new keyword used to set the object for a class.
$book = new Book();

// Using this object we can access the class properties.
$book->setProp('GetSetGo','Mr. You','0');
echo $book->getProp();