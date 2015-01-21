<?php
session_name('FTTPPHP');
session_start();
if (isset($_SESSION['prenom'])) {
  $prenom = $_SESSION['prenom'];
  $message = "D'ap&egrave;s le cookie associ&eacute; &agrave; votre session, vous &ecirc;tes $prenom !";
} else {
  $message  = "Je ne sais qui vous &ecirc;tes, passez d'abord par\n";
  $message .= "<A HREF=\"quietesvous.php\">cette page</A>.\n";
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Qui vous &ecirc;tes...</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/quivousetes.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">
<H1>Qui vous &ecirc;tes...</H1>
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
