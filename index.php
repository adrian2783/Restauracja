<?php 
session_start();
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)){
    header('Location:home.php');
    exit();
}
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
    
    margin:0;
}

*{
    margin:0;
    
}
a {
    text-decoration: none;
    color:white;
    
}
.login{
    padding:10px;
    border-radius:10px;
}
.pass{
    border-radius:10px;
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
.zalogujsie{
    font-size:20px;
    color:white;
    
}


a:hover{
    cursor: pointer;
    transition: 1s;
    color:yellow;
    text-shadow: yellow;
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
.napis{
    color:white;
    font-family: 'Delius', cursive;
    font-weight: 500;
}
.witamy2{
    font-size:45px;
}
.special{
    font-size:40px;   
}

.main{
    margin-top:170px;
    color:white;   
}

.lorem{
   font-size:30px; 
   text-align: justify;
}
.lorem1{
    font-size:25px;
    text-align: justify;
}
.content{
    height:500px;
    position:absolute;
    margin-top:50px;
}
.content1{
    color:white;
    height:500px;
    margin-top:50px;
}
.logo{
    float:left;
    padding:3px;
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
.border{
    border-bottom:3px solid #c9b47b;
    margin-bottom:20px;
}
.baner{
    opacity:0.9;
    width:100%;
}

.przycisk{
    border-radius:30px;
    padding-left:5px;
    padding-right:5px;
    background-color: black;
    color:white;
    opacity:0.95;
    border:none;
    letter-spacing: 1px;
    
    
    
}
.przycisk1:hover{
    background:rgb(48, 37, 16);
    transition:1s;
    text-shadow: white;
}
.przycisk2:hover{
    background:rgb(48, 37, 16);
    transition:1s;
    text-shadow: white;
}

.restauracja{
    padding-top:20px;
    font-size:40px;
}
.about{
    font-size:50px;
}
.about1{
    font-size:45px;
}

.footer{
    
    background-color: black;
    height:300px;
    opacity: 0.9;
    color:white;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.kontakt{
    
    font-size:15px;
    padding-top:30px;
}
.godzotwarcia{
    
    font-size:15px;
    padding-top:30px;
}
.menu1{
    padding:20px;
    
}
.copy{
    padding:15px;
    background-color: black;
    opacity:0.9;
    color:white;
    position:sticky;

}
h3{
    font-family: 'Delius', cursive;
}

.naszemenu{
    font-size:36px;
}
.menudania{
    font-family: 'Delius', cursive;
    background: #fffef5;
}
.log{
    border:1px solid gray;
}
        </style>
    </head>
    
<body>
   

        <div class="menu col-12 container-fluid shadow ">

            <div class="logo container col-xl-6 col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center">
                
                <span>Restauracja <i class="fa-solid fa-utensils"></i></span> <br/>
                <section class="loggo">Pod Niebieskim Kurem</section> 
                

            </div>

            <div class="row col-xl-4 col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                <div class="option col-3 text-center">Menu</div>
                <div class="option col-3 text-center">Galeria</div>
                <div class="option col-3 text-center">Kontakt</div>
                
                <div class="option col-3 text-center"> 
                    <a href="logowanie.php">Zaloguj</a>
                     <i class="fa-solid fa-arrow-right-to-bracket"></i>
               </div>
               
	              
                
            </div>

        </div>

       
        
    
    <section class="main col-12 fs-2 position-absolute ">

        <div id="space bg-warning position-absolute d-none d-lg-flex mt-1">
            
        </div> 

        <div class="napis text-center ">
            
            <div class="witamy d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">Witamy na stronie naszej restauracji! <br/> </div> 

            

            
            <div class="witamy2 d-none d-lg-block ">Witamy na stronie naszej restauracji! <br/> </div> 

            <div class="special">一🙥🙧一 </div> <br/>

            
            <button class="przycisk shadow fs-4 p-3  ">Złóż zamówienie</button>
            

            <button class="przycisk shadow fs-4 p-3  ">Status zamówienia</button>
            <p class="zalogujsie mt-2"></p>
            
            <script>
                const btn = document.querySelector(".przycisk");
                const result = document.querySelector(".zalogujsie")
                const zaloguj = () => {
                    result.innerText="Musisz być zalogowany.";
                };
                btn.addEventListener('click', zaloguj);

            </script>
            
            <section class="content d-none d-xxl-block col-12">
                <p class="about">O nas</p>  


                <div class="special">一🙥🙧一 </div> <br/>
                

                <p class="lorem col-6 mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam maxime. Ipsam facilis quod repellat eum recusandae nobis error cumque dolores blanditiis hic, eaque earum temporibus quisquam, quae nam officiis quis consequatur maxime facere excepturi natus alias voluptate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, repellendus.
                </p>
                
            </section>
            <section class="content1 d-none d-xl-block d d-xxl-none ">
                <p class="about1">O nas</p>  <div class="special">一🙥🙧一 </div>  <br/>
                <p class="lorem1 col-8 mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, aliquam maxime. Ipsam facilis quod repellat eum recusandae nobis error cumque dolores blanditiis hic, eaque earum temporibus quisquam, quae nam officiis quis consequatur maxime facere excepturi natus alias voluptate? 
                </p>
            </section>
            
        </div>
        
    </section>

    
    <img class="col-12 theme d-flex" src="theme8.jpg">
    
    <section class="container-fluid menudania col-12">

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
        </section>
    
    <section class="footer mx-auto col-12 container-fluid">

            <div class="footer2 col-9 mx-auto">
             <div class="row">

        <div class="kontakt  col-12 col-sm-6 d-lg-5 col-md-5">
            <h3 class="p-1">Kontakt</h3> 
            <i class="fas fa-phone p-1"> </i> +48 511 12 12 09 <br/>
            <i class="fa-solid fa-envelope p-1"></i> restauracja@op.pl <br/>
            <i class="fa-brands fa-instagram p-1"></i> Nasz instagram <br/>
            <i class="fa-brands fa-facebook-square p-1"></i> Nasz Facebook 
        </div>

        <div class="godzotwarcia  col-12 col-sm-6 col-md-5 d-lg-5">
            <h3>Godziny otwarcia</h3>
            Pn-Pt 11:00 - 22:00 <br/>
            Sobota 12:00 - 22:00 <br/>
            Niedziela 12:00 - 22:00 
        </div>

        <div class="menu1 shadow d-none d-md-block text-center col-2">
            <div class="option">Menu</div> 
            <div class="option">Galeria</div>
            <div class="option">Kontakt</div>  
            <div class="option">Zaloguj</div>
        </div>

        </div>
        

                

        
    </section>
    <div class="copy text-center">&copy Restauracja Pod Niebieskim Kurem 2021</div>


        

</body>
</html>