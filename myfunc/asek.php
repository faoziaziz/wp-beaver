<?php
  function hello_gue()
  {
    echo "<h2>Hello Gue</h2>";
  }

  function formulir()
  {
    ?>


    <form action="https://ikarus-gateway.herokuapp.com/action_page.php" method="POST">
        <fieldset>
            <legend>Informasi Personal</legend>
            Nama Depan :
            <input type="text" name="namadepan"> <br>
            Nama Belakang:  <input type="text" name="namabelakang"> <br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php

  }
?>
