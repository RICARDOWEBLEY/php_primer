<?php include 'inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP | Home</title>
    
</head>
<body class="bg-light">

<div class="container ">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP with ' .$name. ' <button class="btn btn-dark" href="array.php" ><a target="_blanck">Learn More</a></button></center></h1>'; ?></div>
<ul>
<li></li>
</ul>
<?php 

$topic = 'Hello World; I am learning PHP!!!';
echo $topic;

echo '<br>';

echo 'This is a second line';

?>

<?php 


$age = 101;
echo '<br>';
//variable declaration
echo $name;
echo '<h1>My Name is : '  .$name. ' and I like PHP</h1>';
echo '<h1>I am '  .$age. ' years old. </h1>';
?>
</div>
<?php  require 'inc/footer.php';?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>