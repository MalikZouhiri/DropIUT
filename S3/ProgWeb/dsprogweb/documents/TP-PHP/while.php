<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Une boucle while</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/while.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</div>
</DIV>
<DIV CLASS="page">
<H1>Une boucle while</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
$i = 10;
while ($i > 0) {
  echo "$i<BR>\n";
  $i--;
}
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Dans une boucle <TT>while</TT>, on ne précise que la condition
    sous laquelle la boucle est pousuivie.
<LI> Il faut initialiser la variable avant la boucle.
<LI> Il faut modifier la variable dans la boucle.
</OL>

<BR><BR><BR>

</BODY>
</HTML>
