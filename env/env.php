<?php include "../header.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>DevEnvGen</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css">

</head>
<body>

  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nom du container</th>
      <th>Système d'exploitation</th>
      <th>Outils installés</th>
      <th>IP</th>
      <th>Port Ouverts</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "searchenv.php";
    for ($i = 1; $i <= 5; $i++) {
      echo '<html>
      <tr>
        <td>';echo $i;echo'</td>
        <td>';echo $name;echo'</td>
        <td>';echo $os;echo'</td>
        <td>';echo $tools;echo'</td>
        <td>';echo $ip;echo'</td>
        <td>';echo $port;echo'</td>
        <td><a href="delenv.php?name=';echo $name;echo'" class="btn btn-danger btn-xs">Supprimer</a></td>
      </tr>
      </html>';
    }

    ?>
  </tbody>

</body>
</html>
