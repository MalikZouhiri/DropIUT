<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Boucles pour et tableaux</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/pour_tab.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>


</div>
</DIV>
<DIV CLASS="page">
<H1>Boucles pour et tableaux</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
$tab = array("P","H","P",3);
for ($i=0 ; $i<4 ; $i++) {
  echo "<P> La case $i contient la valeur $tab[$i]\n";
}
echo "<P> <FONT COLOR=\"red\"> Le tableau contient ";
echo count($tab);
echo " cases.</FONT>\n";
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> La boucle commence à 0, puis on va de 1 en 1 jusqu'à atteindre la
    taille du tableau.
<LI> La fonction <TT>count</TT> fournit la taille d'un tableau.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
