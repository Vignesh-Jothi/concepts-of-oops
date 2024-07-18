<?php
namespace Traits;
require_once "stringuse.php";

use Traits\Stringuse;

class Logstring {
    use Stringuse;

    /**
     * @return void
     */
    public function save() {
        $this->log("Data Inserted!");
    }

}


$log = new Logstring();
$log->save();
