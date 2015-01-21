<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Tableaux simples</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">

<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/tab.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>


</div>
</DIV>
<DIV CLASS="page">
<H1>Tableaux simples</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?
$tab_a[0] = "P";
$tab_a[1] = "H";
$tab_a[2] = "P";
$tab_a[3] = 3;

echo "<P>Tableau A = ",$tab_a;

$tab_b = array("P","H","P",3);

echo "<P>Tableau B = ",$tab_b;

$tab_c[] = "P";
$tab_c[] = "H";
$tab_c[] = "P";
$tab_c[] = 3;

echo "<P>Tableau C = ",$tab_c;

echo "<P><FONT COLOR=\"red\"> La case 1 du tableau C contient\n";
echo "la valeur $tab_c[1]</FONT>\n"
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Il y a plusieurs manières de remplir un tableau.
<LI> La numérotation des cases du tableau commence à 0.
<LI> On ne peut pas afficher directement le contenu d'un tableau (voir
    les boucles dans la partie <EM>structures de contrôle</EM>).
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
