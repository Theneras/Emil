<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <title></title>
</head>
<body>
    <form action="" method="post">
        Login: <input type="text" name="login"></br>
        Stare hasło: <input type="password" name="old_pass"></br>
        Nowe hasło: <input type="password" name="new_pass"></br>
        Powtórz hasło: <input type="password" name="rep_pass"></br>
        <input type="submit" value="zmień hasło" name="sub">
    </form>
</body>
</html>
<?php
$user= 'root';
$pass= '';
$host = 'localhost';
$base = 'zadanie';    
$con= mysqli_connect($host,$user,$pass, $base);
mysqli_select_db($con,$base);


if(isset($_POST['sub']))
{
    $login=$_POST['login'];
    $newpass=$_POST['new_pass'];
    $reppass=$_POST['rep_pass'];
    $newpass = $_POST['password'];
 
    $number = preg_match('@[0-9]@', $newpass);
    $uppercase = preg_match('@[A-Z]@', $newpass);
    $lowercase = preg_match('@[a-z]@', $newpass);
    $specialChars = preg_match('@[^\w]@', $newpass);
    
    if(strlen($newpass) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    } else {
        $user_check="SELECT haslo FROM tabela_nazwisko WHERE login='$login'";
        $result = mysqli_query($con, $user_check);
        $user = mysqli_fetch_assoc($result);
        if($user['haslo']==$_POST['old_pass']&&$_POST['new_pass']==$_POST['rep_pass']){
        $change="UPDATE tabela_nazwisko SET haslo='$newpass' WHERE login = '$login'";
        if (mysqli_query($con, $change)) {
            echo "Hasło zmienione";
        }
    }
    
      
}

}

?>