<div class="user-button-item">
  <a href="<?php print $user_login_link; ?>">
      <i class="fa fa-power-off"></i>        
  </a>
</div>

<?php if ($flag_display_item): ?>
  <div class="user-button-item">
    <a href="<?php print $profil_link; ?>">
      <i class="fa fa-user"></i>    
    </a>
  </div>
<?php endif; ?>

<?php if ($flag_display_item): ?>
  <div class="user-button-item">
    <a href="<?php print $message_link; ?>">
      <i class="fa fa-envelope"></i>    
    </a>
    <div class="count"><?php print $count_message; ?></div>
  </div>
<?php endif; ?>

<?php if ($flag_display_item): ?>
  <div class="user-button-item">
    <a href="<?php print $checkout_link; ?>">
      <i class="fa fa-shopping-cart"></i>
    </a>
    <div class="count"><?php print $count_checkout; ?></div>
  </div>
<?php endif; ?>

<?php if ($flag_display_item): ?>
  <div class="user-button-item">
    <a href="<?php print $add_skils_link; ?>">
      <i class="fa fa-plus"></i>
    </a>    
  </div>
<?php endif; ?>