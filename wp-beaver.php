<?php
  /*
    Plugin Name: Beaver Wordpress
    Plugin URI: https://faoziaziz.herokuapp.com
    Description: Ini plugin pertama yang saya bikin
    Version: 0.1
    Author: Aziz Amerul Faozi
    Author URI: https://bloggoblog.herokuapp.com
  */
  require 'myfunc/asek.php';

  add_action('the_content', 'my_thank_you_text');
  function my_thank_you_text($content)
  {
    hello_gue();
    return $content .='<p>Kalista kamu suka bang Aziz yah ehh</p>';
  }
?>
