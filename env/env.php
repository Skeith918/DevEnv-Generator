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
      $owner="ssnoussi";
      $m = new MongoClient();
      $db = $m->devenvgen;
      $collection = $db->container;
      $query = array( "owner" => "" .$owner. "" );
      $cursor = $collection->find($query);
      foreach ($cursor as $document) {
        echo '<tr>
	<td>';echo $document["name"];echo'</td>
	<td>';echo $document["os"];echo'</td>
	<td>';echo $document["tools"];echo'</td>
	<td>';echo $document["ip"];echo'</td>
	<td>';echo $document["port"];echo'</td>
	</tr>';
	}
      ?>
    </tbody>

</body>
</html>
