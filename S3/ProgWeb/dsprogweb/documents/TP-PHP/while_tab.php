<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Boucle while et tableaux associatifs</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/while_tab.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Boucle while et tableaux associatifs</H1>
<BR>
<BR>
<CENTER>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
$email = array (
		"toto" => "toto@univ-lille3.fr",
		"titi" => "titi@wanadoo.fr",
		"tata" => "tata@pareilquetiti.fr",
		"tutu" => "tutu@nulpart.com"
		);

while (list($nom,$mail) = each($email)) {
  echo "$nom (<A HREF=\"mailto:$mail\">$mail</A>)<BR>\n";
}
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> La fonction <TT>each</TT>, associée à une boucle <TT>while</TT>
    permet de parcourir les éléments d'un tableau associatif.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>
