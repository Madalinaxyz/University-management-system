<?php 
echo '<!doctype html>
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
    <title>Acasa</title>
    <style>
        body {
            background-image: url("img/background-login.png");
            background-size: cover;
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
                    <a class="nav-link" href="Cursuri.html">Cursuri</a>
                    <a class="nav-link" href="Profil.php">Profil</a>

                </div>

                <a href="Delogare.php" class="btn btn-success ms-auto">Delogare</a>

            </div>
        </div>
    </nav>
<div class="container bg-white"style="width:50%">
    <h1 class="text-center m-5 p-5">
        Test
    </h1>
    <form class="container mb-5 pb-5"action="Salvare-raspunsuri-test.php" method="POST">';
 if(isset($_GET['Curs'])&&isset($_GET['Saptamana']))
 {
    $curs=$_GET['Curs'];
    $saptamana=$_GET['Saptamana'];
 }   
else
{
   echo'Cursul si saptamana nu au fost precizate';
   die();
}

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT * FROM `intrebari` WHERE Curs=".$curs." AND Saptamana=".$saptamana;
$rezultate=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($rezultate)) {
    if($rand['Tip']==1){
        echo'<p>'.$rand['Intrebare'].'</p>
        <input class="form-check-input" type="radio" name="'.$rand["ID"].'" id="'.$rand["ID"].'A">
        <label class="form-check-label" for="'.$rand["ID"].'A">
         A. '.$rand["Raspuns1"].'
        </label><br>
        <input class="form-check-input" type="radio" name="'.$rand["ID"].'" id="'.$rand["ID"].'B">
        <label class="form-check-label" for="'.$rand["ID"].'B">
         B. '.$rand["Raspuns2"].'
        </label><br>
        <input class="form-check-input" type="radio" name="'.$rand["ID"].'" id="'.$rand["ID"].'C">
        <label class="form-check-label" for="'.$rand["ID"].'C">
         C. '.$rand["Raspuns3"].'
        </label><br>
        <input class="form-check-input" type="radio" name="'.$rand["ID"].'" id="'.$rand["ID"].'D">
        <label class="form-check-label" for="'.$rand["ID"].'D">
         D. '.$rand["Raspuns4"].'
        </label><br>
        <br>';
    }
    if($rand['Tip']==2){
        echo'<p>'.$rand['Intrebare'].'</p>
        <input class="form-check-input" type="checkbox" value="" id="'.$rand["ID"].'A">
        <label class="form-check-label" for="'.$rand["ID"].'A">
        '.$rand["Raspuns1"].'
        </label><br>
        <input class="form-check-input" type="checkbox" value="" id="'.$rand["ID"].'B">
        <label class="form-check-label" for="'.$rand["ID"].'B">
        '.$rand["Raspuns2"].'
        </label><br>
        <input class="form-check-input" type="checkbox" value="" id="'.$rand["ID"].'C">
        <label class="form-check-label" for="'.$rand["ID"].'C">
        '.$rand["Raspuns3"].'
        </label><br>
        <input class="form-check-input" type="checkbox" value="" id="'.$rand["ID"].'D">
        <label class="form-check-label" for="'.$rand["ID"].'D">
        '.$rand["Raspuns4"].'
        </label><br> <br>';
    }
    if($rand['Tip']==3){
  echo '<div class="mb-3">
    <label for="'.$rand['ID'].'" class="form-label">'.$rand['Intrebare'].'</label>
    <textarea class="form-control" id="'.$rand['ID'].'" rows="3"></textarea>
  </div>';
    }

}
echo'<center><button type="submit" class="btn btn-primary mt-5">Trimite</button></center>

</form>

</div>

</body>
</html>';
?>