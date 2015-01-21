<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><HTML>
<HEAD>
<?php
$fichier = $_GET['fichier'];
$code_retour= 'retour à la page du <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">TP PHP</A>';

echo "<TITLE>Source de $fichier</TITLE>\n";
?>

<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<meta NAME="author" CONTENT="Fabien Torre">
<link REL="stylesheet" TYPE="text/css" HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
<link REL="shortcut icon" HREF="http://www.grappa.univ-lille3.fr/~torre/Images/ft.ico" TYPE="image/ico">
</head>
<body VLINK="#0000CD">
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> <?php echo $code_retour ?>
<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
echo "<H1>Source de $fichier</H1>\n";
echo "<PRE>\n";
if (ereg('/',$fichier)) {
  echo "Pas de fichier $fichier";
} else {
  $fcontents = file( $fichier );
  while ( list( $line_num, $line ) = each( $fcontents ) ) {
    echo "<b>$line_num:</b> ";
    if (preg_match("/^<!--(.*)-->$/",$line,$matches)) {
      echo htmlspecialchars('<!--');
      echo "<B><FONT COLOR=\"#FF0000\">";
      echo htmlspecialchars($matches[1]);
      echo '</FONT></B>';
      echo htmlspecialchars("-->\n");
    } else {
      echo htmlspecialchars($line);
    }
  }
}
echo "</PRE>\n";

?>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</DIV>
</BODY>
</HTML>
