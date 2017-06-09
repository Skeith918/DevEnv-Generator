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
      //include "searchenv.php";
      $owner="ssnoussi";
      $separator='"';
      $req='db.container.find({owner : "' .$owner. '"}';
      //$test2 = passthru('mongo localhost:27017/devenvgen --quiet --eval "' .$req. '"');
      $test = shell_exec('/bin/echo "' .$req. '"');
      for ($i = 1; $i <=10 ; $i++) {
        //$name = shell_exec('/bin/echo "' .$req. '" | /usr/bin/mongo localhost:27017/devenvgen --quiet | cut -d ' .$separator. ' -f12 | head -n' .$i. '' );
      	//$os = shell_exec('/bin/echo "' .$req. '" | /usr/bin/mongo localhost:27017/devenvgen --quiet | cut -d "' .$separator. '" -f16 | head -n' .$i. '' );
      	//$tools = shell_exec('/bin/echo "' .$req. '" | /usr/bin/mongo localhost:27017/devenvgen --quiet | cut -d ' .$separator. ' -f20 | head -n' .$i. '' );
        //$ip = shell_exec('/bin/echo "' .$req. '" | /usr/bin/mongo localhost:27017/devenvgen --quiet | cut -d "' .$separator. '" -f24 | head -n' .$i. '' );
        //$port = shell_exec('/bin/echo "' .$req. '" | /usr/bin/mongo localhost:27017/devenvgen --quiet | cut -d "' .$separator. '" -f28 | head -n' .$i. '' );
        echo '<html>
        <tr>
          <td>';echo $i;echo'</td>
          <td>';echo $test;echo'</td>
          <td>';echo "l";echo'</td>
          <td>';echo $test2;echo'</td>
          <td>';echo "l";echo'</td>
          <td>';echo "l";echo'</td>
          <td><a href="delenv.php?name=';echo $name;echo'" class="btn btn-danger btn-xs">Supprimer</a></td>
        </tr>
        </html>';
      }

      ?>
    </tbody>



</body>
</html>
