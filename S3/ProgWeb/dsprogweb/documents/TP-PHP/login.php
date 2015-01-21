<?php
function isIdentified ($l,$m) {
  return TRUE;
}
if (isset($_POST['login'])) {
  $login    = $_POST['login'];
  $password = $_POST['mdp'];
  if (isIdentified($login,$password)) {
    session_set_cookie_params(10800); // identification pour 3 heures
    session_name('FTTPPHP');
    session_start();
    $_SESSION['login']    = $login;
    $_SESSION['password'] = $password;
    $message = "Bonne visite !\n";
  }
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>Login</TITLE>
<link REL="stylesheet" TYPE="text/css"
      HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/login.php.src">code de cette page</A>

<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>

<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">
<H1>Page de login</H1>
<BR>
<BR>
<CENTER>
<?php
if (isset($message)) {
  echo $message;
} else {
  echo "<FORM ACTION=\"login.php\" METHOD=\"POST\">\n";
  echo "Identifiant : <INPUT TYPE=\"text\" NAME=\"login\"><br />\n";
  echo "Mot de passe : <INPUT TYPE=\"text\" NAME=\"mdp\">\n";
  echo "<INPUT TYPE=\"submit\">\n";
  echo "</FORM>\n";
}

?>
</CENTER>
<BR>
<BR>
<!--
<OL>
<LI> La fonction <TT>isset</TT> permet de déterminer si une variable
    est définie ou pas.
<LI> Les champs du formulaire deviennent automatiquement des variables
    PHP.
</OL>
-->
<BR><BR><BR>

</DIV>
</BODY>
</HTML>
