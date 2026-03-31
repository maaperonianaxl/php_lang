<?php
echo "<h1>PHP Module 5 Output</h1>";


// Name Section

$name = "Reton Nino Gabisan";
$name2 = "Maape Ronian Axl";
$name3 = "Gumatay Nick Adriane";

echo "<h3>Name:</h3>";
echo "<p>$name</p>";
echo "<p>$name2</p>";
echo "<p>$name3</p>";


// Operators

echo"<h3>Operators:</h3>";

$a = 10;
$b = 5;

// Arithmetic
echo "<p>Addition: $a + $b = " . ($a + $b) . "</p>";
echo "<p>Subtraction: $a - $b = " . ($a - $b) . "</p>";
echo "<p>Multiplication: $a * $b = " . ($a * $b) . "</p>";
echo "<p>Division: $a / $b = " . ($a / $b) . "</p>";
echo "<p>Modulus: $a % $b = " . ($a % $b) . "</p>";

// Assignment
$c = $a;
$c += $b;
echo "<p>Assignment (c += b): $c</p>";

// Comparison
//echo "<p>Is $a equal to $b? " . ($a == $b ? "Yes" : "No") . "</p>";
//echo "<p>Is $a greater than $b? " . ($a > $b ? "Yes" : "No") . "</p>";



// PHP Functions

echo "<h3>PHP Functions:</h3>";

// Custom function
function add($a, $b) {
    return $a + $b;
}

echo "<p>10 + 5 = " . add(10, 5) . "</p>";

// String functions
$text = "Hello World";
echo "<p>Length of '$text': " . strlen($text) . "</p>";
echo "<p>Position of 'World': " . strpos($text, "World") . "</p>";



// PHP Date

echo "<h3>Current Date:</h3>";

echo "<p>Y-m-d: " . date("Y-m-d") . "</p>";
echo "<p>Y/m/d: " . date("Y/m/d") . "</p>";
echo "<p>Full Date: " . date("l, F d, Y") . "</p>";



// Selection Statements

echo "<h3>Selection Statements:</h3>";

// If-Else
$num = 7;
if ($num % 2 == 0) {
    echo "<p>$num is Even</p>";
} else {
    echo "<p>$num is Odd</p>";
}

// Switch
$day = date("D");

echo "<p>Today is: $day</p>";

switch ($day) {
    case "Mon":
        echo "Start of the week!";
        break;
    case "Fri":
        echo "Weekend is near!";
        break;
    default:
        echo "Regular day.";
}



// Loops

echo "<h3>Loops:</h3>";

// For Loop
echo "<p>For Loop (1-10):</p>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// While Loop
echo "<p>While Loop (1-5):</p>";
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}

// Foreach Loop colors
echo "<p>Foreach Loop:</p>";
$colors = array("Red", "Blue", "Green");

foreach ($colors as $color) {
    echo $color . "<br>";
}
?>