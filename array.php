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
    <title><?php  echo 'Learn PHP | ' .$array. '' ;?></title>  
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$array. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$array. ' </h1>'; ?>

<?php 

    $num = 3;

    $number= array(93,5,78,34,67,34,67,89);

    echo "The numberis Position is 5: $number[5] ";

    $size = count($number);

    echo '<p>Number of values in array is ' .$size. '</p>';

    for($count =0; $count < $size ; $count++){

    echo "<p>$number[$count]</p>";

}


?>

<?php require 'inc/footer.php'?>

</body>
</html>