<?php
$owner = "";
$name = $_GET['name'];
$db = new MongoClient();
$db->devenvgen->container->remove(array( "owner" => "" .$owner. "", "name" => "" .$name. ""));
//shell_exec('/usr/bin/docker stop ' .$name. '');
//shell_exec('/usr/bin/docker rm ' .$name. '');
header('Location: /env/env.php');
?>
