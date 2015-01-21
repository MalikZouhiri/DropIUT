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
<LI> voir le <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/rssplus.php.src">code de cette page</A>
<LI> retour à la page des <A HREF="http://www.grappa.univ-lille3.fr/~torre/Enseignement/TPs/PHP/">Travaux pratiques PHP</A>
<LI> retour à la page de <A HREF="http://www.grappa.univ-lille3.fr/~torre/">Fabien Torre</A>
</UL>
</DIV>
</DIV>
<DIV CLASS="page">

<?php

require_once 'magpierss/rss_fetch.inc'; // voir aussi http://pear.php.net/package/XML_RSS

$urls = array(
	      '' => '',

	      '-- Infos --'        => '',

//	      'AFP'                => 'http://www.afp.com/francais/rss/stories.xml',
	      'Euronews'           => 'http://www.euronews.net/rss/euronews_fr.xml',
	      'Info Climat (Nord)' => 'http://www.infoclimat.fr/stations-meteo/rss.php?type=obs_calme&region=59,62',


	      '-- Journaux --' => '',

	      'L Equipe'       => 'http://www.lequipe.fr/Xml/Football/Titres/actu_rss.xml',
	      'Le Monde'       => 'http://www.lemonde.fr/rss/sequence/0,2-3208,1-0,0.xml',
	      'Libération'     => 'http://www.liberation.fr/rss.php',
//	      'Tennis' => 'http://r2s2.futurs.inria.fr/annotate-jsp?ident=train_1532b5b743ec2a&url=http%3A%2F%2Fwww.lequipe.fr%2FTennis%2Findex.html&rssTitle=Tennis',	

	      '-- Documentation --' => '',

	      'ADBS'                => 'http://www.adbs.fr/site/adbs.rss',
	      'BlogOKat'            => 'http://blogokat.canalblog.com/rss.xml',
	      'Figoblog'            => 'http://www.figoblog.org/backend.php?format=rss092documents&charset=iso-8859-1',
	      'Mael Le Hir'         => 'http://mael.le.hir.free.fr/blog/wp-rss2.php',
//	      'SFSIC'               => 'http://www.sfsic.org/portail/backend.php',
	      'Urfist'              => 'http://urfistinfo.blogs.com/urfist_info/index.rdf',

	      'Annu GIDE'           => 'http://www.grappa.univ-lille3.fr/~torre/Enseignement/Master-GIDE/Annuaire/rss.php',


	      '-- Archives --'  => '',

	      'Sous La Poussiere' => 'http://www.souslapoussiere.org/blog/rss.php',


	      '-- Films --'   => '',

	      'Cinema France' => 'http://www.cinema-france.com/actualite.xml',
	      'Ecran Large'   => 'http://www.ecranlarge.com/rss/news.php',


	      '-- Informatique --' => '',

	      'Framasoft'          => 'http://www.framasoft.net/backend.php3?id_rubrique=338',
	      'Olivier Bousquet'   => 'http://ml.typepad.com/machine_learning_thoughts/index.rdf',
	      'Interstices'        => 'http://interstices.info/feed/Rss2.jsp?id=c_13634',

	      );



if (isset($_POST['source'])) {
  $source = $_POST['source'];
} else {
  $source = '';
}

$urlsource = $urls[$source];

if ($urlsource != '') {

  $rss = fetch_rss($urlsource);
  $title = utf8_encode($rss->channel['title']);
  $description = utf8_encode($rss->channel['description']);

  echo "<H1>$title</H1>\n";

  echo "<div class=\"presentation\">\n";
  echo "Cette page est produite en utilisant <a href=\"http://magpierss.sourceforge.net/\">MagpieRSS 0.72</a>";
  echo " et à partir du fil RSS du site\n";
  echo "<a href=\"".$rss->channel['link']."\">$title</a> :\n";
  echo "« <em>$description</em> ».\n";
  echo "</div>\n";

} else {

  echo "<H1>PHP et RSS</H1>\n";

  echo "<div class=\"presentation\">\n";
  echo "Veuillez choisir un fil dans la liste ci-dessous.\n";


  if (isset($_POST['source'])) {
    echo "<br><em>Et pas un titre de rubrique !!!</em>\n";
  }


  echo "</div>\n";

}

echo "<form action=\"\" method=\"post\">\n";
echo "<input type=\"submit\" value=\"choisir ce fil :\">\n";
echo "<select name=\"source\" onChange=\"submit()\">\n";
while (list($nom,$url) = each($urls)) {
  echo "<option value=\"$nom\"";
  if ($nom == $source) {
    echo ' SELECTED';
  }
  echo">$nom\n";
}
echo "</select>\n";
echo "</form><br>\n";


if ($urlsource != '') {

  foreach ($rss->items as $item) {
    $title = utf8_encode($item['title']);
    $url   = $item['link'];
    $text  = utf8_encode($item['description']);
    echo "<div class=\"algorithm\">\n";
    echo "<H1>$title</H1>\n";
    echo $text;
    echo "<div class=\"suite\"><a class=\"liencorrection\" href=$url>voir le détail</a></li></div>\n";
    echo "</div>\n";
  }
}

?>

<br /><br />
</div>
</body>
</html>
