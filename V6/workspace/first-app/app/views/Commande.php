
<html>
<Head><Title>Commande de mobile :</Title </Head>
<Body>
<?php
  require_once ('C:\xampp\htdocs\workspace\first-app\app\views\MenuGestionnaire.php');
       
?>
<h2>Commandez un mobile: </h2>

<br>
<table border=1 width=100% cellspacing=1 cellpadding=1> 

<tr><th>Téléphone</th><th>Prix</th><th>Poids</th></tr>

<tr><td>Samsung Galaxy S20</td><td>799€</td><td>163</td></tr>
<tr><td>Sony Xperia X3 Noir</td><td>499€</td><td>139</td></tr>
<tr><td>Alcatel</td><td>299€</td><td>163</td></tr>
<tr><td>Sony Xperia X3 Gris</td><td>499€</td><td>139</td></tr>

</table>
</center>
    <form method="post" action="\workspace\first-app\app\scripts\controllers\GestionCommande.php">
   <p>
       <label for="mobile">Choisissez le modèle souhaitez :</label><br />
       <select name="mobile" id="mobile">
           <optgroup label="Samsung">
               <option value="1">Samsung S20 Noir</option>
           </optgroup>
           <optgroup label="Sony">
               <option value="2">Sony Xperia X3 gris</option>
               <option value="4">Sony Xperia X3 noir</option>
           </optgroup>
           <optgroup label="Alcatel">
               <option value="3">Alcatel</option>
           </optgroup>
       </select>
   </p>
   <input type='number' name='nombreMobile'  placeholder="0" id='login' required >
   <p>
   <input type='submit' value='Commander' id='commander'>
</form>

</Body>
</html>





