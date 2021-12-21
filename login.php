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

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    

        $sql_query = "SELECT count(*) AS users FROM uzytkownicy WHERE username='".$username."' AND password='".$password."' AND typ='klient'";
        $sql_query_pracownik = "SELECT count(*) AS pracownicy FROM uzytkownicy WHERE username='".$username."' AND password='".$password."' AND typ='pracownik'";
        $result = mysqli_query($conn,$sql_query);
        $result2 = mysqli_query($conn,$sql_query_pracownik);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);

        

        $count = $row['users'];
        $count_pracownicy = $row2['pracownicy'];

        if($count > 0){
            $_SESSION['loggedin'];

            $_SESSION['username'] = $username;
            header('Location: home.php');
            unset($_SESSION['blad']);
            
        }else if($count_pracownicy > 0){
            

            $_SESSION['username'] = $username;
            $_SESSION['loggedin_as_pracownik']="<form action='dodajdomenu.php' method='post'>
            <label><h3>Dodawanie do menu</h3></label> <br/> <br/>
            <input type='text' class='form' name='nr' placeholder='Podaj nr'>  <br/> <br/>
            <input type='text' class='form' name='danie' placeholder='Podaj nazwę dania'>  <br/> <br/>
            <input type='text' class='form' name='cena' placeholder='Podaj cenę'>  <br/> <br/>
            <button type='submit' class='przycisk3' name='dodaj'>Dodaj do menu</button> <br/> <br/>
            <br/><br/>
            <label><h4>Usuwanie z menu</h4></label> <br/> <br/>
            <input type='text' class='form' name='nrr' placeholder='Podaj nr'>  <br/> <br/>
            <button type='submit' class='przycisk3' name='usun'>Usuń z menu</button> <br/> <br/> <br/> 
            </form>";
            header('Location: home.php');
            unset($_SESSION['blad']);
        }else{
            $_SESSION['blad'] = "<span style='color:red'>Nieprawidłowy login lub hasło.</span>";
            header('Location: logowanie.php');
        }

        
       
    $conn->close();
}
?>