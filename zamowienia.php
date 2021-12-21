<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restauracja Pod Niebieskim Kurem</title>
        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7a49b87433.js" crossorigin="anonymous"></script>

        <style>
             @import url('https://fonts.googleapis.com/css2?family=Delius&display=swap');
body{
    font-family: 'Delius', cursive;  
    margin:0;
}

*{
    margin:0;
    background-image:gray;
}
a {
    text-decoration: none;
    color:gray;
    
}
.username{
    padding:10px;
    border-radius:10px;
}
.form{
    padding:10px;
    border-radius:10px;
}
.pass{
    border-radius:10px;
}
a:hover{
    cursor: pointer;
    transition: 0.5s;
    color:coral;
    text-shadow: black;
}
.menu{
    float:right;
    padding:15px;
    color:white;
    background: #000;
    opacity: 0.9;
    z-index: 100;
    font-family: 'Delius', cursive;   
}
.logo{
    float:left;
    padding:3px;
}
span{
    letter-spacing: 2px;
    color:yellow;
    font-size:20px;
}
.loggo{
    font-size:14px;
    margin-bottom:5px;
    color:white;
}
.log{
    
}
.option{
    padding:15px;
    text-decoration:none;
    color:white;
}
.option:hover{
    cursor: pointer;
    transition: 1s;
    color:yellow;
    text-shadow: yellow;
}
.formularzlogowania{
    padding:80px;
    background: #ededed;
    opacity:0.9;
    border:1px solid #c9b47b;
    border-radius:10px;
}
.przycisk2:hover{
    background:rgb(48, 37, 16);
    transition:1s;
    text-shadow: white;
}
.przycisk2{
    background: black;
    opacity:0.9;
    color:white;
    padding-left:40px;
    padding-right:40px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius:10px;
    
}
.zamow{
    font-size:25px;
    border:2px solid yellow;
}
        </style>

    </head>
<body>
<div class="menu col-12 container-fluid shadow ">
            <a href="index.php">
            <div class="logo container col-xl-6 col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center">
                
                <span>Restauracja <i class="fa-solid fa-utensils"></i></span> <br/>
                <section class="loggo">Pod Niebieskim Kurem</section> 
           
            </div>
            </a>
            <div class="row col-xl-4 col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                <div class="option col-3 text-center">Menu</div>
                <div class="option col-3 text-center">Galeria</div>
                <div class="option col-3 text-center">Kontakt</div>
                <div class="option col-3 text-center">Zaloguj   <i class="fa-solid fa-arrow-right-to-bracket"></i></div>
            </div>

        </div>
        <div style="clear:both;"></div>
        <section class="og text-center col-12 col-md-8 col-lg-6  container-fluid mt-5">
        
        
        <div class="zamowienie col-6 mx-auto">
                   <form action="zlozzamowienie.php" method="post" class='zamowienie'>
                       <label><h3>Złóż zamówienie</h3></label> <br/>
                       <input class='zamow' type="text" placeholder='Podaj nazwy potraw' name='zamow'> <br/> <br/>
                       <label><h3>Status zamówienia</h3></label> <br/>
                       <input class='zamow' type="text" placeholder='Podaj numer zamówienia' name='status'>
                   </form>
                </div>
        
        
            

        </section>
        <br/><br/>
        <section class="menudania row container-fluid col-12 col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
        <h2 class="naszemenu  text-center p-5">Nasze menu</h2>

        <div class="nrdania col-1 ">
        <h4 class="">Nr</h4>  <br/>


        <!-- pobieranie menu z bazy danych -->


            <?php
            $conn = new mysqli("localhost","root","", "restauracja");
        
            $result = $conn->query("SELECT id, nazwa, cena FROM dania;");
            
            while($row = $result->fetch_assoc()) {
                echo $row["id"]."<br/><br/>";
            }
            $conn->close();
            ?>



        </div>

        <div class="nazwadania col-9 "> 

            <h4 class="">Danie</h4>  <br/>


            <!-- pobieranie menu z bazy danych -->


            
        <?php

            $conn = new mysqli("localhost","root","", "restauracja");
        
            $result = $conn->query("SELECT id, nazwa, cena FROM dania;");
            
            while($row = $result->fetch_assoc()) {
                echo $row["nazwa"]."<br/><br/>";
            }
            $conn->close();
            ?>
        </div>
        <div class="cena text-center col-2">
        <h4 class="">Cena</h4>  <br/>
         <!-- pobieranie menu z bazy danych -->
        <?php
         
            $conn = new mysqli("localhost","root","", "restauracja");
        
            $result = $conn->query("SELECT id, nazwa, cena FROM dania;");
            
            while($row = $result->fetch_assoc()) {
                echo $row["cena"]."<br/><br/>";
            }
            echo "<br/><br/>";
            $conn->close();
            ?>

        </div>
        
       
    </section>
</body>



