<?php
if(isset($POST['show'])){
$liczba = $_POST['liczba'];
function fib($n){
    if($n ==1){
        return 1;
    }
    else{
        return $n* fib($n-1) + fib($n-2);

    }
}
echo(fib($liczba));
}
?>
<form action=""method="POST">
    liczba n <input type="text" name="liczba"><br>
    <input type="submit" name="show" value="send" ><br>
</form> 