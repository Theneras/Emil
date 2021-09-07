<?php
$n = $_GET['war'];
for($i=0; $i<$n; $i++){
$los = rand(1, 1000);
echo($los);
echo("<br>");
}
?>
<form action=""method="GET">
    <input type="text" name="war">
    <input type="submit" value="show">
</form>