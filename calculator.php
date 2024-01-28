<?php
//namespace App;

class Calculator
{
    public function calculate($num1, $num2, $operator)
    {
        switch ($operator) {
            case "add":
                return $num1 + $num2;
            case "subtract":
                return $num1 - $num2;
            case "multiply":
                return $num1 * $num2;
            case "divide":
                if ($num2 == 0) {
                    return "Cannot divide by zero!";
                } else {
                    return $num1 / $num2;
                }
            default:
                return "Invalid operator";
        }
    }
}

// Usage in your HTML file:

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $calculator = new Calculator();
    $result = $calculator->calculate($num1, $num2, $operator);

    echo "<div class='calculator'>";
    echo "Result: $result";
    echo "</div>";
}
?>
