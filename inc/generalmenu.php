<?php header('Content-type: text/html; charset=utf-8'); ?>

<script type="text/javascript">
  $(function(){
    //FLATTR
    var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
    t.parentNode.insertBefore(s, t);

    //MENU
    var $oe_menu        = $('#oe_menu ');
    var $oe_menu_items  = $oe_menu.children('li');
    
    //displaying drop down menu properly 
    $oe_menu_items.children('.oe_drop').each(function(){
      parentheight = $(this).parent().outerHeight();
      offset = $(this).offset();
      //get the window width and remove block's padding to have the proper size
      window_width = $(window).width() - parseInt($(".oe_drop").css("padding-left").replace(/[^-\d\.]/g, '')) - parseInt($(".oe_drop").css("padding-right").replace(/[^-\d\.]/g, ''));
      $(this).css({'left' : -offset.left , 'top' : parentheight , 'width' : window_width }).hide();
    });

    //main toggle function
    $(".menu_more_button").click(function(){
        $(this).siblings('.oe_drop').removeClass('disabled').slideToggle(200, function(){$(this).addClass('disabled')});
        $('.oe_drop.disabled').slideUp(200);
    });

    //slide all up when it loses focus
    $oe_menu.mouseleave(function(){
        $('.oe_drop').slideUp(200);
    })
  });
</script>

<div id="oe_wrapper">
    <ul id="oe_menu" class="oe_menu">
        <li class="oe_menu_list">
            <a href="http://dogmazic.net" class="oe_menu_link">dogmazic.net</a>
        </li>
        <li class="oe_menu_list">
            <a href="http://blog.dogmazic.net" class="menu_more oe_menu_link">Blog</a><input class="menu_more_button disabled"  type="button" value="+"/>
            <div class="oe_drop">
                <ul class="oe_sub_menu">
                    <li class="oe_heading">
                        Derniers articles :
                    </li>
                </ul>
                <?php
                  require_once('rsslib.php');
                  echo  rss_reader('http://blog.dogmazic.net/?feed=rss2', 4);
                 ?>
            </div>
        </li>
        <li class="oe_menu_list">
            <a href="http://forum.dogmazic.net" class="oe_menu_link menu_more">Forum</a><input class="menu_more_button disabled" type="button" value="+"/>
            <div class="oe_drop" id="menu_forum">
                <ul class="oe_sub_menu">
                    <li class="oe_heading">
                        Derniers messages :
                    </li>
                </ul>
                <?php
                  require_once('rsslib.php');
                  echo  rss_reader('http://forum.dogmazic.net/index.php?p=/discussions/feed.rss', 5);
                 ?>
            </div>
        </li>
        <li class="oe_menu_list">
            <a href="http://en.irc2go.com/webchat/?net=freenode&room=dogmazic" target="_blank" class="oe_menu_link menu_more">#IRC <img alt="external link" src="http://www.dogmazic.net/tmp_index_files/ex_link.png" /></a><input class="menu_more_button disabled" type="button" value="+"/>
            <div class="oe_drop" id="menu_forum">
                <ul class="oe_sub_menu">
                    <li class="oe_heading">
                        Discuter en direct :
                    </li>
                  <li>
                      IRC, ou Instant Relay Chat, est un outil largement utilisé par la communauté libre. Pour vous iy connecter il vous faut un client IRC (irssi, xchat, smuxi...). Le lien du menu vous permet d'accéder à un client en ligne.
                      <br/><br/>
                      L'équipe, les membres, et les curieux de l'assos "Musique Libre !" sont présent sur <b>irc.freenode.net</b>, salon <b>#dogmazic</b>
                  </li>
                </ul>
            </div>
        </li>
        <li class="oe_menu_list">
              <a href="https://github.com/MusiqueLibre/Dogmazic" target="_blank" class="oe_menu_link">Github <img alt="external link" src="http://dogmazic.net//tmp_index_files/ex_link.png" /></a>
        </li>
        <li class="oe_menu_list">
            <a href="http://blog.dogmazic.net" class="menu_more oe_menu_link">Soutenir</a><input class="menu_more_button disabled" type="button" value="+"/>
            <div class="oe_drop">
                <ul class="oe_sub_menu">
                    <li class="oe_heading">
                      Faire un don
                    </li>
                </ul>
                <ul class="oe_sub_menu">
                 <li class="oe_menu_list">
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
                  </li>
                </ul>
            </div>
        </li>
        <li class="oe_menu_list">
            <a href="http://user.dogmazic.net" class="oe_menu_link">Inscription</a>
        </li>
    
        <li class="oe_menu_list">
            <a href="http://blog.dogmazic.net/?page_id=285" class="oe_menu_link">Contact</a>
        </li>
    </ul>
</div>
