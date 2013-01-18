
<style type="text/css">
  /* Menu */
  .oe_overlay{

    background:#000;
    opacity:0;
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
  }

  .oe_menu{
    list-style:none;
    position:relative;
    margin:0;
    background:#333;
  }

  .oe_menu > li{
    width:112px;
    padding-bottom:2px;
    position:relative;
    display:inline-block;
  }
  .oe_menu > li > a{
    display:block;
    background-color:#000;
    color:#aaa;
    text-decoration:none;
    font-weight:bold;
    width:90px;
    padding:0 10px;
    margin:1px;
  }
  .oe_menu > li > a:hover,
  .oe_menu > li.selected > a{
    background:#fff;
    color:#101010;
    opacity:1.0;
  }
  .oe_wrapper .hovered > li > a{
    background:#fff;
    text-shadow:0px 0px 1px #FFF;
  }
  .oe_menu div{
    position:absolute;
    top:-999px;
    left:1px;
    background:#fff;
    padding:10px 40px 10px 10px;
    border-bottom: 5px solid #333333;
  }
  .oe_menu div ul li a{
    text-decoration:none;
    color:#222;
    padding:2px 2px 2px 4px;
    margin:2px;
    font-size:12px;
    display:block;
  }
  .oe_menu div .oe_full{
    width:100%;
  }
  .oe_menu div ul li a:hover{
    background:#FF7F2A;
    color:#fff;
  }
  .oe_menu li ul{
    list-style:none;
    float:left;
    margin-right:10px;
  }
  .oe_heading{
    color:#aaa;
    font-size:16px;
    margin-bottom:10px;
    padding-bottom:6px;
    border-bottom:1px solid #ddd;
  }
  #oe_menu .rsstitle{
    font-size:1.1em;
    border-bottom: 1px solid #FF7F2A;
  }
  #oe_menu .rsslist{
    margin:0 0 20px 0;
  }
  #oe_menu .rssdate{
    display:none;
  }
  #menu_forum .rssdesc{
    display:none;
  }
  #menu_forum .rssdate{
    display:block;
  }
</style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<!-- Flattr API-->
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
<script type="text/javascript">
  $(function(){
    var $oe_menu        = $('#oe_menu ');
    var $oe_menu_items  = $oe_menu.children('li');
    var $oe_overlay     = $('#oe_overlay');
    
    $oe_menu_items.children('.oe_drop').each(function(){
      parentheight = $(this).parent().outerHeight();
      offset = $(this).offset();
      $(this).css({'left' : -offset.left , 'top' : parentheight , 'display' : 'none' , 'width' : $(window).width() });
    });

    $oe_menu_items.bind('mouseenter',function(){
        $(this).addClass('slided selected');
        $(this).parent().find('.oe_drop').slideUp(200);
        $(this).children('.oe_drop').css('z-index','9999').stop(true,true).slideDown(200,function(){
            $oe_menu_items.not('.slided').children('.oe_drop').hide();
            $(this).removeClass('slided');
        });
    }).bind('mouseleave',function(){
        $(this).removeClass('selected').children('.oe_drop').css('z-index','1');
    });

    $oe_menu.bind('mouseenter',function(){
        $(this).addClass('hovered');
    }).bind('mouseleave',function(){
        $(this).removeClass('hovered');
        $oe_menu_items.children('.oe_drop').hide();
    })
  });
</script>
<div class="oe_wrapper">
    <div id="oe_overlay" class="oe_overlay"></div>
    <ul id="oe_menu" class="oe_menu">
        <li>
            <a href="http://dogmazic.net">dogmazic.net</a>
        </li>
        <li>
            <a href="http://forum.dogmazic.net">Forum</a>
            <div class="oe_drop" id="menu_forum">
                <ul>
                    <li class="oe_heading">
                        Derniers messages :
                    </li>
                </ul>
                <?php
                  require_once('rsslib.php');
                  echo  rss_reader('http://forum.dogmazic.net/index.php?p=/discussions/feed.rss', 6);
                 ?>
            </div>
        </li>
        <li>
            <a href="http://blog.dogmazic.net">Blog</a>
            <div class="oe_drop">
                <ul>
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
        <li>
            <a href="https://github.com/MusiqueLibre/Dogmazic">Github</a>
        </li>
        <li>
            <a href="http://blog.dogmazic.net">Soutenir</a>
            <div class="oe_drop">
                <ul>
                    <li class="oe_heading">
                      Faire un don
                    </li>
                </ul>
                <ul>
                 <li>
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
                  </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="http://user.dogmazic.net">Inscription</a>
        </li>
    
        <li>
            <a href="http://blog.dogmazic.net/?page_id=285">Contact</a>
        </li>
    </ul>
</div>
