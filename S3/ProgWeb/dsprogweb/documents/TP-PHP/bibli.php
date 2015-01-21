<?php

//
// PROCEDURE EN  CHARGE DE L'ENTETE ET DU TITRE
//

function EnteteTitrePage ($titre) {

  // en-tete HTML

  echo "<HTML>\n";
  echo "<HEAD>\n";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
  echo "<TITLE>$titre</TITLE>\n";

  echo "</HEAD>\n";

  echo "<BODY>\n";

  echo "<A NAME=\"haut\"><BR></A>\n";


  // cadre principal, haut de page

  echo "<FONT FACE=\"helvetica\">\n";

  echo "<FONT COLOR=\"#33CCFF\" FACE=\"helvetica\"><B>\n";
  echo "M2 GIDE de Lille 3\n";
  echo "</B></FONT>\n";

  echo "<HR>\n<BR>\n";

  // cadre principal, titre

  echo "<CENTER>\n";
  echo "<FONT FACE=\"helvetica\" SIZE=\"+3\" COLOR=\"#385CA8\">Master GIDE\n";
  echo "<BR><BR>$titre</FONT>\n";
  echo "</CENTER>\n";

  echo "<BR><BR><BR>\n";

}



//
// PROCEDURE EN CHARGE DU PIED DE PAGE
//

function PiedDePage () {

  echo "</FONT>\n";

  echo "<BR><BR><BR>\n";

  echo "<HR>\n";

  echo "<TABLE WIDTH=\"100%\"><TR>\n";

  echo "<TD ALIGN=\"left\" VALIGN=\"top\"><SMALL>\n";

  echo "retour à la page des <A HREF=\"http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/\">Travaux pratiques PHP</A><BR>\n";

  echo "retour à la page de <A HREF=\"http://www.grappa.univ-lille3.fr/~torre/\">Fabien Torre</A>\n";

  echo "</SMALL></TD>\n";

  echo "<TD ALIGN=\"right\">\n";
  echo "<a href=\"#haut\">haut</a>";
  echo "</TD></TR></TABLE>\n";

  echo "</BODY>\n";
  echo "</HTML>\n";

}



