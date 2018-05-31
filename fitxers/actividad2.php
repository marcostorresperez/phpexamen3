<?php
function copiaFitxer($ruta){

    $fp=fopen($ruta,"r");
    $fp2=fopen("fitxerCopia.txt","w");

    while(!feof($fp)){
        $linea=fgets($fp);
        fwrite($fp2,$linea);


    }
    fclose($fp);
    fclose($fp2);

}

$ruta="dadesExercici01.txt";
copiaFitxer($ruta);

?>


<?php
function numeraFitxer($ruta){
    $fp=fopen($ruta,"r");
    $fp2=fopen("fitxerNumerat.txt","w");
    $i=0;

    while(!feof($fp)){
        $linea=fgets($fp);
        fwrite($fp2,$i."-".$linea);
        $i++;
    }
    fclose($fp);
    fclose($fp2);

}

$ruta="simarro.txt";
numeraFitxer($ruta);


?>

<?php
function retalla5($ruta){
    $fp=fopen($ruta,"r");
    $fp2=fopen("fitxerRetallat.txt","w");

    while(!feof($fp)){
        $linea=fread($fp,5);
        echo $linea;
        fwrite($fp2,$linea);

    }
    fclose($fp);
    fclose($fp2);

}
$ruta="simarro.txt";
retalla5($ruta);

?>


