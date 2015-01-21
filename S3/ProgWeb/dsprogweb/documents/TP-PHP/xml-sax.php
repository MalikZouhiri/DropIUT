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

<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/xml-sax.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>

</div>
</DIV>
<DIV CLASS="page">
<H1>Parsing XML à la SAX</H1>
<BR>
<BR>
<PRE>

<?php

$file = "annuaire.xml";

$depth = 0;

function startElement($parser, $name, $attrs) {
  global $depth;
  for ($i = 0; $i < $depth ; $i++) {
    print "  ";
  }
  print "$name\n";
  $depth++;
}

function endElement($parser, $name) {
  global $depth;
  $depth--;
  for ($i = 0; $i < $depth ; $i++) {
    print "  ";
  }
  print "/$name\n";

}

function characterData($parser, $data) {
  global $depth;

  for ($i = 0; $i < $depth ; $i++) {
    print "  ";
  }

  print $data."\n";

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

</PRE>

<BR><BR><BR>
</DIV>
</BODY>
</HTML>
