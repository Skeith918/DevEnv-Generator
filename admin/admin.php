
<?php include "header.php";
$db = new MongoClient();
$result = $db->devenvgen->container->find();
?>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Propriétaire </th>
      <th>Nom du container</th>
      <th>Système d'exploitation</th>
      <th>Outils installés</th>
      <th>IP</th>
      <th>Port Ouverts</th>
    </tr>
  </thead>

    <tbody>
      <?php
      foreach ($result as $document) {
        echo '<tr>';
        echo '<td>' .$document["owner"]. '</td>';
        echo '<td>' .$document["name"]. '</td>';
        echo '<td>' .$document["os"]. '</td>';
        echo '<td>' .$document["tools"]. '</td>';
        echo '<td>' .$document["ip"]. '</td>';
        echo '<td>' .$document["port"]. '</td>';
        echo '<td><a href="/env/delenv.php?name=' .$document["name"]. '" class="btn btn-danger btn-xs">Supprimer</a></td>';
        echo '</tr>';
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
