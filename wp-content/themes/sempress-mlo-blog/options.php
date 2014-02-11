<?php
function change_hp_layout_options(){
   add_theme_page('Homepage options', 'Homepage options', 'manage_options', 'change_homepage_layout','change_hp_layout');
}

add_action('admin_menu', 'change_hp_layout_options');

function change_hp_layout(){
if ( !current_user_can( 'manage_options' ) ){
  wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
?>
<div class="wrap">
  <h2>Choose homepage layout</h2>
  <form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); // Security - used to validate source. ?>
    <label for="hp_layout">Choose the layout for this site :</label>
    <select name="hp_layout">
      <option value="normal">Normal layout (latest blog entry)</option>
      <option value="category">Category layout (display categories)</option>
    </select>
    <input type="submit" name="Submit" value="Save Options" /></p>
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="hp_layout" />

  </form>
</div>
<?php } ?>
