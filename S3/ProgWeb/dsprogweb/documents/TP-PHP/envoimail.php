<?php

$connexion = mysql_connect('sql.free.fr','fabien.torre','monmotdepasse');
mysql_select_db('fabien.torre',$connexion);

if (isset($id)) {

  $requete  = "select mail from personnes where id=$id";
  $resultat = mysql_query($requete,$connexion);
  $personne = mysql_fetch_array($resultat);
  $adresse  = $personne['mail'];

  mail($adresse,'[M-GIDE] '.stripslashes($sujet),stripslashes($message));

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envoi d'un mail</title>
<link rel="stylesheet" type="text/css" href="http://www.grappa.univ-lille3.fr/~torre/site.css"/>
</head>
<body>
<div class="pagelarge">

<h1>Envoi d'un mail</h1>

<form action="envoimail.php" method="post">
<center>
<table>
<tr><th align="left">Destinataire</th><td><select name="id">
<?php

$requete = "select id,prenom,nom from personnes order by nom,prenom";

$resultat = mysql_query($requete,$connexion);

while ($personne = mysql_fetch_array($resultat)) {
  echo "<option value=\"$personne[id]\">";
  echo $personne['prenom'];
  echo ' ';
  echo $personne['nom'];
  echo "\n";
}

?>
</select>
</td></tr>
<tr><th align="left">Sujet</th><td><input type="text" name="sujet" size="40"></td></tr>
<tr><th align="left">Message</th><td><textarea name="message" cols="40" rows="10"></textarea></td></tr>
<tr><th colspan="2" align="left"><input type="submit" value="envoyer"></th></tr>
</table>
</center>
</form>
</div></body></html>
<?php

mysql_close($connexion);

?>

