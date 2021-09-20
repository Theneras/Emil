<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'zadanie';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		{
             $login = $_GET['login'];
             $haslo = $_GET['haslo'];
             $imie = $_GET['imie'];
             $nazwisko = $_GET['nazwisko'];
             $szkola= $_GET['szkola'];
             $adres= $_GET['adres'];
             $telefon= $_GET['telefon'];
$query = "Insert into tabela_nazwisko (login, imie, nazwisko, szkola, adres, telefon, haslo) values('$login', '$imie', '$nazwisko', '$szkola', '$adres', '$telefon', '$haslo')";
if (mysqli_query($con, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }
        }
?>

<form action="" method="get">
Login:<input type="text" name="login"><br>
Hasło:<input type="password" name="haslo"><br>
Imie:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazwisko"><br>
Szkoła:<input type="text" name="szkola"><br>
Adres:<input type="text" name="adres"><br>
Telefon:<input type="text" name="telefon"><br>
<input name="sub" type="submit" value="ok">
</form>