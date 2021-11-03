<?php
    $wartosc1=$_POST['war1'];
    $wartosc2=$_POST['war2'];
    for($i=1;$i<=25;$i++){
        $war = rand($wartosc1,$wartosc2);
        if($war%2!=0){
            echo $war." 🙁"."<br>";
        }else{
            echo $war."<br>";
        }
    }
  
?>
<form action="" method="post">
    Wartosc 1<input type="text" name="war1"><br>
    Wartosc 2<input type="text" name="war2">
    <input type="submit" value="Losuj">
</form>