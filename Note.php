<?php
session_start();
if(isset($_GET['Curs']))
 {
    $curs=$_GET['Curs'];
    $student=$_SESSION['ID'];
 }   
else
{
   echo'Cursul nu a fost precizat';
   die();
}
echo'
<!doctype html>
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
                    <a class="nav-link" href="Cursuri.php">Cursuri</a>
                    <a class="nav-link" href="Profil.php">Profil</a>

                </div>

                <a href="Delogare.php" class="btn btn-success ms-auto">Delogare</a>

            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Note</h1>
        <table class="table table-dark table-striped">
            <tr>
                <th>Sarcina</th>
                <th>Procent</th>
                <th>Punctaj</th>
                <th>Feedback</th></tr>';
            
$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");
$suma=0;
$query="SELECT * FROM `note` WHERE Curs=".$curs." AND Student=".$student;
$rezultate=mysqli_query($conexiune,$query);
while ($rand=mysqli_fetch_assoc($rezultate)) {
echo'<tr>
<td>'.$rand['Sarcina'].'</td>
<td>'.$rand['Procent'].'</td>
<td>'.$rand['Punctaj'].'</td>
<td>'.$rand['Feedback'].'</td>
</tr>';
$suma=$suma+$rand['Punctaj'];
}
echo'</tr>
<td colspan="2"> Punctaj total
</td>
<td>'.$suma.'</td>
<td></td>
<tr>

</tr>


</table>
</div>



</body>
</html>';
    ?>