<div class="bg-footer">
  <div class="wrapper">
    <div class="footer two-columns">
      <div class="column details">
        <p>
          <?=get_theme_mod('_street_address', '');?><br />
          <?php
            $postal_address = get_theme_mod('_postal_address', '');
            if ($postal_address != '') {
              echo "Postal Address:" . $postal_address . "<br />";
            }
          ?>
          Phone: <strong><?=get_theme_mod('_phone_number', '');?></strong> | email: <a href="<?=get_theme_mod('_email_address', '#');?>"><?=get_theme_mod('_email_address', '');?></a><br />
          For all function enquires <a href="#">please fill out our online form</a>.
        </p>
      </div>
      <div class="column">
        <a class="contact-link" href="<?=get_home_url();?>/contact">VIEW OUR <strong>LOCATION MAP</strong></a>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>