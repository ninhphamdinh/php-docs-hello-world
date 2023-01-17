<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$Result = $_POST['Result'];

    function MyCalculator($Number1,$Number2, $Result) 
// set $Result as parameter
    {
        switch($Result)
        {
        case "Addition": 
// here you have to use colons not semi-colons
            $compute = $Number1 + $Number2; 
            break;
        case "Subtraction":
            $compute = $Number1 - $Number2; 
            break;
        case "Multiplication":
            $compute = $Number1 * $Number2; 
            break;
        case "Division":
            $compute = $Number1 / $Number2; 
            break;
        }
        return $compute; // returning variable
    }
echo "$Result <br /> <br /> 1st Number: $FirstNumber <br /> 2nd Number: $SecondNumber <br /><br />";
echo "Answer is:" .MyCalculator($FirstNumber,$SecondNumber, $Result);
 // you need to pass $Result as argument of that function
?>