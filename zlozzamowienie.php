<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "restauracja";

$conn =new mysqli($host, $user, $password,$dbname);

if (!$conn) {
  die("Nie udało połączyć się z bazą danych." . mysqli_connect_error());
}

$user= $_SESSION['username'];
$zamowienie = $_POST['zamow'];
$status = $_POST['status'];
$nr_zamowienia = rand(1000);
$status_zamowienia = "w trakcie realizaji";

if($zamowienie != ""){

    $result = $conn->query("INSERT INTO zamowienia (uzytkownik, nazwa, nr_zamowienia, status_zamowienia) VALUES ('$user', '$zamowienie','$nr_zamowienia', $status_zamowienia ");
    if($result === TRUE) {
    $_SESSION['zamowienie_zlozone'] = "Zamówienie złożone pomyślnie."
    header('Location: zamowienia.php');
    }else
    $_SESSION['err'] = "Nie udało się złożyć zamówienia";
    header('Location: zamowienia.php'); 
}

if($status != ""){
    $result2 = $conn->query("SELECT count(*) AS status FROM zamowienia WHERE nr_zamowienia='$status'")
    echo $result2;
    header('Location: zamowienia.php');
}



