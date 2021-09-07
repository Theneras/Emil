<?php
 if(isset($POST['oblicz'])){
$log = $_POST['log'];
$pass = $_POST['pass'];
$a= $_POST['miasto'];
$n = $_POST['nazwisko'];
$c = $_POST['imie'];
if($log=='jacek' && $pass == 'owca')
{
    echo("zalogowany");
   echo("imie: " . $c .);
   echo("nazwisko: " . $n .);
   echo("miasto: " . $a .);
}
 else {
    echo("makaron");
 }


 }


?>
<form action=""method="POST">
   Login <input type="text" name="log">
   Hasło <input type="password" name="pass">
    <input type="submit" value="zaloguj">
    <br>
   Imie <input type="text" name="miasto">
    nazwisko <input type="text" name="nazwisko">
     miasto <input type="text"name="imie">
</form>