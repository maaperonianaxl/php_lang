<!DOCTYPE html>
<html>
<head>
    <title>PHP Module 5 Enhanced</title>

     <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Link JS -->
    <script src="script.js" defer></script>
</head>
<body>

<div class="container">

<h1> PHP Module 5 Enhanced</h1>

<input type="text" id="search" class="search" onkeyup="searchContent()" placeholder="Search anything..."> 

<!-- Name Section -->
<div class="card">
<h3>Name Input</h3>

<form method="post">
    <input type="text" name="user_name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>

<?php
if(isset($_POST['user_name'])){
    echo "<p>Hello, <strong>" . $_POST['user_name'] . "</strong> 👋</p>";
}

echo "<p>Try entering your name above to see the greeting message.</p>";

echo "<div class='card'>"; // Nested card for name display
echo "<h3>Name:</h3>";     // Displaying names as per the original code
$name = "Reton Nino Gabisan"; 
$name2 = "Maape Ronian Axl";
$name3 = "Gumatay Nick Adrienne";
echo "<p>$name</p>";
echo "<p>$name2</p>";
echo "<p>$name3</p>";
echo "</div>";
?>
</div>

<?php

?>
<!-- Operation Section -->
<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $b != 0 ? $a / $b : "Cannot divide by 0";
}

function modulo($a, $b) {
    return $b != 0 ? $a % $b : "Cannot modulo by 0";
}

function concatenate($a, $b) {
    return $a . $b;
}

// The addNumbers function is defined in Sample.php and included at the top of this file
$functionResult = null;
$functionLabel = "";
$functionA = "";
$functionB = "";
$concatA = "";
$concatB = "";
$concatResult = null;
$inputText = "";
$searchText = "";
$textLength = null;
$searchPositionText = "";

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["operation"], $_POST["num1"], $_POST["num2"])) {
        $functionA = $_POST["num1"];
        $functionB = $_POST["num2"];
        switch ($_POST["operation"]) {
            case "add":
                $functionResult = add($functionA, $functionB);
                $functionLabel = "Add";
                break;
            case "subtract":
                $functionResult = subtract($functionA, $functionB);
                $functionLabel = "Subtract";
                break;
            case "multiply":
                $functionResult = multiply($functionA, $functionB);
                $functionLabel = "Multiply";
                break;
            case "divide":
                $functionResult = divide($functionA, $functionB);
                $functionLabel = "Divide";
                break;
            case "modulo":
                $functionResult = modulo($functionA, $functionB);
                $functionLabel = "Modulo";
                break;
        }
    }

    // Handle concatenation and string function forms
    if (isset($_POST["functionAction"]) && $_POST["functionAction"] === "concatFunction") {
        $concatA = $_POST["concatA"];
        $concatB = $_POST["concatB"];
        $concatResult = concatenate($concatA, $concatB);
    }

    // Handle string functions form
    if (isset($_POST["functionAction"]) && $_POST["functionAction"] === "stringFunction") {
        $inputText = $_POST["inputText"];
        $searchText = $_POST["searchText"];
        $textLength = strlen($inputText);
        $searchPosition = strpos($inputText, $searchText);
        $searchPositionText = $searchPosition !== false ? "Found at position $searchPosition" : "Not found";
    }
}

// The addNumbers function is defined in Sample.php and included at the top of this file
echo "<div class='card'>";
echo "<h3>PHP Functions:</h3>";
echo "<p>Interactive functions section: choose an operation below to run the custom math functions or test string functions.</p>";

// Math Functions Form
echo "<form method='post'>";
echo "<input type='number' name='num1' placeholder='Enter number 1' value='$functionA' required>";
echo "<input type='number' name='num2' placeholder='Enter number 2' value='$functionB' required>";
echo "<select name='operation'>";
echo "<option value='add'>Add</option>";
echo "<option value='subtract'>Subtract</option>";
echo "<option value='multiply'>Multiply</option>";
echo "<option value='divide'>Divide</option>";
echo "<option value='modulo'>Modulo</option>";
echo "</select>";
echo "<button type='submit'>Run Math Function</button>";
if ($functionResult !== null) {
    echo "<p><strong>$functionLabel Result: $functionResult</strong></p>";
}
echo "</form>";

// Concatenation Function Form
echo "<form method='post'>";
echo "<input type='hidden' name='functionAction' value='concatFunction'>";
echo "<p><strong>Concatenation Operator (.)</strong></p>";
echo "<input type='text' name='concatA' placeholder='Enter text 1' value='$concatA' required>";
echo "<input type='text' name='concatB' placeholder='Enter text 2' value='$concatB' required>";
echo "<button type='submit'>Run Concatenation</button>";
if ($concatResult !== null) {
    echo "<p class='concat-result'><strong>Concatenated Result: $concatResult</strong></p>";
}
echo "</form>";

// String Functions Form
echo "<form method='post'>";
echo "<input type='hidden' name='functionAction' value='stringFunction'>";
echo "<input type='text' name='inputText' placeholder='Enter text' value='$inputText' required>";
echo "<input type='text' name='searchText' placeholder='Text to search' value='$searchText' required>";
echo "<button type='submit'>Run string functions</button>";
if ($textLength !== null) {
    echo "<p><strong>Output Length: $textLength</strong></p>";
    echo "<p><strong>Search result for '$searchText': $searchPositionText</strong></p>";
}
echo "</form>";

// Displaying examples of functions
echo "<b> EXAMPLES </b>";
echo "<p>Example: 10 + 5 = " . add(10,5) . "</p>";
echo "<p>Example: 10 - 5 = " . subtract(10,5) . "</p>";
echo "<p>Example: 10 * 5 = " . multiply(10,5) . "</p>";
echo "<p>Example: 10 / 5 = " . divide(10,5) . "</p>";
echo "<p>Example: 10 % 5 = " . modulo(10,5) . "</p>";
echo "<p>Example: 'Hello' . ' World' = " . concatenate('Hello', ' World') . "</p>";

echo "<p>Example: Length: " . strlen("Hello World") . "</p>";
echo "<p>Example: Find 'World': " . strpos("Hello World", "World") . "</p>";
echo "</div>";
?>

<!-- Date Section -->
<?php
echo "<div class='card'>";
echo "<h3>Date:</h3>";
echo "<p>" . date("l, F d, Y") . "</p>";
echo "</div>";
?>

<!-- Selection Section -->
<?php
echo "<div class='card'>";
echo "<h3>Selection:</h3>";

$num = 7;
echo ($num % 2 == 0) ? "<p>Even</p>" : "<p>Odd</p>"; // Ternary operator for even/odd check

$day = date("D");
echo "<p>Today: $day</p>";

switch ($day) { // Switch statement for days of the week
    case "Mon": echo "Start of week"; break;
    case "Fri": echo "Weekend soon"; break;
    case "Sat": echo "Weekend begins"; break;
    case "Sun": echo "Weekend ends"; break;
    default: echo "Regular day";
}
echo "</div>";
?>

<!-- Loops Section -->
<?php
echo "<div class='card'>";
echo "<h3>Loops:</h3>";

// For Loop, While Loop, Foreach Loop
echo "<p>For Loop:</p>";
for ($i=1;$i<=5;$i++) echo "$i ";

// While Loop
echo "<p>While Loop:</p>";
$i=1;
while($i<=3){ echo "$i "; $i++; }

// Foreach Loop
echo "<p>Foreach:</p>";
$colors = ["Red","Blue","Green"];
foreach($colors as $c) echo "$c<br>";

echo "</div>";
?>

</div>

</body>
</html>