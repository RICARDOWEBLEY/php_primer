<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand text-primary" href="index.php"><?php $title ="Learn PHP with Ricardo"; echo $title;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="array.php">Arrays</a>
      </li>
      <li class="nav-item">  <a class="nav-link" href="ifstatement.php">If Statements</a></li>
      <li class="nav-item">
      <a class="nav-link" href="switchstatement.php">Switch Statements</a>
      </li><li class="nav-item"> <a class="nav-link" href="forloop.php">For Loops</a></li>
      </li><li class="nav-item"> <a class="nav-link" href="dowhileloop.php">Do while Loops</a></li>
      </li><li class="nav-item"> <a class="nav-link" href="stringman.php">Strings</a></li>
      </li><li class="nav-item"> <a class="nav-link" href="datetime.php">Date/Time</a></li>
      </li><li class="nav-item"> <a class="nav-link" href="functions.php">Functions</a></li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Array</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
