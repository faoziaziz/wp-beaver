<?php
  function hello_gue()
  {
    echo "<h2>Hello Gue</h2>";
  }

  function formulir()
  {
    ?>


    <form action="action_page.php" method="post">
        <fieldset>
            <legend>Informasi Personal</legend>
            Nama Depan : <br>
            <input type="text" name="namadepan">
            Nama Belakang: <br>
            <input type="text" name="namabelakang">
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php

  }
?>
