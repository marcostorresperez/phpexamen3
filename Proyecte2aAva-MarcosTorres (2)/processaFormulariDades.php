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

            <br/>

            <?php
            $partit=$_POST['partit'];
            $contador=0;
            echo "Has vist esports en directe";
            while ($contador<$partit){  
                echo "<img src=\"images/whistle.png\" alt=\"imatge\"  width=\"5%\" id=\"pito\">";
                $contador++;          
            }
            echo $contador+" ";
            echo " vegades<br/>";
            ?>

            <br/>
            <?php     
            $textarea=$_POST['textarea'];
            $array=explode(" ", $textarea);
            echo "el teu comentari té ";
            $n=count ($array);
            echo "$n";
            echo " paraules";
            echo "<p>";
            for ($contador=0;$contador<$n;$contador++){

                echo "<span style=\"border:1px solid black; margin-left:2px; background-color:lightblue;\">".$array[$contador]." "."</span>";
            }
            echo "</p>";
            ?>
            <br/>




            <?php
            $estrella=$_POST['estrella'];

            switch($estrella){
                case 0:
                    echo "<img src=\"images/estrelles/star_05.png\" alt=\"imatge\" id=\"punt\">";
                case 1:
                    break;
                    echo "<img src=\"images/estrelles/star_15.png\" alt=\"imatge\" id=\"punt\">";
                    break;
                case 2:
                    echo "<img src=\"images/estrelles/star_25.png\" alt=\"imatge\" id=\"punt\">";
                    break;
                case 3:
                    echo "<img src=\"images/estrelles/star_35.png\" alt=\"imatge\" id=\"punt\">";
                    break;
                case 4:
                    echo "<img src=\"images/estrelles/star_45.png\" alt=\"imatge\" id=\"punt\">";
                    break;
                case 5:
                    echo "<img src=\"images/estrelles/star_55.png\" alt=\"imatge\" id=\"punt\">";
                    break;
                default:
                    echo "No has introducido ninguna calificación";
                    break;
            }
            ?>


            <br/>
            <div class="foto">

            </div>

        </div>
    </body>
    <footer class="peu">
        <?php
        include "include/footer.php";
        ?>
    </footer>
</html>