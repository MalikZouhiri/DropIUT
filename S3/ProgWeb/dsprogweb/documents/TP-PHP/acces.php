<?php
function isIdentified ($l,$m) {
  return TRUE;
}
session_name('FTTPPHP');
session_start();
if ((isset($_SESSION['login'])) && (isset($_SESSION['password']))
 && (isIdentified($_SESSION['login'],$_SESSION['password']))) {
    $message = "Bonne visite $login !\n";
} else {
    $message = "Non, acc&egrave;s refus&eacute;.\n";
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Acc&egrave;</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/acces.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">
<H1>Page prot&eacute;g&eacute;e par identification</H1>
<BR>
<BR>
<CENTER>
<?php
echo $message;
?>
</CENTER>
<BR>
<BR>
<!--
<OL>
<LI> La fonction <TT>isset</TT> permet de déterminer si une variable
    est définie ou pas.
<LI> Les champs du formulaire deviennent automatiquement des variables
    PHP.
</OL>
-->
<BR><BR><BR>

</DIV>
</BODY>
</HTML>
