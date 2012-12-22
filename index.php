<!DOCTYPE html>
<html>
  <head>
    <title>Dogmazic - Ouvert pendant les travaux</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <LINK rel="stylesheet" type="text/css" href="tmp_index_files/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="tmp_index_files/jquerycyclelite.js"></script>
  </head>
  <body>
    <header><h1 id="title">DOGMAZIC</h1><img src="tmp_index_files/banniere_main.png" alt="head_banner" id="banner"/><div id="values"><span class="label">libre</span>  <span class="label">militante</span>  <span class="label">associative</span>  <span class="label">écléctique</span>  <span class="label">sans-pub</span> <span id="values_date">since_2004</span> </div></header>
    <div id="main">
      <div id="flash">
        <h3>news flash</h3> <a id="more_identica" href="http://identi.ca/dogmazic">(identi.ca)</a>
        <?php
           include('tmp_index_files/rssreader/lib/rsslib.php');
           echo  RSS_Display('http://identi.ca/api/statuses/user_timeline/247889.rss', 5, false, true);
        ?>
      </div>
      <h2 id="content-main-title">dogma reste ouvert pendant les travaux !!</h2>
      <div class="block">
        <h3>wtf ?</h3>
        <div class="block_content">
          <p>Au cas où vous auriez loupé un épisode, le site dogmazic (<a href="http://blog.dogmazic.net">en savoir plus sur l'asso et le projet</a>) amorce actuellement la deuxième refonte majeure de son histoire.</p>
          <p>Bienvenue, donc, sur la page temporaire qui nous servira à communiquer pendant toute la durée des travaux.</p>
          <p>D'ici très peu de temps dogmazic sera à même d'offrir une plateforme digne de ce nom pour tout les musiciens publiant sous licence libre.</p>
          <p> Restez connectés, de nouvelles infos seront publiées quotidiennement sur ce site !</p>
        </div>
      </div>
      <div class="block">
        <h3>là où ça cause</h3>
        <div class="block_content">
          <p>Pour suivre la vie de l'asso :</p>
          <a href="http://blog.dogmazic.net"><img src="tmp_index_files/blog_logo.png" alt="logo blog"/></a>
          <p>Pour discuter de l'asso, du site et du libre en général :</p>
          <a href="http://forum.dogmazic.net"><img src="tmp_index_files/forum_logo.png" alt="logo forum"/></a>
        </div>
      </div>
      <div class="block">
        <h3>musique</h3>
        <div class="block_content">
          <p>Dogmazic est avant tout une archive avec plus de 50 000 morceaux.</p>
          <p>Pour le moment, ils ne sont pas accessible, mais on va bricoler un petit truc en attendant que la v3 soit prête !</p>
          <p>Un peu de patience, et désolé de vous priver de votre dose de musique libre ;-)</p>
        </div>
      </div>
      <div class="block">
        <h3>mini roadmap</h3>
        <div class="block_content">
          <p><span class="icon">Q </span>Installer un nouveau forum </p>
          <p><span class="icon">Q </span>Installer un nouveau blog </p>
          <p><span class="icon nok">S </span>Réouvrir les inscriptions</p>
          <p><span class="icon nok">S </span>Traduire les infos</p>
          <p><span class="icon nok">S </span>Donner accès aux morceaux</p>
          <p><span class="icon nok">S </span>Mettre en place un Git des devs actuels</p>
          <p><span class="icon nok">S </span>Installer <a href="http://www.loomio.org/">loomio</a></p>
          <p><span class="icon nok">S </span>Remonter les derniers messages du forum ici</p>
          <p><span class="icon nok">S </span>Remonter les derniers posts du blog ici</p>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $('#flash ul').cycle()
    </script>
  </body>
</html>
