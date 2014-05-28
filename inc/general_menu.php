  <section id="global_menu_container" class="menu_container">
    <nav id="global_nav">
        <h1 id="main_title" class="out_of_the_way">Menu general pour les sites de musique libre !</h1>
        <ul id="global_menu" class="global_menu">
            <?php include 'menu.html' ?>
            <li id="connection_menu">
                  <?php
                  if(array_key_exists('sso_authent_coomute',$_COOKIE)){
                    echo '<button type="button" id="deconnection_button"  >deconnexion</button>';
                  }else{
                    echo '<a id="subscribe_link" href="http://musique-libre.org/user/index.php?r=user/registration">inscription</a>
                     <button type="button" id="connection_button" >se connecter</button>';

                  }
                  ?>
                  <div class="sub_menu_container">
                    <div id="login_container"></div>
                  </div>
            </li>
            <!--li class="global_menu_list non_site" id="menu_contact">
                <a  style="width:auto" type="button">Soutenir/Adhérer</a>
            </li-->
        </ul>
    </nav>
  </section>
<header id="main_header">
      <?php if(isset($player)){
        echo '<section id="main_player_container" >
                <audio id="main_player"></audio>
                <div class="sub_menu_container">
                  <ul id="current_playlist"> </ul>
                </div>
                <button class="header_button menu_more_button ">playlist ( <span id="playlist_count">0</span> )<span class="pretty_font">&nbsp;!&nbsp;</span></button>
              </section>';
      };
      ?>
  <?php
    //Displaying meeting dates
    date_default_timezone_set('Europe/Paris');
    $date_format = "d/m/Y";
    $now = strtotime("today midnight");
    $dev_date = strtotime("second tuesday of this month");
    $orga_date = strtotime("last tuesday of this month");
    //display next month's date if it's too late
    if($now > $dev_date){
      $dev_date = strtotime("second tuesday of next month");
    }
    if($now > $orga_date){
      $orga_date = strtotime("last tuesday of next month");
    }
  ?>
  <div id="site_infos">
    <h1 id="site_title" class="header_description"><?php echo $site_title; ?></h1>
    <h2 id="site_description" class="header_description"><?php echo $site_description; ?></h2>
  <section id="header_rss" style="display:none;">
    <span id="header_rss_name">dernière publication du <span id="header_rss_name_site">Forum</span></span>
    <h1 id="header_rss_title">test titre</h1>
    <span id="header_rss_meta"></span>
    <p id="header_rss_text"></p>
  </section>
</header>
