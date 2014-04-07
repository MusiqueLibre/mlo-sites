<header id="main_header">
  <div id="main_header_upper" class="menu_container">
    <section id="logos">
      <div id="logo_box" class="logo_box">
        <div id="logo_box_title">Musique Libre !</div>
        <button type="button" class="header_button menu_more_button">l'association <span class="pretty_font">ml &nbsp;!&nbsp;</span></button>
        <div class="header_sub_button">...</div>
        <section class="sub_menu_container">
          <ul id="service_menu">
            <li class="service_menu_item bullet_less">
              <h2 class="service_menu_title bullet_less">L'association Musique Libre ! en quelques mots...</h2>
              <img title="logo dogmazic v3" src="../images/logos/dogmav3.png"/>
              <p class="service_menu_description">
                "Musique Libre !" est une association loi 1901 de défense et de promotion des musiques libres. Depuis
                2004, celle-ci oeuvre pour mettre en avant les artistes qui choisissent de partager leur musique, tout en leur
                offrant des outils pour qu'ils puissent diffuser leurs musique dans les meilleures conditions. Le tout gratuitement
                et sans pub depuis toujours !
              </p>
              <p class="service_menu_description">
                Vous trouverez ici des musiques en tout genre qui n'ont que pour seul point commun d'êtres les oeuvres d'artistes
                qui veulent une culture libre, partageuse, juste et égalitaire !
              </p>
              <p class="service_menu_description">
                Venez nous aider à réfléchir et à bâtir les outils pour réaliser ces utopies réalistes ! Prouvons que c'est possible...
                en musique, si il vous plait !
              </p>
              <a class="service_menu_lien" href="http://musique-libre.org/asso/?page_id=6">En savoir plus...</a><br/>
              <!--a class="service_menu_lien" href="http://www.dogmazic.net/alpha">Historique</a><br/>
              <a class="service_menu_lien" href="http://www.dogmazic.net/alpha">Les statuts</a><br/-->

            </li>
          </ul>
        </section>
      </div>
      <div id="secondary_logo_box" class="logo_box">
        <div id="secondary_logo_box_title"><img title="Services" src="/global_statics/images/logos/logos_services.jpg"></div>
        <button type="button" class="header_button menu_more_button">les services publics <span class="pretty_font">ml&nbsp;!&nbsp;</span></button>
        <div class="header_sub_button">...</div>
        <section class="sub_menu_container">
          <ul id="service_menu">
            <li class="service_menu_item bullet_less">
              <h2 class="service_menu_title bullet_less">Dogmazic</h2>
              <span class="service_menu_status">Statut : Chasse aux bugs</span>
              <img title="logo dogmazic v3" src="../images/logos/dogmav3.png"/>
              <p class="service_menu_description">
                Dogmazic permet aux musiciens utilisant des licences libres et ouvertes de déposer leurs musiques en toute liberté,
                et aux mélomanes d'aprécier une musique indépendante et éclectique
              </p>
              <p class="service_menu_description">
                3ème version du site (fondé en 2004 !) cette mouture st basée sur <a href="http://mediagoblin.org">Mediagoblin</a>
              </p>
              <a class="service_menu_lien" href="http://www.dogmazic.net/alpha">Dogmazic v3</a>

            </li>
            <li class="service_menu_item bullet_less">
              <h2 class="service_menu_title">Archives Dogmazic</h2>
              <img title="logo dogmazic v3" src="../images/logos/dogmav3.png"/>
              <p class="service_menu_description">
                Musique déposées sur les versions 1 et 2 de dogmazic entre 2004 et 2012
              </p>
              <a class="service_menu_lien" href="http://www.musique-libre.org/dogma">Archives Dogmazic 2004/2012</a>

            </li>
            <li class="service_menu_item bullet_less">
              <h2 class="service_menu_title">Spider Jessica</h2>
              <span class="service_menu_status">Statut : Encore dans l'oeuf</span>
              <img title="logo dogmazic v3" src="../images/logos/dogmav3.png"/>
              <p class="service_menu_description">
                Les developpeurs informatique peuvent sans peine partager les sources de leur travail pour
                travailler en équipe ou permettre à d'autre d'utiliser leur travail... Spider Jessica propose
                d'adapter ses outils à la musique et aux musiciens pour faciliter les collaborations les remixs,
                et le partage de savoir-faire.
              </p>

            </li>
            <li class="service_menu_item bullet_less">
              <h2 class="service_menu_title">Wreck a Tour</h2>
              <span class="service_menu_status">Sur le papier</span>
              <img title="logo dogmazic v3" src="../images/logos/dogmav3.png"/>
              <p class="service_menu_description">
                Et si les petits groupes arrêtaient de galérer pour faire des concerts ? Et si les sous du live n'allait plus
                seulement aux gros poissons là où ce sont les groupes locaux qui attirent du monde ?
              </p>

            </li>
          </ul>
        </section>
      </div>
    </section>
    <div id="main_header_right">
      <?php if(isset($player)){
        echo '<section id="main_player_container" >
                <audio id="main_player"></audio>
                <div class="sub_menu_container">
                  <ul id="current_playlist"> </ul>
                </div>
                <button class="header_button menu_more_button ">playlist ( <span id="playlist_count">0</span> )<span class="pretty_font">&nbsp;!&nbsp;</span></button>
                <div class="header_sub_button">...</div>
              </section>';
      };
      ?>
      <section id="main_connection" class="pretty_font">
        <div id="connection_menu">
            <?php
            if(array_key_exists('sso_authent_mlo',$_COOKIE)){
              echo '<button type="button" id="deconnection_button"  >deconnexion</button>';
            }else{
              echo '<a id="subscribe_link" href="http://musique-libre.org/user/index.php?r=user/registration">inscription</a>
               <button type="button" id="connection_button" >se connecter</button>';

            }
            ?>
            <div class="sub_menu_container">
              <div id="login_container"></div>
            </div>
        </div>
      </section>
    </div>
  </div>
  <section id="global_menu_container" class="menu_container">
    <nav id="global_nav">
        <h1 id="main_title" class="out_of_the_way">Menu general pour les sites de musique libre !</h1>
        <ul id="global_menu" class="global_menu">
            <li class="global_menu_list">
                <a href="http://musique-libre.org" id="menu_blog" class="menu_more global_menu_link">Blog</a>
            </li>
            <li class="global_menu_list">
                <a href="http://musique-libre.org/doc" id="menu_doc" class="global_menu_link menu_more">Documentation</a>
            </li>
            <li class="global_menu_list">
                <a href="http://musique-libre.org/forum" id="menu_forum" class="global_menu_link menu_more">Forum</a>
            </li>
            <li class="global_menu_list">
                <a href="http://musique-libre.org/dev" id="menu_dev" class="global_menu_link menu_more">Blog des developpeurs</a>
                <!--span class="pretty_font" id="dev_blog_hint"> &#10149; Suivez l'avancée des sites en direct !</span-->
            </li>
            <li class="global_menu_list non_site">
                <a href="http://musique-libre.org/?page_id=285" class="global_menu_contact" id="global_menu_contact">Contact</a>
            </li>
            <li class="global_menu_list" id="menu_chat">
                <a href="http://musique-libre.org:7778" class="global_menu_link menu_more" id="global_menu_chat" target="_blank">Chattez avec l'équipe</a>
            </li>
            <!--li class="global_menu_list non_site" id="menu_contact">
                <a  style="width:auto" type="button">Soutenir/Adhérer</a>
            </li-->
        </ul>
    </nav>
  </section>
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
    <div class="header_description" id="meeting_info">
      <span id="meeting_title">Réunions IRC</span>
      <img class="meeting_img dev_style" src="/global_statics/images/dev_meeting.png"/>
      <div class="header_description">
        <span class="dev_style meeting_text">
          Prochaine réunion <strong>sites</strong><br/> 
          (code, design, ergonomie)
          <br/>
          <span class="meeting_date">
            <strong>
              <?php
                echo date($date_format, $now) == date($date_format,$dev_date) ?  '<span style="color:red">'.date($date_format,$dev_date).'</span>' : date($date_format,$dev_date) ;
              ?>
              20h-21h
            </strong>
          </span>
        </span>
        <br/>
        <br/>
        <span class="orga_style meeting_text">
          Prochaine réunion <strong>asso</strong> </br>
          (son projet, ses action...)
          <br/>
          <span class="meeting_date">
            <strong>
              <?php
                echo date($date_format,$orga_date);
              ?>
              20h-21h
            </strong>
          </span>
        </span>
      </div>
      <img class="meeting_img orga_style" src="/global_statics/images/orga_meeting.png"/>
    </div>
  </div>
  <section id="header_rss" style="display:none;">
    <span id="header_rss_name">dernière publication du <span id="header_rss_name_site">Forum</span></span>
    <h1 id="header_rss_title">test titre</h1>
    <span id="header_rss_meta"></span>
    <p id="header_rss_text"></p>
  </section>
</header>
