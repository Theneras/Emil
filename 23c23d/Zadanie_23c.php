<!DOCTYPE HTML>
<html lang="pl">

<head>

<title>Glowna</title>
</head>

<body>
<a href="strona.php">Główna Strona</a>



</body>

</html>
<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';    //tutaj nazwa twojej bazy
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
            
             
            $hasl = $_GET['haslo'];
            
            $number = preg_match('@[0-9]@', $hasl);
            $uppercase = preg_match('@[A-Z]@', $hasl);
            $lowercase = preg_match('@[a-z]@', $hasl);
            $specialChars = preg_match('@[^\w]@', $hasl);
            
            if(strlen($hasl) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
            } else {
                  $user_check="SELECT * FROM tabela_nazwisko WHERE login='$login'";
                  $result = mysqli_query($con, $user_check);
                  $user = mysqli_fetch_assoc($result);
                  if ($user > 0)
                  {
                        echo "<p>Login jest zajęty</p>";
                  }else{
                          $query = "Insert into tabela_nazwisko (login, imie, nazwisko, szkola, adres, telefon, haslo) values('$login', '$imie', '$nazwisko', '$szkola', '$adres', '$telefon', '$hasl')";
                          if (mysqli_query($con, $query)) 
                          {
                          echo "Konto zostało utworzone";
                          }
                          }
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
<input type="button" onclick="window.location.href='zmiana_hasla.php'" value="Zmiana Hasła"/>