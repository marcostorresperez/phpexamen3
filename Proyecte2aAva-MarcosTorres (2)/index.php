<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>EXERCICI PHP</title>
        <link rel="stylesheet" href="css/estils.css"/>


        <?php
        if(!isset($_SESSION['tema'])){
            $_SESSION['tema']="blau";
        }
        switch($_SESSION['tema']){

            case 'roig':
                echo "<link rel=\"stylesheet\" href=\"css/roig.css\"/> ";
                break;

            case 'verd':
                echo "<link rel=\"stylesheet\" href=\"css/verd.css\"/> ";
                break;

            case 'blau':
                echo "<link rel=\"stylesheet\" href=\"css/estils.css\"/> ";
                break;

            default:
                echo "<link rel=\"stylesheet\" href=\"css/estils.css\"/> ";
                break;
        }

        ?>
        <?php
        if(isset($_POST['enviarform'])){
            $fp=fopen("include/passwd.txt","r");
            $encontrado=false;
            while(!feof($fp)){
                $linea=fgets($fp);                
                $array=explode(":",$linea);
                if($_POST['usuari']==$array[0] && $_POST['contrasenya']==$array[1]){       
                    $encontrado=true;
                    $usuario=$array[0];
                    $contrasenya=$array[1];
                }

            }
            if($encontrado==true){
                header('Location:index.php?login='.$usuario.'.'.$contrasenya.'');
            }else{
                header('Location:index.php?login=error');               
            }
        }
        ?>
    </head>
    <body>
        <div class="wrapper">
            <header class="cap">
                <?php
                include "include/header.php";
                ?>
            </header>
            <nav>
                <?php
                include "include/navegacio.php";
                ?>

            </nav>
            <section class="contingut">

                <div id="contenidorphp" style="background-color:white;">
                    <?php
                    if(isset($_GET['login'])){

                        $texto=$_GET['login'];
                        if($texto!='error' || $texto=''){
                            $array=explode(".",$texto);
                            echo '<h1>Hola! '.$array[0].'<p>';
                        }else{
                            echo '<p style=" position:absolute; margin-top: 410px; margin-left:210px;" >::Login incorrecte::</p>';
                            include "include/contingutInici.php";

                        }
                    }

                    ?>
                    <?php
                    if(!isset($_GET['login'])){
                        
                    
                    if(!isset($_SESSION['seccio'])){
                        $_SESSION['seccio']="inici";
                    }
                    $seccio = $_SESSION['seccio'];
                        if($seccio=="inici"){
                            include "include/contingutInici.php";

                        }
                        else if($seccio=="dades"){
                            include "include/contingutDades.php";
                        }
                        else if($seccio=="contacte"){
                            include "include/contingutContacte.php";
                        }
                    }
                    
                    ?>
                </div>
            </section>

            <footer class="peu">
                <?php
                include "include/footer.php";
                ?>

            </footer>
        </div>
    </body>
</html>