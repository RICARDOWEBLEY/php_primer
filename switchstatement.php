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
    <title>Learn PHP | Switch Statments</title>
    
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$sw_stmt. ' </center></h1>'; ?></div>

<?php 


$grade = "A";

switch($grade){
    case 'A':
        echo '<div class="alert alert-success" role="alert">You are Super</div>';
        break;

    case 'B':
        echo '<div class="alert alert-warning" role="alert">You are a Star </div>';
        break;

    default:
    echo '<div class="alert alert-danger" role="alert">Try again next year!!!</div>';
}


?>
<?php require 'inc/footer.php'?>
</body>
</html>