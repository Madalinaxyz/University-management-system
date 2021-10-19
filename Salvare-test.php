<?php 

$host="localhost:3306";
$user="Licenta";
$parola="test";
$bazaDeDate="licenta";


$conexiune=mysqli_connect($host,$user,$parola,$bazaDeDate);
mysqli_select_db($conexiune,"licenta");

$query="SELECT MAX(ID) FROM intrebari";
$rezultate=mysqli_query($conexiune,$query);
$id_vechi=(int)mysqli_fetch_assoc($rezultate)["MAX(ID)"];


$query="INSERT INTO intrebari VALUES (".($id_vechi+1).",'".$_POST["intrebare1"]."','".$_POST["Raspuns1-1"]."','".$_POST["Raspuns1-2"]."','".$_POST["Raspuns1-3"]."','".$_POST["Raspuns1-4"]."',".$_POST["tip1"].",".$_POST["saptamana"].",".$_POST["curs"]."),
(".($id_vechi+2).",'".$_POST["intrebare2"]."','".$_POST["Raspuns2-1"]."','".$_POST["Raspuns2-2"]."','".$_POST["Raspuns2-3"]."','".$_POST["Raspuns2-4"]."',".$_POST["tip2"].",".$_POST["saptamana"].",".$_POST["curs"]."),
(".($id_vechi+3).",'".$_POST["intrebare3"]."','".$_POST["Raspuns3-1"]."','".$_POST["Raspuns3-2"]."','".$_POST["Raspuns3-3"]."','".$_POST["Raspuns3-4"]."',".$_POST["tip3"].",".$_POST["saptamana"].",".$_POST["curs"]."),
(".($id_vechi+4).",'".$_POST["intrebare4"]."','".$_POST["Raspuns4-1"]."','".$_POST["Raspuns4-2"]."','".$_POST["Raspuns4-3"]."','".$_POST["Raspuns4-4"]."',".$_POST["tip4"].",".$_POST["saptamana"].",".$_POST["curs"]."),
(".($id_vechi+5).",'".$_POST["intrebare5"]."','".$_POST["Raspuns5-1"]."','".$_POST["Raspuns5-2"]."','".$_POST["Raspuns5-3"]."','".$_POST["Raspuns5-4"]."',".$_POST["tip5"].",".$_POST["saptamana"].",".$_POST["curs"].")";



$rezultate=mysqli_query($conexiune,$query);
if(!$rezultate){
    die("Nu am gasit date".mysqli_error());
}
header("Location: http://localhost/Licenta/Confirmare-test.html");

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
