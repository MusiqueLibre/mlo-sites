<?php if(isset($jquery_1)){
  echo '<script type="text/javascript" src="/global_statics/js/lib/jquery-1.10.2.min.js"></script>';
}else{ 
  echo '<script type="text/javascript" src="/global_statics/js/lib/jquery-2.0.1.min.js"></script>';
};
?>
<?php
if(isset($script_array)){
  foreach( $script_array as $my_script){
    echo '<script type="text/javascript" src="/global_statics/js/'.$my_script.'"></script>';
  };
}
?>
<script type="text/javascript" src="/global_statics/js/lib/jquery.details.min.js"></script>
<script type="text/javascript" src="/global_statics/js/lib/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/global_statics/js/global.js"></script>

<link rel="stylesheet" type="text/css" href="/global_statics/css/global.css">
<?php
  if(isset($css_array)){
    foreach( $css_array as $my_css){
      echo '<link rel="stylesheet" type="text/css" href="/global_statics/css/'.$my_css.'.css">';
    };
  }
?>
<?php //include the LESS JS processor here ?>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//coomute.net/sites/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//coomute.net/sites/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
