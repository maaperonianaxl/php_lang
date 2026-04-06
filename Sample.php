<?php // Put the declare statement at the very top of the file to avoid syntax errors
declare(strict_types=1);

// FUNCTIONS FIRST
function addNumbers(int $a, int $b) {
    return $a + $b;
}
?>


<?php

// Variables & Strings

$name = "Benedict Cumberbatch";
$course = "Information Technology";

echo "<h3>Variables & Strings</h3>";
echo "Name: " . $name . "<br>";
echo "Course: " . $course . "<br>";

// Concatenation
$txt1 = "Department";
$txt2 = " of Information Technology";
echo $txt1 . $txt2 . "<br>";

// Concatenation assignment
$txt1 .= " - USTP";
echo $txt1 . "<br>";



// String Functions

echo "<h3>String Functions</h3>";
$str = "Hello World";
echo "Length: " . strlen($str) . "<br>";
echo "Position of 'World': " . strpos($str, "World") . "<br>";



// Functions

echo "<h3>Functions</h3>";

// Function without return
function writeMyName($fname) {
    echo "My name is " . $fname . "<br>";
}

writeMyName("Vince");
writeMyName("Isaac");
writeMyName("Kyrie");

// Addition function with return
echo "<h3>Addition Function</h3>";
echo "Sum: " . addNumbers(5, 5) . "<br>";

// Date functions

echo "<h3>Date Function</h3>";
echo date("Y/m/d") . "<br>";
echo date("Y-m-d") . "<br>";
echo date("l dS \\of F Y") . "<br>";

// If / Else

echo "<h3>If / Else</h3>";
$d = date("D");

if ($d == "Fri") {
    echo "Have a nice weekend!<br>";
} else {
    echo "Have a nice day!<br>";
}



// Loops

echo "<h3>While Loop</h3>";
$i = 1;
while ($i <= 5) {
    echo "Number: " . $i . "<br>";
    $i++;
}

echo "<h3>For Loop</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Hello World!<br>";
}

echo "<h3>Foreach Loop</h3>";
$arr = array("one", "two", "three");

foreach ($arr as $value) {
    echo "Value: " . $value . "<br>";
}
?>

</body>
</html>