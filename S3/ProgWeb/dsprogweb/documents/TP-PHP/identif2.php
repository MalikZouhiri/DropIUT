<?php
if (($_SERVER['PHP_AUTH_USER']=="marcel") && ($_SERVER['PHP_AUTH_PW']=="bidule")) {
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

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/identif2.php.src">code de cette page</A>

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
  echo "Bravo, identification réussie.\n";
?>
</CENTER>

<BR><BR><BR>
</DIV>
</BODY>
</HTML>
<?php
} else {
  header("WWW-Authenticate: Basic realm='private'");
}
?>
