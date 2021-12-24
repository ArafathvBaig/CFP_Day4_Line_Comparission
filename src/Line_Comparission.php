<?php
echo "Welcome to Line Comparission Computation Problem\n";
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Line Comparission Computation Problem
 */
class LineComparission
{

    //creating public variable
    public $x1;
    public $x2;
    public $y1;
    public $y2;

    /**
     * Own implementation for power function 
     * Passing parameters of number and its power and 
     * checking the valid power conditions
     */
    function power($num, $power)
    {
        if ($power == 1) {
            return $num;
        } elseif ($power == 0) {
            return 1;
        } else {
            $temp = $num;
            for ($i = 1; $i < $power; $i++) {
                $temp = $temp * $num;
            }
            return $temp;
        }
    }

    /**
     * Function to get User input for calculating length
     * Calling the calcLength function in this function
     */
    function userInput()
    {
        $this->x1 = readline("Enter the Value of X1 : ");
        $this->y1 = readline("Enter the Value of Y1 : ");
        $this->x2 = readline("Enter the Value of X2 : ");
        $this->y2 = readline("Enter the Value of Y2 : ");
    }

    /**
     * Function to Calculate length of the points
     * Using own Power function
     * returns the length
     */
    function calcLength()
    {
        $this->userInput();
        $length = sqrt($this->power(($this->x2 - $this->x1), 2) +
            $this->power(($this->y2 - $this->y1), 2));
        echo "Length:: " . $length . "\n";
        return $length;
    }

    /**
     * Function to check the equality of two lengths
     * Passing length1 and length2 as parameters
     * Prints if equal or not
     */
    function checkEquality($length1, $length2)
    {
        if ($length1 == $length2) {
            echo "Both have Equal Length";
        } else {
            echo "Not equal";
        }
    }
}

//creating object of LineComparison class
$lineComparission = new LineComparission();
$length1 = $lineComparission->calcLength();
$length2 = $lineComparission->calcLength();
$lineComparission->checkEquality($length1, $length2);
