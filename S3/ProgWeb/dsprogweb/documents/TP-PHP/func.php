<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Une fonction</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/func.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Une fonction</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
$victoires = array (
		    "Bastia" => 11,
		    "Marseille" => 8,
		    "PSG" => 9
		    );

$nuls = array (
	       "Bastia" => 5,
	       "Marseille" => 5,
	       "PSG" => 6
	       );

$defaites = array (
		   "Bastia" => 10,
		   "Marseille" => 13,
		   "PSG" => 11
		   );

function Points($v,$n,$d) {
  return(3*$v + $n);
}

echo "<TABLE BORDER=1>\n";
while (list($nom,$v) = each($victoires)) {
  echo "<TR><TH>$nom</TH><TD>";
  echo Points($victoires[$nom],$nuls[$nom],$defaites[$nom]);
  echo "</TD></TR>\n";
}
echo "</TABLE>\n";
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Uitiliser le mot-clef <TT>return</TT> pour renvoyer le résultat
    de la fonction.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>



