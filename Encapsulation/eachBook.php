<?php

/**
 * Class EachBook
 */
Class EachBook{
    public $bookName;
    public $bookPrice;
    public $dateOfPrint;

    /**
     * @param mixed $name
     * @return void
     */
    public function setBookName($name){
        $this->bookName = $name;
    }
    
    /**
     * @param mixed $price
     * @return void
     */
    public function setPrice($price){
        $this->bookPrice = $price;
    }

    /**
     * @param mixed $printDate
     * @return void
     */
    public function setPrint($printDate){
        $this->dateOfPrint = $printDate;
    }

    /**
     * @return mixed
     */
    public function getBookName(){
        return $this->bookName;
    }

    /**
     * @return mixed
     */
    public function getBookPrice(){
        return $this->bookPrice;
    }

    /**
     * @return mixed
     */
    public function getBookPrintDate(){
        return $this->dateOfPrint;
    }
}


$bookOne = new EachBook();
$bookTwo = new EachBook();

$bookOne->setBookName('To Kill a Mockingbird');
$bookTwo->setBookName('Jane Eyre');

$bookOne->setPrice('200');

echo $bookOne->getBookName()." is cost around ".$bookOne->getBookPrice()."\n";
echo $bookTwo->getBookName()."\n";