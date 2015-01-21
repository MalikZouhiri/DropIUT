<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Tableaux associatifs</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/tab_asso.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Tableaux associatifs</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?

$email_a["toto"] = "toto@univ-lille3.fr";
$email_a["titi"] = "titi@wanadoo.fr";
$email_a["tata"] = "tata@pareilquetiti.fr";
$email_a["tutu"] = "tutu@nulpart.com";

echo "<P>Tableau A = ",$email_a;

$email_b = array (
		  "toto" => "toto@univ-lille3.fr",
		  "titi" => "titi@wanadoo.fr",
		  "tata" => "tata@pareilquetiti.fr",
		  "tutu" => "tutu@nulpart.com"
		 );

echo "<P>Tableau B = ",$email_b;

echo "<P><FONT COLOR=\"red\"> La case tata du tableau B contient\n";
echo "la valeur ",$email_b["tata"],"</FONT>\n";

?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Dans un tableau associatif, les cases ne sont plus numérotées
    mais repérées par une étiquette qui est une chaîne de caractères
    quelconques.
<LI> On ne peut pas afficher directement le contenu d'un tableau
    associatif (voir les boucles dans la partie <EM>structures de
    contrôle</EM>).
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
