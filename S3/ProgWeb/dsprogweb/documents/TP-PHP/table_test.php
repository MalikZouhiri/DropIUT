<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Utilisation d'une classe</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/table_test.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</DIV>
</DIV>
<DIV CLASS="page">
<H1>Utilisation d'une classe</H1>
<BR>
<BR>
<CENTER>


<?php

require('table_class.php');

$table = new Table;

$table->add_row();
$table->add_cell("Résultats",2);

$table->add_row();
$table->add_cell("&Eacute;tudiants");
$table->add_cell("Notes");

$table->add_row();
$table->add_cell("Toto");
$table->add_cell(18);

$table->add_row();
$table->add_cell("Titi");
$table->add_cell(12);

$table->set_value("border", 1);

echo $table->output_table();

?>

</CENTER>

<BR><BR><BR>
</DIV>
</BODY>
</HTML>
