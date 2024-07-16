<?php

require_once '../Encapsulation/StringOp.php';

use Encapsulation\StringOp;

class AdvanceStringOp extends StringOp{

    public function __construct($str){
        parent::__construct($str);       
    }

    public function subString(){
        return substr($this->str,3);
    }

    /**
     * @return array|int
     */
    public function wordCount(){
        return str_word_count($this->str,0,'012356789');
    }

    public function findStrPosition($findstr){
        return strpos($this->str,$findstr);
    }
}

$obj =  new AdvanceStringOp("Eks4oko3koko");

echo "\nTest 1 : " . $obj->strToUpper();
echo "\nTest 2 : " . $obj->subString();
echo "\nTest 3 : " . print_r($obj->wordCount());
echo "\nTest 4 : " . $obj->findStrPosition("koko");