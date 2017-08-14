<?php 
//ini_set('display_errors', 0);

session_start();

$numele=$_POST['numele'];
$prenumele=$_POST['prenumele'];
$adresa=$_POST['adresa'];
$mail=$_POST['mail'];
$parola=$_POST['parola'];

$servername = "localhost";
$username = "mihaivirlan";
$password = "";
$db="piata";
$port="3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_verificare="SELECT * FROM `inregistrare` WHERE `E-mail`= '$mail'";
$result = mysqli_query($conn, $sql_verificare);

 if (mysqli_num_rows($result) == 0) {
             
            $parola =  hash("sha256",$parola);
            $sql = "INSERT INTO inregistrare (`Numele dvs.`, `Prenumele dvs.`, `Adresa dvs.`, `E-mail`, `Parola`)
            VALUES ('$numele', '$prenumele', '$adresa', '$mail', '$parola')";
            
            
            if (mysqli_query($conn, $sql)) {
               
                   $_SESSION['user'] = $mail;
                     $_SESSION['login_time'] = time();
                     
                     header('Location: https://piata-auto-mihaivirlan.c9users.io/sait/index.php');
               
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

} else {
            
            echo "Utilizatorul exista deja in baza de date";
            
}


?>