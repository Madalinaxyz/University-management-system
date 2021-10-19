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

        .card {
            border-width: 3px;
            border-color: green;
        }
        
@use postcss-preset-env;

/* ---------- FONTAWESOME ---------- */
/* ---------- https://fortawesome.github.com/Font-Awesome/ ---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */

@import url(https://weloveiconfonts.com/api/?family=fontawesome);

*[class*="fontawesome-"]:before {
  font-family: \'FontAwesome\', sans-serif;
}

/* ---------- GENERAL ---------- */

/* body {
	background: #f9f9f9;
	color: #0e171c;
  display: grid;
	font: 300 100%/1.5em \'Lato\', sans-serif;
	margin: 0;
  min-height: 100vh;
  place-items: center;
} */

a {
	text-decoration: none;
}

/* h2 {
	font-size: 2em;
	line-height: 1.25em;
	margin: .25em 0;
}

h3 {
	font-size: 1.5em;
	line-height: 1em;
	margin: .33em 0;
} */

table {
	border-collapse: collapse;
	border-spacing: 0;
}

 .container .calendar {
	width: 510px;
} 

/* ---------- CALENDAR ---------- */

.calendar {
	text-align: center;
}

.calendar header {
	position: relative;
}

.calendar h2 {
	text-transform: uppercase;
}

.calendar thead {
	font-weight: 600;
	text-transform: uppercase;
}

.calendar tbody {
	color: #7c8a95;
}

.calendar tbody td:hover {
	border: 2px solid #00addf;
}

.calendar td {
	border: 2px solid transparent;
	border-radius: 50%;
	display: inline-block;
	height: 4em;
	line-height: 4em;
	text-align: center;
	width: 4em;
}

.calendar .prev-month,
.calendar .next-month {
	color: #cbd1d2;
}

.calendar .prev-month:hover,
.calendar .next-month:hover {
	border: 2px solid #cbd1d2;
}

.current-day {
	background: #00addf;
	color: #f9f9f9;
}

.event {
	cursor: pointer;
	position: relative;
}

.event:after {
	background: #00addf;
	border-radius: 50%;
	bottom: .5em;
	display: block;
	content: \'\'\;
	height: .5em;
	left: 50%;
	margin: -.25em 0 0 -.25em;
	position: absolute;
	width: .5em;
}

.event.current-day:after {
	background: #f9f9f9;
}

.btn-prev,
.btn-next {
	border: 2px solid #cbd1d2;
	border-radius: 50%;
	color: #cbd1d2;
	height: 2em;
	font-size: .75em;
	line-height: 2em;
	margin: -1em;
	position: absolute;
	top: 50%;
	width: 2em;
}

.btn-prev:hover,
.btn-next:hover {
	background: #cbd1d2;
	color: #f9f9f9;
}

.btn-prev {
	left: 6em;
}

.btn-next {
	right: 6em;
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
                    <a class="nav-link" aria-current="page" href="Acasa.html">Acasa</a>
                    <a class="nav-link active" href="Cursuri.php">Cursuri</a>
                    <a class="nav-link" href="Profil.php">Profil</a>

                </div>

          <a href="Delogare.php" class="btn btn-success ms-auto">Delogare</a>
            </div>
        </div>
    </nav>
    <!-- Lista cursuri -->
    <div class="container my-5 px-0" style="max-width:100%">
        <div class="row mx-0">
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action ">
                        Cursuri
                    <a href="#" class="list-group-item list-group-item-action ">
                     ASIPSI
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">SS</a>
                    <a href="#" class="list-group-item list-group-item-action">AP</a>
                    <a href="#" class="list-group-item list-group-item-action">IA</a>
                </div>
            </div>
            <div class="col-8">
                <div class="container p-5" style="background-color:white">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                               
                                <div class="card-body">
                                    <h5 class="card-title">Analiza sistemelor info...</h5>
                                    <p class="card-text">Sistemul informational  se defineste ca ansamblul informatiilor, surselor...</p>
                                    <a href="Curs.php?Curs=1" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            
                                <div class="card-body">
                                    <h5 class="card-title">Sisteme SCADA</h5>
                                    <p class="card-text">Control de supraveghere si achizitie de date (SCADA) este un sistem de control arhitectura.</p>
                                    <a href="Curs.php?Curs=2" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                               
                                <div class="card-body">
                                    <h5 class="card-title">Automate programabile</h5>
                                    <p class="card-text">Automatele programabile sunt aparate electronice care controleaza...</p>
                                    <a href="Curs.php?Curs=3" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="card">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Inteligenta artificiala...</h5>
                                    <p class="card-text">IA este capacitatea unei masini de a imita functii umane, cum ar fi rationamentul...
                                    </p>
                                    <a href="Curs.php?Curs=4" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                               
                                <div class="card-body">
                                    <h5 class="card-title">Retele de calculatoare</h5>
                                    <p class="card-text">O retea de calculatoare leagă intre ele o multime mai mica sau mai mare de calculatoare...</p>
                                    <a href="Curs.php?Curs=5" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Baze de date</h5>
                                    <p class="card-text">O baza de date reprezinta o modalitate de stocare a unor informatii si date... </p>
                                    <a href="Curs.php?Curs=6" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="card">
                              
                                <div class="card-body">
                                    <h5 class="card-title">Tehnologii WEB</h5>
                                    <p class="card-text">Dezvoltarea web este un termen larg, care cuprinde orice activitate legata de dezvoltarea unui site...</p>
                                    <a href="Curs.php?Curs=7" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                               
                                <div class="card-body">
                                    <h5 class="card-title">Modelare,simulare</h5>
                                    <p class="card-text">Un model este definit ca o reprezentare a unui sistem care reproduce artificial sistemul.</p>
                                    <a href="Curs.php?Curs=8" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                              
                                <div class="card-body">
                                    <h5 class="card-title">Optimizari</h5>
                                    <p class="card-text">Invata cum sa optimizezi procesele software pentru a le face cat mai eficiente.</p>
                                    <a href="Curs.php?Curs=9" class="btn btn-success">Vezi curs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container d-flex justify-content-center" style="background-color:white">

                    <div class="calendar">
                  
                      <header>
                  
                        <h2>August</h2>
                  
                        <a class="btn-prev fontawesome-angle-left" href="#"></a>
                        <a class="btn-next fontawesome-angle-right" href="#"></a>
                  
                      </header>
                  
                      <table>
                  
                        <thead>
                  
                          <tr>
                  
                            <td>Mo</td>
                            <td>Tu</td>
                            <td>We</td>
                            <td>Th</td>
                            <td>Fr</td>
                            <td>Sa</td>
                            <td>Su</td>
                  
                          </tr>
                  
                        </thead>
                  
                        <tbody>
                  
                          <tr>
                            <td class="prev-month">26</td>
                            <td class="prev-month">27</td>
                            <td class="prev-month">28</td>
                            <td class="prev-month">29</td>
                            <td class="prev-month">30</td>
                            <td class="prev-month">31</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td class="event">10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td class="event">21</td>
                            <td>22</td>
                          </tr>
                  
                          <tr>
                            <td class="current-day event">23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                          </tr>
                          <tr>
                            <td>30</td>
                            <td class="next-month">1</td>
                            <td class="next-month">2</td>
                            <td class="next-month">3</td>
                            <td class="next-month">4</td>
                            <td class="next-month">5</td>
                            <td class="next-month">6</td>
                          </tr>
                  
                        </tbody>
                  
                      </table>
                  
                    </div> <!-- end calendar -->
                  
                  </div> <!-- end container -->
            
            </div>

            <div class="col" >
                <div class="list-group">
                ';
                $host="localhost:3306";
                $user="Licenta";
                $parola="test";
                $bazaDeDate="licenta";
                
                
                $conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
                mysqli_select_db($conexiune,"licenta");
                
                $query="SELECT curs.Acronim,curs_proiect.Descriere,curs_proiect.Deadline FROM `curs_proiect` INNER JOIN curs ON curs.ID=curs_proiect.Materie ORDER BY curs_proiect.ID DESC LIMIT 3";
                $rezultate=mysqli_query($conexiune,$query);
                while ($rand=mysqli_fetch_assoc($rezultate)) {

                echo'
                    <a href="#" class="list-group-item list-group-item-action" >
                      <div class="d-flex w-100 justify-content-between">
                       <b class="mb-1">'.$rand['Acronim'].'</b>
                        <small>'.$rand['Deadline'].' zile ramase </small>
                      </div>
                      <small>'.$rand['Descriere'].'</small>
                    </a>
                    ';
                }
                    echo'
                    
                  </div>
                </div>
            </div>

           
            
        </div>
   
</body>

</html>';
?>