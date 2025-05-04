<?php
include("obrada.php");

$data = getFromFile();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vjezba - test</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Vježba - test</h1>
  <hr>

  <main class="main">
    <form action="obrada.php" method="POST">
      <label>
        Upišite riječ: <br>
        <input type="text" name="rijec" required>

      </label>
      <br><br>
      <input type="submit" value="pošalji">
    </form>

    <table border="1" cellpadding="5" cellspacing="2">
      <tr>
        <th>Riječi</th>
        <th>Broj slova</th>
        <th>Broj samoglasnika</th>
        <th>Broj suglasnika</th>
      </tr>

      <?php
      foreach ($data as $key => $value) :
      ?>
        <tr>
          <td><?=$value['rijec']?></td>
          <td>Broj slova</td>
          <td>Broj samoglasnika</td>
          <td>Broj suglasnika</td>
        </tr>

      <?php
      endforeach;
      ?>

<?php
      foreach ($data as $key => $value) {
      ?>
        <tr>
          <td><?= $value['rijec']?></td>
          <td><?php echo $value['brojSlova']?></td>
          <td>Broj samoglasnika</td>
          <td>Broj suglasnika</td>
        </tr>

      <?php }
      ?>



    </table>
  </main>
</body>

</html>