<?php 
$nume_fisier=$_FILES['fisier']['name'];
$nume_temporar=$_FILES['fisier']['tmp_name'];
$folder='uploads/';
move_uploaded_file($nume_temporar,$folder.$nume_fisier);

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT MAX(ID) FROM curs_proiect";
$rezultate=mysqli_query($conexiune,$query);
$id_vechi=(int)mysqli_fetch_assoc($rezultate)["MAX(ID)"];
var_dump($rezultate);


$query="INSERT INTO curs_proiect VALUES (".($id_vechi+1).",'".$_POST["materie"]."','".$_POST["tip"]."','".$_POST["saptamana"]."','".$_POST["descriere"]."','".$_FILES["fisier"]["name"]."',".$_POST["deadline"].")";




$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
header("Location: http://localhost/Licenta/Confirmare-curs-proiect.html");
?>