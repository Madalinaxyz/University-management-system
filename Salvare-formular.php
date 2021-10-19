<?php 

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT MAX(ID) FROM formular";
$rezultate=mysqli_query($conexiune,$query);
$id_vechi=(int)mysqli_fetch_assoc($rezultate)["MAX(ID)"];


$query="INSERT INTO formular VALUES (".($id_vechi+1).",'".$_POST["nume"]."','".$_POST["prenume"]."','".$_POST["facultate"]."','".$_POST["an"]."','".$_POST["sesiune"]."')";

$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
header("Location: http://localhost/Licenta/Confirmare-formular.html");
?>