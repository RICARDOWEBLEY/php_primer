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
    <title><?php  echo 'Learn PHP | ' .$if_stmt. '' ;?></title>
    
    
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$if_stmt. ' </center></h1>'; ?></div>

<?php 


echo '<h1 class="text-primary">' .$if_stmt. ' </h1>';

$grade = 75;

if($grade >= 70){

echo '<div class="alert alert-success" role="alert">You Passed </div>';
}
else{ 
  echo '<div class="alert alert-danger" role="alert">You Failed </div>';
}

$grade = "C";

if($grade=="A"){
  echo '<div class="alert alert-success" role="alert">You are Super</div>';
}

elseif($grade=="B"){
  echo '<div class="alert alert-warning" role="alert">You are a Star </div>';
}
else{
  echo '<div class="alert alert-danger" role="alert">You did not make the cut. Try next year. </div>';
}

?>
<?php require 'inc/footer.php'?>
</body>
</html>