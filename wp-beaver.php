<?php
  /*
    Plugin Name: Beaver Wordpress
    Plugin URI: https://github.com/faoziaziz/wp-beaver
    Description: Ini plugin pertama yang saya bikin
    Version: 0.1
    Author: Aziz Amerul Faozi
    Author URI: https://faoziaziz.herokuapp.com
  */
  require 'myfunc/asek.php';

  add_action('the_content', 'my_thank_you_text');
  function my_thank_you_text($content)
  {
    
    formulir();
    return $content .='<p>Kalista kamu suka bang Aziz yah ehh</p>';
  }
?>
