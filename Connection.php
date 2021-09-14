<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $id = $_GET['id'];
             $imie = $_GET['imie'];
             $nazwisko = $_GET['nazwisko'];
             $Hobby= $_GET['Hobby'];
$query = "Insert into 4g (id, imie, nazwisko, hobby) values('$id', '$imie', '$nazwisko', '$Hobby')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
?>

<form action="" method="get">
id:<input type="text" name="id"><br>
Imie:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazwisko"><br>
Hobby:<input type="text" name="Hobby"><br>
<input name="sub" type="submit" value="ok">
</form>
