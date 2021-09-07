<?php
 if(isset($POST['oblicz'])){
$log = $_POST['log'];
$pass = $_POST['pass'];
$a = $_POST['miasto'];
$n = $_POST['nazwisko'];
$c = $_POST['imie'];
if($log=='jacek' && $pass == 'owca')
{
    echo("zalogowany");
   echo("imie: " . $c ."nazwisko: " . $n ."miasto: " . $a );
   
}
 else {
    echo("makaron");
 }


 }


?>
<form action=""method="POST">
   Login <input type="text" name="log"> <br>
   Hasło <input type="password" name="pass"> <br>
    
   
   Imie <input type="text" name="miasto"> <br>
    nazwisko <input type="text" name="nazwisko"> <br>
     miasto <input type="text"name="imie"> <br>
     <input type="submit" name="oblicz" value="zaloguj">
</form>