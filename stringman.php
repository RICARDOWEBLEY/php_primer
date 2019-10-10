<?php
    include 'inc/header.php';
    include 'init.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo 'Learn PHP | ' .$string_man. '' ;?></title>
     
</head>
<body>
<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$string_man. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$string_man. ' </h1>'; ?>

<?php 

$string1="Employee who came late";
$string2="In class B";
$name ="ricardo webley";

echo $string1 . " name was Mike " . $string2 .'<br/>';

echo '<hr/>';

//string Transformation
echo 'Uppercase first letter: ' .ucfirst($name) .'<br/>';

echo 'Captalize first letter of each word: ' .ucwords($name) . '<br/>';

echo 'Uppercase: ' .strtoupper($name) . '<br/>';

echo 'Lowercase: ' .strtolower($name) . '<br/>';

echo 'Lowercase: ' .strtolower('I LOVE PHP..') . '<br/>';

echo '<hr/>';

echo 'Repeat String: ' . str_repeat('bold', 10) . '<br/>';

echo 'Repeat String: ' . str_repeat($name, 10) . '<br/>';

echo 'Repeat String - Nested function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';

echo 'Get a Substring: ' . substr($name, 5, 10) . '<br/>';

echo 'Get position of string: ' . strpos($name, 'r') . '<br/>';

echo 'Find character "W": ' . strchr($name, 'r') . '<br/>';
echo 'Find character "r": ' . strchr($name, 'r') . '<br/>';
echo 'Find character "d": ' . strchr($name, 'r') . '<br/>';
echo 'Find character "o": ' . strchr($name, 'r') . '<br/>';

echo 'Find the length of a string : ' . strlen($name) . '<br/>';

echo 'Without Trim : '  . "A" . "B D C " . "E" . '<br/>';
echo 'Trim spaces on both sides : '  . "A" . trim("B D C ") . "E" . '<br/>';
echo 'Trim spaces on the left : '  . "A" . ltrim("B D C ") . "E" . '<br/>';
echo 'Trim spaces on both sides : '  . "A" . rtrim("B D C ") . "E" . '<br/>';


$combine ="in class stand with rock";

echo 'Replace string with another: ' . str_replace("stand", "sit", $combine) .'<br/>';

?>
<?php require 'inc/footer.php'?>
</body>
</html>