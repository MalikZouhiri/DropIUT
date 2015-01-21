<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Une procédure</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/proc.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Une procédure</H1>
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

function LigneMail($id,$ad) {
  echo "<TR>\n";
  echo "<TH>$id</TH>\n";
  echo "<TD><A HREF=\"mailto:$ad\">$ad</A></TD>\n";
  echo "</TR>\n";
}

echo "<TABLE BORDER=1>\n";
while (list($nom,$mail) = each($email)) {
  LigneMail($nom,$mail);
}
echo "</TABLE>\n";
?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</CENTER>
<BR>
<BR>
<OL>
<LI> Commencer par le mot-clef <TT>function</TT>, puis le nom de la
    procédure, puis les éventuels arguments de la procédure entre
    parenthèses.
</OL>

<BR><BR><BR>

</DIV>
</BODY>
</HTML>



