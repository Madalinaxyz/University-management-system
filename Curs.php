<?php
session_start();
if(isset($_GET['Curs']))
{
   $curs=$_GET['Curs'];
}   
else
{ echo'ID-ul cursului nu a fost precizat';
  die();
}

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs` WHERE ID=".$curs.' limit 1';
$rezultate=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($rezultate)) {

echo'<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">



    <title>'.$rand["Acronim"].'</title>
    <style>
        body {
            background-image: url("img/background-login.png");
            background-size: cover;
        }
        .list-group-item{
            color:green;
            padding:20px;
        }
    </style>
</head>

<body>
<!-- Meniu -->
    <nav class="navbar navbar-expand-lg navbar-light "
        style="background-color:#85c441;font-family: \'Raleway\', sans-serif;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Acasa.html">Acasa</a>
                    <a class="nav-link" href="Cursuri.php">Cursuri</a>
                    <a class="nav-link" href="Profil.php">Profil</a>

                </div>

                <a href="Delogare.php" class="btn btn-success ms-auto">Delogare</a>

            </div>
        </div>
    </nav>
<div class="container bg-white p-5">
<h1 class="m-5 text-center">'.$rand['Nume_curs'].'</h1>
<ul class="list-group" >
    <li class="list-group-item">
      <h3> 1 Martie - 7 Martie </h3>
      <i class ="fas fa-file-pdf" style="color:red"></i>
<a href="cursuri/Curs 1.pdf" target="_blank">Curs 1</a>
';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=1';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=1">Test </a>
 ';

}

$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=1';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=1">Proiect </a>
 ';  
}

}

echo'
    </li>

    <li class="list-group-item">
        <h3>8 Martie - 14 Martie</h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
<a href="cursuri/Curs 1.pdf" target="_blank">Curs 2</a>
';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=2';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=2">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=2';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=2">Proiect </a>
 ';  
}

}

echo'
    </li>
    <li class="list-group-item">
        <h3>15 Martie - 21 Martie</h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 3</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=3';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=3">Test </a>
 ';

}

$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=3';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=3">Proiect </a>
 ';  
}

}

echo'

    </li>
    <li class="list-group-item">
        <h3>22 Martie - 28 Martie</h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 4</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=4';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=4">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=4';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=4">Proiect </a>
 ';  
}

}

echo'
    </li>
    <li class="list-group-item">
        <h3>29 Martie - 4 Aprilie</h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 5</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=5';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=5">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=5';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=5">Proiect </a>
 ';  
}

}

echo'
    </li>
    <li class="list-group-item">
      <h3>  5 Aprilie - 11 Aprilie</h3>
      <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 6</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=6';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=6">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=6';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=6">Proiect </a>
 ';  
}

}

echo'
      
    </li>
    <li class="list-group-item">
        <h3>12 Aprilie - 18 Aprilie</h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 7</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=7';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=7">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=7';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=7">Proiect </a>
 ';  
}

}
echo'
    </li>
    <li class="list-group-item"><h3>19 Aprilie - 25 Aprilie
        </h3>
        <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 8</a>
        ';
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=8';
$intrebari=mysqli_query($conexiune,$query);
if (mysqli_fetch_assoc($intrebari)) {
    echo'  <br>
    <i class="fas fa-pencil-alt mt-1"></i>
    <a href="Test1.php?Curs='.$curs.'&Saptamana=8">Test </a>
 ';

}
$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=8';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=8">Proiect </a>
 ';  
}

}
echo'
    </li>
    <li class="list-group-item">
      <h3>  26 Aprilie - 2 Mai</h3> 
      <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 9</a><br>
     
      ';
      $conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
      mysqli_select_db($conexiune,"licenta");
      
      $query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=9';
      $intrebari=mysqli_query($conexiune,$query);
      if (mysqli_fetch_assoc($intrebari)) {
          echo'  <br>
          <i class="fas fa-pencil-alt mt-1"></i>
          <a href="Test1.php?Curs='.$curs.'&Saptamana=9">Test </a>
       ';
      
      }
      $conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=9';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=9">Proiect </a>
 ';  
}

}
      
     echo'
    </li>
   
    
 <li class="list-group-item"><h3>
    3 Mai - 9 Mai</h3>
    <i class ="fas fa-file-pdf" style="color:red"></i>
        <a href="cursuri/Curs 1.pdf" target="_blank">Curs 10</a>
        ';
        $conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
        mysqli_select_db($conexiune,"licenta");
        
        $query="SELECT * FROM `Intrebari` WHERE Curs=".$curs.' AND Saptamana=10';
        $intrebari=mysqli_query($conexiune,$query);
        if (mysqli_fetch_assoc($intrebari)) {
            echo'  <br>
            <i class="fas fa-pencil-alt mt-1"></i>
            <a href="Test1.php?Curs='.$curs.'&Saptamana=10">Test </a>
         ';
        
        }

        $conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `curs_proiect` WHERE Materie=".$curs.' AND Saptamana=10';
$material=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($material)) {
if($rand['Tip']==1){


    echo'  <br>
    <i class="fas fa-file-pdf mt-1"></i>
    <a href="uploads/'.$rand['Fisier'].'">Material </a>
 ';
}else
{
    echo'  <br>
    <i class="fas fa-tasks mt-1" style="color:rgb(235, 111, 208)"></i>
    <a href="Incarcare-proiect.php?Curs='.$curs.'&Saptamana=10">Proiect </a>
 ';  
}

}
        
        echo'
</li>
  </ul>
  ';
  
  if ($_SESSION['profesor']==0){
  echo'<div class="m-5">
    <center>  <a href ="Note.php?Curs='.$curs.'" style="background-color:#85c441" class ="btn">Vizualizare note</a></center>
  </div>';
  }
echo'
</div>
    </body>
    </html>';}

?>