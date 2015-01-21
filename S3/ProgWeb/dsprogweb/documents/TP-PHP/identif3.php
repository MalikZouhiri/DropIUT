<?php

// la liste des informations
$liste = array("Jean Némar/nemar/jjjj",
	       "Sophie Fonfec/fonfec/ssss",
	       "Yves Adrouille-Toultan/adrouille/yyyy");

// création des tableaux

for ($i=0;$i<count($liste);$i++) {

  $l = explode("/",trim($liste[$i]));

  $nom[$i]  = $l[0];  // identité réelle de l'utilisateur n°i
  $user[$i] = $l[1]; // identifiant de l'utilisateur n°iisur le système
  $pass[$i] = $l[2]; // mot de passe de l'utilisateur n°i
}

$nbusers = count($liste);

//  contrôle de l'identité

$ok = -1; // on démarre sans connaître l'utilisateur
for ($i=0;$i<$nbusers;$i++) {
  if (($_SERVER['PHP_AUTH_USER']==$user[$i]) && ($_SERVER['PHP_AUTH_PW']==$pass[$i])) {
    // on a reconnu un utilisateur -> on garde son numéro
    $ok=$i;
  }
}

// si l'identification a raté, $ok contient toujours -1
if ($ok==-1) {
  header("WWW-Authenticate: Basic realm='private'");
  return;
}
// si on arrive ici, c'est que l'identification a réussi
// et que $ok contient le numéro de l'utilisateur

?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Identification</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/identif3.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Identification</H1>
<BR>
<BR>
<CENTER>
<?php
echo "Bravo, identification réussie.<BR>\n";
echo "Vous êtes <EM>$nom[$ok]</EM>,\n";
echo "votre identifiant est <EM>$user[$ok]</EM>,\n";
echo "votre mot de passe est <EM>$pass[$ok]</EM>.<BR>\n";
?>
</CENTER>

<BR><BR><BR>
</DIV>
</BODY>
</HTML>
