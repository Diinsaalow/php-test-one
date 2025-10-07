<?php
// Problem 1
$number1 = 12;
$number2 = 10;
$number3 = 3;

if ($number1 > $number2 && $number1 > $number3) {
    echo "<h3>Number $number1 is the max number</h3>";
} elseif ($number2 > $number1 && $number2 > $number3) {
    echo "<h3>Number $number2 is the max number</h3>";
} else {
    echo "<h3>Number $number3 is the max number</h3>";
}

if ($number1 < $number2 && $number1 < $number3) {
    echo "<h1>Number $number1 is the min number</h1>";
} elseif ($number2 < $number1 && $number2 < $number3) {
    echo "<h1>Number $number2 is the min number</h1>";
} else {
    echo "<h3>Number $number3 is the min number</h3>";
}

// Problem 2

// Solution 1 (using just numbers)
$numbers = 12345;
$reverse = 0;

for ($i = $numbers; $i > 0; $i = (int)($i / 10)) {
    $last_digit = $i % 10;
    $reverse = $reverse * 10 + $last_digit;
}

echo "<h3>Original number: $numbers </h3>";
echo "<h3>Reversed number: $reverse </h3>";

// Solution 2 (Using Arrays)
$numbers = [1, 2, 3, 4, 8];
$reversed_numbers = [];

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    $reversed_numbers[] = $numbers[$i];
}

echo "<h3> Reversed numbers: ";
for ($j = 0; $j < count($reversed_numbers); $j++) {
    echo $reversed_numbers[$j] . "";
}

// Problem 3
$i = 2;
do {
    if ($i % 2 != 0)
        echo "<p>This is odd number $i</p>";
    $i++;
} while ($i < 20);


// Problem 4
$index = 1;
$number = 42;
echo "The factors of $number are: ";
while ($index <= $number) {
    if ($number % $index == 0) {
        echo $index . " ";
    }

    $index++;
}

// Problem 5
$a = 8;
$b = 12;

$candidate_number = max($a, $b);
$found = false;
do {
    if ($candidate_number % $a == 0 && $candidate_number % $b == 0) {
        $found = true;
    } else {
        $candidate_number++;
    }
} while (!$found);

echo "<br/>The LCM of $a and $b is: $candidate_number";


// Problem 6

$number = 11;

$index = 2;
$prime = true;

while ($index < $number) {
    if ($number % $index == 0) {
        $prime = false;
        break;
    }
    $index++;
}

if ($number <= 1) {
    $prime = false;
}

echo ($prime)
    ? "<br/>The number $number is a prime number"
    : "<br/>The number $number is not a prime number";


// Problem 7
echo "<h2>Multiplication Table (1 to 12)</h2>";
echo "<table border='1'>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    $j = 1;
    do {
        $result = $i * $j;
        echo "<td>$i x $j = $result</td>";
        $j++;
    } while ($j <= 12);
    echo "</tr>";
}

echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment One</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 10px 0;
        }

        td {
            border: 1px solid #333;
            padding: 5px 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>

<body>
    <h3>Chapter 3 Assignment</h3>
</body>

</html>