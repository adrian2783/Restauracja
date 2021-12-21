<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "restauracja";

$conn =new mysqli($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
  die("Nie udało połączyć się z bazą danych." . mysqli_connect_error());
}

$nr = $_POST['nr'];
$danie = $_POST['danie'];
$cena = $_POST['cena'];
$idd = $_POST['nrr'];

//usuwanie z menu
if($idd != "") //sprawdzanie czy pole z usuwaniem nie jest puste
{
    $result2 = $conn->query("DELETE FROM dania WHERE id='$idd'" );
    if($result2 === TRUE){
        $_SESSION['udane'] = "Danie o id ".$idd." usunięte pomyślnie<br/><br/>";
        header('Location: home.php');
    }else{
        
        $_SESSION['nieudane'] = "Coś poszło nie tak<br/><br/>";
        header('Location: home.php');
    }
}

//dodawanie do menu
if($nr != "" && $danie != "" && $cena !="")// sprawdzanie czy pola z dodawaniem do menu n
{
$result = $conn->query("INSERT INTO dania (id, nazwa, cena) VALUES ('$nr', '$danie', '$cena.')");
if($result === TRUE){
    $_SESSION['udane'] = "Danie dodane pomyślnie<br/><br/>";
    header('Location: home.php');
}else{
    
    $_SESSION['nieudane'] = "Coś poszło nie tak<br/><br/>";
    header('Location: home.php');
}

}



$conn->close();
?>