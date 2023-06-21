<?php

$name = 'PHP';
$age = 21;

print_r($name);
echo ' '.is_int($age);

/*
|           | Echo                                | Print                                   |
|-----------|-------------------------------------|-----------------------------------------|
| Syntax    | `echo "string1", "string2", ...;`   | `print("string");`                      |
| Returns   | Does not return a value.            | Returns a value of 1.                   |
| Arguments | Can output multiple arguments.      | Can only output a single string.        |
| Speed     | Generally faster than `print`.      | Slightly slower than `echo`.            |
| Syntax    | Does not require parentheses.       | Requires parentheses.                   |
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $name?></h1>
    <br>
    <h2><?= PHP_INT_MAX?></h2>
    <br>
    <h2><?= PHP_INT_MIN?></h2>
</body>
</html>