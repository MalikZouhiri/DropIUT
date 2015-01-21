<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><HTML>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>RSS</TITLE>
<link REL="stylesheet" TYPE="text/css" HREF="http://www.grappa.univ-lille3.fr/~torre/site.css">
</HEAD>
<BODY>
<DIV CLASS="menu">
<DIV CLASS="partmenu">
<UL>
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/rss.php.src">code de cette page</A>
<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>
<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">

<?php

require_once 'magpierss/rss_fetch.inc'; // voir aussi http://pear.php.net/package/XML_RSS

$rss   = fetch_rss('http://www.liberation.fr/rss.php');
$title = utf8_encode($rss->channel['title']);
$description = utf8_encode($rss->channel['description']);

echo "<H1>$title</H1>\n";

echo "<div class=\"presentation\">\n";
echo "Cette page est produite en utilisant <a href=\"http://magpierss.sourceforge.net/\">MagpieRSS 0.72</a>";
echo " et à partir du fil RSS du site\n";
echo "<a href=\"",$rss->channel['link'],"\">$title</a> :\n";

echo "« <em>$description</em> ».\n";
echo "</div>\n";

echo "<ul>\n";

foreach ($rss->items as $item) {

  $title = utf8_encode($item['title']);
  $url   = $item['link'];

  echo "<li><a href=$url>$title</a></li>\n";

}

echo "</ul>\n";

?>

<br /><br />
</div>
</body>
</html>
