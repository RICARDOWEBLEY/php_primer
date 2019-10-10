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
    <title><?php  echo 'Learn PHP | ' .$functions. '' ;?></title>
      
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$functions. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$functions. ' </h1>'; ?>

<?php 

    function message(){
        echo '<h1 class="lead text-danger"> Welcome have a nice day <br/></h1>';
      
    }

    message();

    //function with Parameters

    function add( $num1, $num2){
        $total = $num1 - $num2;
        echo 'The difference of '. $num1 . ' and ' .$num2. ' is: ' . $total . '<br/>';
    }

    add(690, 456);

    $num = 100;

   function numChange(&$num){
       $num+= 30;
    }

    numChange($num);
    echo "The current value of Num is: $num <br/>";

    function returnProduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;
    }
    $return_value = returnProduct(34, 45);

    echo 'Return Value: ' .$return_value;

?>
<?php require 'inc/footer.php'?>
</body>
</html>