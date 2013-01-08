<!DOCTYPE html>
<html>
  <head>
    <title>Dogmazic - Ouvert pendant les travaux</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <LINK rel="stylesheet" type="text/css" href="tmp_index_files/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="tmp_index_files/jquerycyclelite.js"></script>
    <script type="text/javascript">
/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
/* ]]> */</script>
  </head>
  <body>
    <?php include 'inc/header.php'; ?>
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
        <h3>dogmazic v3 ?</h3>
        <div class="block_content">
          <p>Au cas où vous auriez loupé un épisode, le site dogmazic (<a href="http://blog.dogmazic.net">en savoir plus sur l'asso et le projet</a>) amorce actuellement la deuxième refonte majeure de son histoire.</p>
          <p>Bienvenue, donc, sur la page temporaire qui nous servira à communiquer pendant toute la durée des travaux.</p>
          <p>D'ici très peu de temps dogmazic sera à même d'offrir une plateforme digne de ce nom pour tout les musiciens publiant sous licence libre.</p>
          <p> Restez connectés, de nouvelles infos seront publiées quotidiennement sur ce site !</p>
        </div>
      </div>
      <div class="block">
        <h3>participer</h3>
        <div class="block_content">
          <p>Pour suivre la vie de l'asso :</p>
          <a href="http://blog.dogmazic.net"><img src="tmp_index_files/blog_logo.png" alt="logo blog"/></a>
          <p>Pour discuter de l'asso, du site et du libre en général :</p>
          <a href="http://forum.dogmazic.net"><img src="tmp_index_files/forum_logo.png" alt="logo forum"/></a>
          <p>Nouveau ? Par ici les <a href="http://user.dogmazic.net">inscriptions</a></p>
          <p>Vous pouvez également venir nous causer en direct sur irc sur <b>irc.freenode.net</b>, salon <b>#dogmazic</b></p>
          <p>Pour vous connecter il vous faut un client IRC (irssi, xchat, smuxi...), il existe également des solutions en ligne comme  <a href="http://en.irc2go.com/webchat/?net=freenode&room=dogmazic">ici !</a></p>
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
        <h3>soutenir l'asso</h3>
        <div class="block_content">
          <p> Quelques pistes :</p>
          <h4>Etre présent</h4>
          <p>Il y a bien des façons de soutenir l'association, à commencer par participer aux <a href="http://forum.dogmazic.net"> forums</a>
          <h4> Donner un coup de main</h4>
          <p>On commence a avoir des outils pour travailler ensemble (comme notre repos <a href="https://github.com/MusiqueLibre/Dogmazic">git</a>), si vous êtes grapistes, programmeur, ou que vous souhaitez simplement aider, faites le nous savoir en nous <a href="http://blog.dogmazic.net/?page_id=285">contactant</a></p>
          <h4>Faire un don</h4>
          <p>L'association a environ 3000 euros  de frais fixes par an ! Et il ne s'agit là que des serveurs et de quelques dépenses de bases (assurance, banque...) ! Votre soutient est vraiment crucial !</p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_donations">
          <input type="hidden" name="business" value="support@dogmazic.net">
          <input type="hidden" name="lc" value="FR">
          <input type="hidden" name="item_name" value="Association Musique Libre">
          <input type="hidden" name="no_note" value="0">
          <input type="hidden" name="currency_code" value="EUR">
          <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
          <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
          <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
          <a class="FlattrButton" style="display:none;" href="http://dogmazic.net/"></a>
          <noscript><a href="http://flattr.com/thing/150302/Help-us-free-the-music" target="_blank">
          <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript> 
          </form>
        </div>
      </div>
      <div class="block">
        <h3>mini roadmap</h3>
        <div class="block_content">
          <p><span class="icon">Q </span>Installer un nouveau forum </p>
          <p><span class="icon">Q </span>Installer un nouveau blog </p>
          <p><span class="icon">Q </span>Réouvrir les inscriptions</p>
          <p><span class="icon nok">S </span>Traduire les infos</p>
          <p><span class="icon nok">S </span>Donner accès aux morceaux</p>
          <p><span class="icon">Q </span>Mettre en place un Git des devs actuels</p>
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
