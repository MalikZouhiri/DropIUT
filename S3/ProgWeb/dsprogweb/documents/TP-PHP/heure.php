<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>PHP donne l'heure</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/heure.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>PHP donne l'heure</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
setlocale(LC_TIME,"fr_FR");
echo (strftime ("<H3>Ici, nous sommes le %A %d %B, "));
echo (strftime ("il est %H h %M min %S sec.</H3>\n"));
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Dans le menu <TT>Affichage</TT> de Firefox,
    observer le source de cette page.
<LI> Utiliser le bouton <TT>Recharger</TT> de Firefox et observer les
    différences.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
