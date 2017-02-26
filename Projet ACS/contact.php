<html>

<head>
	<meta charset ="character_set">
	<link href="S.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>

</head>

<body>
		<!-- --------------------------- Icones pour les réseaux --------------------------  -->
<div id="reseaux">
  <li align="right">

	<a href="http://twitter.com" class="boutton-share" data-via="twitter.com">
	<section class="invert">
	<img class="reseau" src="twitter.png" title="twitter"/>
	</section>
	</a>
	</br>

	<a href="http://facebook.com" class="boutton-share" data-via="http://facebook.com">
	<section class="invert">	
	<img class="reseau" src="facebook_1.png" title="facebook"/>
	</section>
	</a>
	</br>

	<a href="https://instagram.com" class="boutton-share" data-via="https://instagram.com">
	<section class="invert">	
	<img class="reseau" src="instagram.png" title="instagram"/>
	</section>
	</a>
	</br>
	
	<a href="https://plus.google.com/" class="boutton-share" data-via="https://plus.google.com/">
	<section class="invert">	
	<img class="reseau" src="google_plus.png" title="Google +"/>
	</section>
	</a>
	</br>

  </li>
</div>
	<!-- --------------------------- bannière---------------------------  -->



<div id="header1">
<h1 align = "center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;N&nbsp&nbsp;&nbsp;&nbsp;T&nbsp&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;T</h1>
</font></font></font>
<div id="menu" class="menu" ><ul> 

  <li><a href="site.html">Home</a></li>
 <li><a href="page.html">Contacts</a></li>
  <li><a href="apropos.html">A propos</a></li>
</ul>
</div>
</br>
</div>

	<!-- ---------------------------corps ---------------------------  -->
<div id="corps">

<form method = "post" action="contact.php">
<p> Les champs obligatoires sont suivis par *.</p>


	<h2>Informations de contact</h2>

	
<p classe="centre">
Civilité<BR> 
<label for="Monsieur">Monsieur</label>           
<input type="radio" name="Civilité" value="Monsieur" id="Monsieur"/><br/>
<label for="Madame">Madame</label>           
<input type="radio" name="Civilité" value="Madame" id="Madame"/>
</p>
	
	<div>
	<label for = "name">nom:</label>
	<input type "text" name="Nom"id ="Nom" required="required" align="center"<it> *</it></input>
	</div>
	
	
	<div>
	<label for = "courriel">courriel:</label>
	<input type = "email" name="email" id = "Courriel"required="required" align="center"<it> *</it></input>
	</div>

	

	<h2>Note</h2>

		<div>
		   <p>
 		<label for="Notes">Note</label>
		 <select name="Note" id="Note" name="Note">
   	    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
    	</select>
  		  </p>
		</div>		
	
                </div>

<h3>
<label for="body_2">Commentaire</label> 
</h3>

<div>

<div class="phylactere left floatright">
<textarea id="body_2" name="body" cols="74" rows="6" name="Commentaire"></textarea>
</div>
</div>
</br>
</br>
<input type="reset" value="Annuler" align="left"></input>
<input type="submit" value="Envoyer"></input>
</br>



<div id="footer">
<p><small><center>- Projet HTML Louise COURANT, Celine BOUALAVONG, Laure BUDAN DE RUSSE - </center></small></p></div>


<?php
		
		if(isset($_POST["Civilité"]))
		{
			echo("<b>Vous êtes un</b> ".$_POST["Civilité"]."<br />");
		}
		
		if(isset($_POST["Nom"]))
		{
			echo("<b>Vous vous appellez </b> ".$_POST["Nom"]."<br />");
		}
		
		if(isset($_POST["email"]))
		{
			echo("<b>Votre e-mail est :</b> ".$_POST["email"]."<br />");
			$email = $_POST['email'];
			/*
			on envoie un email a la personne

echo "Un message vous a été envoyé";
mail($email, "Message de Sisley", "Nous avons bien pris en compte votre commentaire");*/
		}

		if(isset($_POST["Note"]))
		{
			echo("<b>Vous nous avez donné la note de : </b> ".$_POST["Note"]."<br />");
		}

		if(isset($_POST["Commentaire"]))
		{
			echo("<b>Commentaire : </b></br> ".$_POST["Commentaire"]."<br />");
		}
		

// Si on a le nom, on se connecte à la bdd et on la met à jour
if(isset($_POST["Nom"]))
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("html");

$insere="INSERT INTO Commentaires VALUES (NULL, '".$_POST["Civilité"]."', '".$_POST["Nom"]."', '".$_POST["email"]."', '".$_POST["Note"]."', '".$_POST["Commentaire"]."')";
$newSql=mysql_query($insere);
mysql_close();

}

?>

</body>
<script type="text/javascript" src="script.js"></script>
</html>
