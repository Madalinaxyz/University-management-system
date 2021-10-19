<?php 

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT MAX(ID) FROM note";
$rezultate=mysqli_query($conexiune,$query);
$id_vechi=(int)mysqli_fetch_assoc($rezultate)["MAX(ID)"];


$query="INSERT INTO note VALUES (".($id_vechi+1).",'".$_POST["Curs"]."','".$_POST["Student"]."','".$_POST["Sarcina"]."','".$_POST["Procent"]."','".floatval($_POST["Punctaj"])."','".$_POST["Feedback"]."')";
var_dump($query);


$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
header("Location: http://localhost/Licenta/Confirmare-nota.html");

// $userCautat="madalina.ioana.bajenaru@gmail.com";
// $parolaCautata="1234";
// $query="SELECT * FROM `user` WHERE `mail` = '".$userCautat."' AND `parola` = '".$parolaCautata."'";
// mysqli_select_db($conexiune,"licenta");
// $rezultate=mysqli_query($conexiune,$query);
// if(!$rezultate){
//     die("Nu am gasit date".mysqli_error());
// }
// if(mysqli_fetch_assoc($rezultate)){
//     echo "Autentificare reusita";
// }
// else{
//     echo"Mail sau parola incorecta";
// }

?>