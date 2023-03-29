<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> test ig? </title>
<link rel="stylesheet" href="watykan.css">
</head>
<body>
<html>
<form method="POST" action="odp.php">
  Imię:<br>
  <input type="text" name="imie"><br>
  Nazwisko:<br>
  <input type="text" name="nazwisko">


<?php
$conn=mysqli_connect("localhost","root","", "test maturalny");
$z = "select DISTINCT id , pytanie, odpA, odpB, odpC, odpD, wynik from kolumny";
$query =mysqli_query($conn, $z);
while($wynik = mysqli_fetch_array($query)){
echo "<p>$wynik[1]<br></p>";
echo "<b>odpA) $wynik[2]</b><input type='radio' id='$wynik[0]' value='A'>"; 
echo "<b>odpB) $wynik[3]</b><input type='radio' id='$wynik[0]' value='B'>"; 
echo "<b>odpC) $wynik[4]</b><input type='radio' id='$wynik[0]' value='C'>"; 
echo "<b>odpD) $wynik[5]</b><input type='radio' id='$wynik[0]' value='D'>"; 

}

?>
<p></p>
<p></p>
<button type="submit"> wyślij </button>
</form>





