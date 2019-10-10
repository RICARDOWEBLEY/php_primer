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
    <title><?php  echo 'Learn PHP | ' .$do_stmt. '' ;?></title>   
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$do_stmt. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$do_stmt. ' </h1>'; ?>
<?php 
$grade = 0;
#while ($grade < 10){
#    echo 'LEss than 10';
#}

while($grade < 10){
    echo  '<p class="text-danger"> '.$grade. ' Less than 10 </p>';
    $grade++;
}

echo'Loop exited';

?>

<?php 
echo '<h1>Do While Loops</h1>';

do{
    echo '<h4>I love PHP</h4>'; 
    $grade++;
}while($grade < 10);
echo'Loop exited';
?>

<?php require 'inc/footer.php'?>
</body>
</html>