<form method="POST" action="processaFormulariContacte.php">
    <br/>
    <span>Nom y Cognoms</span>
    <span><input id="nom" name="nom" type="text" /></span>
    <br/>
    <br/>

    <span>¿Practiques algún esport?</span>
    <br/>
    <span><input id="logic" name="logic" type="radio"
                 value="SI">SI</span>
    <br/>
    <span><input id="logic" name="logic" type="radio"
                 value="NO">NO</span>
    <br/>
    <p>Indica quin:</p>
    <span><input id="futbol" name="esport" type="checkbox" value="futbol">Futbol</span><br/>
    <span><input id="basket" name="esport" type="checkbox" value="basket">Basket</span><br/>
    <span><input id="ciclisme" name="esport" type="checkbox" value="ciclisme">Ciclisme</span><br/>
    <span><input id="atletisme" name="esport" type="checkbox" value="atletisme">Atletisme</span><br/>
    <span><input id="Handbol" name="esport" type="checkbox" value="handbol">Handbol</span><br/>
    <span><input id="tenis" name="esport" type="checkbox" value="tenis">Tenis</span><br/>
    <span><input id="pilota" name="esport" type="checkbox" value="pilota">Pilota Valenciana</span>s<br/>
    <span><input id="" name="esport" type="checkbox" value="hockei">Hockei</span>
    <br/>
    <br/>
    <span><label for="elegix">Selecciona el teu esport preferit</label><br></span>
    <select id="elegix" name="elegix">
        <option value="" selected="selected"></option>
        <option value="futbol">Futbol</option>
        <option value="basket">Basket</option>
        <option value="tenis">Tenis</option>
        <option value="atletisme">Atletisme</option>
    </select>
    <br/>
    <p>¿Cuantes hores li dediques a la setmana als esports?</p>
    <span><input id="number" name="number" type="number">hores</span>
    <br/>
    <br/>
    
    <span>¿Quin esport es el que mes practiques?</span><br/>
    <span><input id="tema" name="tema" type="radio"
                 value="Futbol">Futbol</span><br/>
     <span><input id="tema" name="tema" type="radio"
                 value="Basket">Basket</span><br/>
     <span><input id="tema" name="tema" type="radio"
                 value="Tenis">Tenis</span>
                 <br/>
                  <span><input id="envia" name="envia" type="submit" value="Envia Formulari"/></span>
</form>