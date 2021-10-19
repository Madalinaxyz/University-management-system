<?php 

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);

 if($conexiune){
     echo"S-a conectat"."<br>";
     
 }
 else
 {
     echo "Nu s-a conectat".mysqli_error();

 }
$query="SELECT * FROM user";
mysqli_select_db($conexiune,"licenta");
$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
while($rand=mysqli_fetch_assoc($rezultate)){
    echo "id:".$rand["ID"]."<br>".
    "nume:".$rand["Nume"]."<br>".
    "prenume".$rand["Prenume"]."<br>"
    ;

}
$userCautat="madalina.ioana.bajenaru@gmail.com";
$parolaCautata="1234";
$query="SELECT * FROM `user` WHERE `mail` = '".$userCautat."' AND `parola` = '".$parolaCautata."'";
mysqli_select_db($conexiune,"licenta");
$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
if(mysqli_fetch_assoc($rezultate)){
    echo "Autentificare reusita";
}
else{
    echo"Mail sau parola incorecta";
}
?>
