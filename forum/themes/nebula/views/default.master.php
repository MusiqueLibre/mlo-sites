<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
   <?php include '../inc/global_statics.php'; ?>
   <script type="text/javascript">
     function init(){
       //dothings
     }
   </script>
   <?php include '../inc/vanilla_statics.php'; ?>
   <?php $this->RenderAsset('Head'); ?>
    
</head>
<body id="<?php echo $BodyIdentifier; ?>" class="<?php echo $this->CssClass; ?>">
		<header id="main_header">
    <?php
      $site_title = "Forum";
      $site_description = "Discussion autour de la musique libre";
      include '../inc/general_menu.php'; 
    ?>
     <nav id="main_nav" class="menu_container">
          <?php  $this->RenderAsset('Panel'); ?>
     </nav>	
	 </header>
	 <main id="main" class="visual_block">
      <?php $this->RenderAsset('Content'); ?>
	 </main>
	 <footer id="Foot">
			<?php
				$this->RenderAsset('Foot');
				echo Wrap(Anchor(T('Powered by Vanilla'), C('Garden.VanillaUrl')), 'div');
			?>
  </footer>
</body>
</html>
