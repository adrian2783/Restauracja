<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "restauracja";

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
  die("Nie udało połączyć się z bazą danych." . mysqli_connect_error());
};

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("INSERT INTO uzytkownicy (username, password, typ) VALUES 
('$username' , '$password', 'klient')");

if($result === TRUE) {
    
    $_SESSION['registered'] = "Rejestracja przebiegła pomyślnie. <a href='logowanie.php'>Zaloguj</a><i class='fa-solid fa-arrow-right-to-bracket'></i>";
    }else{
    $_SESSION['register_err'] = "Nie udało się zarejestrować";
    }
            
    header('Location: rejestracja.php');   
$conn->close();

?>

