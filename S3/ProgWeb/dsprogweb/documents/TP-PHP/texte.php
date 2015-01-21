<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Récupérer des informations dans un fichier</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/texte.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Récupérer des informations dans un fichier</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php

$fcontents = file("infos.txt");

echo "<TABLE CELLSPACING=\"0\" BORDER=\"1\" CELLPADDING=\"3\">\n";
while ( list( $line_num, $line ) = each( $fcontents ) ) {

  preg_match("/(.*)=(.*)/",$line,$tab);
  $intitule = $tab[1];
  $valeur   = $tab[2];
  
  echo "<TR><TH ALIGN=\"left\">$intitule</TH><TD>$valeur</TD></TR>\n";

}
echo "</TABLE>\n";

?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> La fonction <TT>preg_match</TT> permet de tester une expression régulière sur une chaîne
et de récupérer les éventuelles valeurs capturées.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
