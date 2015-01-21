<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Affichage simple en PHP</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/simple.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</div>
</DIV>
<DIV CLASS="page">
<H1>Affichage simple en PHP</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
echo ("Bonjour le monde !\n");
echo ("Cet affichage est produit par PHP.\n");
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Pour insérer du PHP dans un document HTML, on peut utiliser les
    balises <TT>&lt;?php</TT> et <TT>?&gt;</TT> pour délimiter le code.
<LI> On utilise la fonction <TT>echo</TT> pour écrire un texte dans
    une page.
<LI> \n symbolise le passage à la ligne.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
