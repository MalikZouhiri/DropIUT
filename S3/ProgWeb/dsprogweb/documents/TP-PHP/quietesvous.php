<?php
if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
  session_name('FTTPPHP');
  session_start();
  $_SESSION['prenom'] = $prenom;
  $message = "<FONT COLOR=\"red\">Merci $prenom !</FONT> Votre prénom est enregistré pour une prochaine visite.\n";
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Qui &ecirc;tes vous ?</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/quietesvous.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">
<H1>Qui &ecirc;tes vous ?</H1>
<BR>
<BR>
<CENTER>
<?php
if (isset($message)) {
  echo $message;
} else {
  echo "<FORM ACTION=\"quietesvous.php\" METHOD=\"POST\">\n";
  echo "Prénom : <INPUT TYPE=\"text\" NAME=\"prenom\">\n";
  echo "<INPUT TYPE=\"submit\">\n";
  echo "</FORM>\n";
}

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
