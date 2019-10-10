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
    <title>Learn PHP | Date/Time</title>
 
</head>
<body>

<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$if_stmt. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$date. ' </h1>'; ?>

<?php 
$datenow = getdate();

echo "Today's Date is: ";
echo $datenow['mday'] . '/&nbsp';
echo $datenow['mon'] . '/&nbsp';
echo $datenow['year'] . '&nbsp <br/>';


echo "Today's date is: " . $datenow['mon'] . '/'. $datenow['mday'] . '/' . $datenow['year'];

echo '<br/>';

print date("m/d/y G.i:s<br/>", time()) . '<br/>';

echo 'Today is: &nbsp'; 
print date("j of F Y, \a\\t g.i a", time());


?>
<?php require 'inc/footer.php'?>
</body>
</html>