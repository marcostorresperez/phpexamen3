<?php
function escriureTresNumeros($n1,$n2,$n3){

    $fp=fopen("dadesExercici01.txt","a+");

    fwrite($fp,$n1.PHP_EOL);
    fwrite($fp,$n2.PHP_EOL);
    fwrite($fp,$n3.PHP_EOL);

    fclose($fp);

}

escriureTresNumeros(1,2,3);


?>


<?php
function obtenirSuma($ruta){
    $suma=0;
    $fp=fopen("$ruta","r");
    while(!feof($fp)){
        $linea=fgets($fp);
        @$suma=$suma+$linea; 

    }
    fclose($fp);
    return $suma;
}
$ruta="dadesExercici01.txt";
$resultado=obtenirSuma($ruta);
echo "El resultado de la suma es ".$resultado;
?>

<?php
function obtenirArrNum($ruta){
    $array=array();

    $i=0;
    $fp=fopen("$ruta","r");

    while(!feof($fp)){
        $linea=fgets($fp);
        $array[$i]=$linea;

        $i++;  

    }

    fclose($fp);
    return $array;

}

$arrayRes=obtenirArrNum("dadesExercici01.txt");


?>
