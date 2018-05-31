




<h1>FORMULARI EXERCICI PHP</h1>

<img id="uno" src="images/futbol.png" style="width:15%; height:10%; float:left; margin-left:10px">
<h1 style=" display:inline-block; position:absolute; padding-left:45px;">ESPORTS</h1>
<br/>
<img id="dos" src="images/futbol.png" style="width:15%; height:10%; float:rigth;display:inline-block; padding-left:220px;margin-top:-15px;">
<?php
setlocale(LC_TIME,"es_ES");
echo '<p id="data">'.strftime("%A, %d de %B del %Y").'</p>';
?>
<div id="radios">
    <form id="colors" method="get" action="./include/processaTema.php">
        <span>Estils:</span>
        <span><input id="tema" name="tema" type="radio"
                     value="blau">Blau</span>
        <span><input id="tema" name="tema" type="radio"
                     value="verd">Verd</span>
        <span><input id="tema" name="tema" type="radio"
                     value="roig">Roig</span>
                     <span><input id="canvia" value="Canvia" name="submit" type="submit"></span>
    </form>
</div>