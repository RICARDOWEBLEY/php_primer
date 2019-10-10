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
    <title><?php  echo 'Learn PHP | ' .$for_stmt. '' ;?></title>
    
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$for_stmt. ' </center></h1>'; ?></div>

<?php 
//create and using for loops in PHP

$counter;

for($counter =0; $counter <10; $counter++){
    echo '<p class="text-warning bg-light">PHP is Fun</p>';
}

for($counter =0; $counter <10; $counter++){
    echo "<h6 >The count is: $counter </h6>";
}

?>
<?php require 'inc/footer.php'?>
</body>
</html>