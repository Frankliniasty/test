<!DOCTYPE html>
<html lang"en">
<head>
 <meta cherset="UTF-8">
 <title>odp</title>
<link rel="stylesheet" herf=style.css">
</head>
<body>



<?php
$imie = $_post["imie"];
$nazwisko = $_post["nazwisko"]

odpowiedz1 =$_post["1"];
odpowiedz2 =$_post["2"];
odpowiedz3 =$_post["3"];
odpowiedz4 =$_post["4"];
odpowiedz5 =$_post["5"];
odpowiedz6 =$_post["6"];
odpowiedz7 =$_post["7"];
odpowiedz8 =$_post["8"];
odpowiedz9 =$_post["9"];
odpowiedz10 =$_post["10"];


$conn = mysqli_connect("localhost", "root","","zadania");
$z = "select * from pytanie";
$query = mysqli_query($conn,$z)){
	
if(wynik)[0] == 1){
	if(odpowiedz1 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 2){
	if(odpowiedz2 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 3){
	if(odpowiedz3 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 4){
	if(odpowiedz4 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 5){
	if(odpowiedz5 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 6){
	if(odpowiedz6 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 7){
	if(odpowiedz7 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 8){
	if(odpowiedz8 == $wynik[5]){
	   $wynik_exe++;
	}
}if(wynik)[0] == 9){
	if(odpowiedz1 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 9){
	if(odpowiedz1 == $wynik[5]){
	   $wynik_exe++;
	}
}
if(wynik)[0] == 10){
	if(odpowiedz10 == $wynik[5]){
	   $wynik_exe++;
	}
  }
}


echo "Finalen sckoren: $wynik_exe";
mysqli_close($conn);
