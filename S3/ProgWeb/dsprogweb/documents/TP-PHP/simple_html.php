<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Affichage de code HTML en PHP</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/simple_html.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Affichage de code HTML en PHP</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
echo ("<I>Re-bonjour</I> le monde !<BR>\n");
echo ("Cet affichage est <U>toujours</U> produit par <BLINK>PHP</BLINK>,<BR>\n");
echo ("il contient cette fois des <FONT COLOR=\"red\">balises HTML</FONT>.\n");
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> On peut mettre des balises HTML dans les affichages PHP.
<LI> Prendre garde aux guillemets qui délimitent les chaînes de
    caractères en PHP : les guillemets HTML doivent être précédés d'un
    backslash.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
