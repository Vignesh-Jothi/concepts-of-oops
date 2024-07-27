<?php

/**
 * I created sample classes to implements abstract class method.
 * This not logically correct but it helps to learn about abstract mechanism
 */
abstract class Quiz{
  
    /**
     * @param mixed $totalMark
     * @param mixed $totalQuiz
     * @return float
     */
    abstract public function calculateMarks($totalMark,$totalQuiz):float;

}

class MathsMarks extends Quiz{
    private $quizMark;
    private $totalMark;

    /**
     * @param mixed $totalMark
     * @param mixed $totalQuiz
     * @return float
     */
    public function calculateMarks($totalMark, $totalQuiz):float{
        $this->quizMark = $totalQuiz;
        $this->totalMark = $totalMark;

        return $this->quizMark * $this->totalMark;
    }

    
}

class TamilMarks extends Quiz{
    private $quizMark;
    private $totalMark;

    /**
     * @param mixed $totalMark
     * @param mixed $totalQuiz
     * @return float
     */
    public function calculateMarks($totalMark, $totalQuiz):float{
        $this->quizMark = $totalQuiz;
        $this->totalMark = $totalMark;

        return $this->quizMark + $this->totalMark;
    }

    
}

class EnglishMarks extends Quiz{
    private $quizMark;
    private $totalMark;

    /**
     * @param mixed $totalMark
     * @param mixed $totalQuiz
     * @return float
     */
    public function calculateMarks($totalMark, $totalQuiz):float{
        $this->quizMark = $totalQuiz;
        $this->totalMark = $totalMark;

        return $this->quizMark - $this->totalMark;
    }

    
}

$objTamil = new TamilMarks();
echo $objTamil->calculateMarks(10,5);