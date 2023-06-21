<?php
$var = "Hellos";
define('EveryVersion',' PHP');
echo EveryVersion;
var_dump($var);
echo(gettype($var));

$parag = <<<cx
saddwdwdd
saadwd
$var
sadwd
cx;

//echo $parag
/*
|         | Compiler Language                    | Interpreter Language                             |
|---------|--------------------------------------|--------------------------------------------------|
| Examples| C, C++, Java, Swift, Go, Rust, etc.  | Python, Ruby, JavaScript, PHP, Perl, etc.        |
| Execution| Source code is compiled to machine code before execution. | Source code is executed line by line without compilation. |
| Output  | Typically faster and produces compiled binaries that can be run on any compatible system. | Typically slower and requires an interpreter to run the code. |
| Errors  | All errors are detected during compilation. | Errors are detected during runtime or interpretation. |
| Portability | Compiled binaries need to be recompiled for different platforms. | Doesn't require recompilation and can be run on any platform with an interpreter. |
| Memory  | Compiled code is often more memory efficient. | Interpreted code is often less memory efficient. |
*/ 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Second Tasks";
    ?></title>
</head>
<body>
    <?=
    $var,"PHP";
    ?>
</body>
</html>