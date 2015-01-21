<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Parsing XML à la SAX</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/xml-sax-b.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</div>
</DIV>
<DIV CLASS="page">
<H1>Parsing XML à la SAX</H1>
<BR>
<BR>
<CENTER>

<?php

$html_associe_o = array (

		   'LISTE_PERSONNES' => '<HTML><BODY>',
		   'PERSONNE'        => '<P>',
		   'PRENOM'          => '<B>',
		   'NOM'             => '',
		   'NAISSANCE'       => '<EM>'
);


$html_associe_f = array (

		   'LISTE_PERSONNES' => '</BODY></HTML>',
		   'PERSONNE'        => '</P>',
		   'PRENOM'          => '',
		   'NOM'             => '</B></FONT>',
		   'NAISSANCE'       => '</EM>'
);



$file = "annuaire.xml";






function startElement($parser, $name, $attrs) {

  global $html_associe_o;


  print $html_associe_o[$name];
  print "\n";

  if ($name == 'PERSONNE') {

    if ($attrs['SEXE'] == 'garcon') {
      print "<FONT COLOR=\"blue\">";
    } else {
      print "<FONT COLOR=\"pink\">";
    }

  }

}




function endElement($parser, $name) {

  global $html_associe_f;

  print $html_associe_f[$name];
  print "\n";

}

function characterData($parser, $data) {

  print $data; // attention retour chariot partout

}

$xml_parser = xml_parser_create();

xml_set_element_handler($xml_parser, "startElement", "endElement");
xml_set_character_data_handler($xml_parser, "characterData");

if (!($fp = fopen($file, "r"))) {
  die("could not open XML input");
}
while ($data = fread($fp, 4096)) {
  if (!xml_parse($xml_parser, $data, feof($fp))) {
    die(sprintf("XML error: %s at line %d",
		xml_error_string(xml_get_error_code($xml_parser)),
		xml_get_current_line_number($xml_parser)));
  }
}
xml_parser_free($xml_parser);
?>

</CENTER>

<BR><BR><BR>
</DIV>
</BODY>
</HTML>
