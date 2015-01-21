<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Tri d'un tableau</TITLE>
<link REL="stylesheet" TYPE="text/css" HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">

<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/sort.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Tri d'un tableau</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php

$tab = array ("Roland","Christine","Alfred","Charles");
echo "<P>Tableau avant <TT>sort</TT> :\n";
for ($i=0 ; $i<count($tab) ; $i++) {
  echo $tab[$i],"\n";
}
echo "<BR>\n";
sort($tab);
echo "Tableau après <TT>sort</TT> :\n";
for ($i=0 ; $i<count($tab) ; $i++) {
  echo $tab[$i],"\n";
}
echo "<BR>\n";

$ages = array (
	       "toto" => 20,
	       "titi" => 30,
	       "tata" => 25,
	       "tutu" => 28
	       );

asort($ages);
echo "<P>\n";
while (list($nom,$age) = each($ages)) {
  echo "$nom a $age ans<BR>\n";
}

ksort($ages);
echo "<P>\n";
while (list($nom,$age) = each($ages)) {
  echo "$nom a $age ans<BR>\n";
}

?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> La fonction <TT>sort</TT> de PHP permet de trier des tableaux.
<LI> On utilise la fonction <TT>asort</TT> pour trier un tableau
    associatif suivant ses valeurs.
<LI> On utilise la fonction <TT>ksort</TT> pour trier un tableau
    associatif suivant ses clés.
<LI> Pour chacune de ces fonctions, il existe une fonction duale qui fait le tri en ordre inverse :
<TT>rsort</TT>, <TT>arsort</TT> et <TT>krsort</TT>.
<li> Enfin, on peut vouloir trier suivant un critère particulier, il existe pour cela
les fonctions <tt>usort</tt>, <tt>uasort</tt> et <tt>uksort</tt>. Ces fonctions prennent
un deuxième argument qui est le nom de la fonction à utiliser pour comparer deux éléments.
</li>
</OL>
<BR><BR><BR>

</DIV>
</BODY>
</HTML>



