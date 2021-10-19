<?php
session_start();
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <title>Profilul meu</title>
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
        <h1 class="text-center m-5">Profilul meu</h1>
        <div class="row bg-white border"><div>
        <i class="fas fa-user-graduate m-1" style="font-size:100px;color:#85c441"></i>
        <span style="font-size:40px">'.$_SESSION["prenume"]." ".$_SESSION["nume"].'</span> 
    </div></div>
    <div class="row bg-white border mt-3 p-3">
        <div class="col">
        <h3>Detalii despre utilizator</h3>
        <p class="my-0"><b>E-mail</b></p>
        <p class="my-0"> '.$_SESSION["mail"].'</p><br>
        <p class="my-0"><b>Numar de telefon</b></p>
        <p class="my-0">0737167718</p><br>';
        if ($_SESSION['profesor']==0){
            echo '
            <p class="my-0"><b>Anul</b></p>
            <p class="my-0">IV</p><br>
            <p class="my-0"><b>Grupa</b></p>
            <p class="my-0">2</p><br>';
            echo'
            </div>
            <div class="col">
                <img src="img/student.jpg"style="width:100%">
            </div>
        </div>
        <div class="row bg-white border mt-3 p-3">
            <h3>Cursuri</h3>
            <ul class="list-group">
                <li class="list-group-item">Analiza sistemelor informationale si proiectarea sitemelor informatice</li>
                <li class="list-group-item">Sisteme SCADA</li>
                <li class="list-group-item">Automate programabile</li>
                <li class="list-group-item">Inteligenta artificiala si sisteme expert</li>
                <li class="list-group-item">Retele de calculatoare</li>
                <li class="list-group-item">Baze de date</li>
                <li class="list-group-item">Tehnologii WEB</li>
                <li class="list-group-item">Modelare,Simulare</li>
                <li class="list-group-item">Optimizari</li>
    
              </ul>
            
        </div>';
        }else
        {
            echo'<a href="Admin-profesor.html"class="btn btn-primary mr-5">Administrare cursuri </a>  ';
            echo'<a href="Adaugare-note.html"class="btn btn-primary ml-5">Adaugare note studenti </a>';
        }

        
      echo  '
    </div>
    
    </body>
    </html>';

?>