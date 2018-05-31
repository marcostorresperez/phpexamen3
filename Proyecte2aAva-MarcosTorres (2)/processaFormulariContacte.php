<?php
session_start();
?>

<!DOCTYPE html>
   <html>
    <head>
        <meta charset="utf-8"/>
        <title>EXERCICI PHP</title>
        <?php
        if(isset($_POST['tema'])){
            $tema=$_POST['tema'];
            if($tema=="Futbol"){
                echo '<link rel="stylesheet" type="text/css" href="css/futbol.css"/>';
            }
            else if($tema=="Basket"){
                echo '<link rel="stylesheet" type="text/css" href="css/basket.css"/>';
            }
            else if($tema=="Tenis"){
                echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/tenis.css\"/>";
            }
        }
        ?>
    </head>
    <header class="cap">
        <div>
            <?php
            include "include/header.php";
            ?>
        </div>
    </header>
    <body>
        <div class="php">
            <?php
            $nom=$_POST['nom'];
            if($nom==""){
                echo "<p>El teu nom es: </p>".$nom="Sense valor";
            }else {
                echo "El teu nom es ".$nom;
            }
            ?>

            <br/>

            <?php

            if(isset($_POST['logic'])){
                $logic=$_POST['logic'];
                echo "Practiques esport ".$logic;
            }else {
                $logic = "Sense valor";
                echo "Practiques: ".$logic;
            }
            ?>

            <br/>

            <?php
            $number=$_POST['number'];
            if($number==""){
                echo "Hores a la setmana practicades: ".$number="Sense valor";
            }else {
                echo "Hores a la setmana practicades: ".$number;
            }
            ?>

            <br/>

            <?php
            $esport=$_POST['esport'];
            if(isset($esport)==true){
                echo "Esports que practiques ".$esport; 
            }else {
                echo "Esports que practiques ".$esport="Sense valor";
            }
            ?>

            <br/>





            <br/>
            <div class="foto">
                <?php
                $elegix=$_POST['elegix'];
                if(isset($elegix)==true){
                    echo "El teu esport preferit es ".$elegix;
                }else{
                    echo "El teu esport preferit es ".$elegix="Sense valor"; 
                }
                echo "<br/><br/>";
                if($elegix=="futbol"){
                    echo "<img src=\"images/futbol.png\" alt=\"imatge\" id=\"select\">";
                } 
                if($elegix=="basket"){
                    echo "<img src=\"images/basket.png\" alt=\"imatge\" id=\"select\">";
                }
                if($elegix=="tenis"){
                    echo "<img src=\"images/tenis.png\" alt=\"imatge\" id=\"select\">";
                } 
                if ($elegix=="atletisme") {
                    echo"<img src=\"images/atletismo.png\" alt=\"imatge\" id=\"select\">";
                }

                ?>
            </div>

        </div>
    </body>
    <footer class="peu">
        <?php
        include "include/footer.php";
        ?>
    </footer>
</html>