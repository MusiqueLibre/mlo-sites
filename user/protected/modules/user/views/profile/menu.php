<ul class="actions">
  <li class="bullet_less"><?php echo CHtml::link(UserModule::t('Edit'),array('edit')); ?></li>
  <li class="bullet_less"><?php echo CHtml::link(UserModule::t('Change password'),array('changepassword')); ?></li>
  <?php 
  if(UserModule::isAdmin()) {
  ?>
  <li class="bullet_less"><?php echo CHtml::link(UserModule::t('Manage User'),array('/user/admin')); ?></li>
  <?php 
  } else {
  ?>
  <li class="bullet_less"><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
  <?php
  }
  ?>
</ul>
