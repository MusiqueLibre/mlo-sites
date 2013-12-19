<?php if(isset($jquery_1)){
  echo '<script type="text/javascript" src="/global_statics/js/lib/jquery-1.10.2.min.js"></script>';
}else{ 
  echo '<script type="text/javascript" src="/global_statics/js/lib/jquery-2.0.1.min.js"></script>';
};
if(isset($script_array)){
  foreach( $script_array as $my_script){
    echo '<script type="text/javascript" src="/global_statics/js/'.$my_script.'"></script>';
  };
}
?>
<script type="text/javascript" src="/global_statics/js/lib/jquery.details.min.js"></script>
<script type="text/javascript" src="/global_statics/js/lib/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/global_statics/js/global.js"></script>

<link rel="stylesheet/less" type="text/css" href="/global_statics/css/normalize.less">
<link rel="stylesheet/less" type="text/css" href="/global_statics/css/global.less">
<?php
  if(isset($css_array)){
    foreach( $css_array as $my_css){
      echo '<link rel="stylesheet/less" type="text/css" href="/global_statics/css/'.$my_css.'">';
    };
  }
?>
<?php include "less_proccess.php"; ?>
