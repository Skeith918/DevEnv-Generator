<?php
$erreur='';
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login-name']) && !empty($_POST['login-name'])) && (isset($_POST['login-pass']) && !empty($_POST['login-pass']))) {

    $ldaprdn  = ($_POST['login-name']);
    $ldappass = (md5($_POST['login-pass']));

    $ldapconn = ldap_connect("VSM2T-AD");
    if ($ldapconn) {

      $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

      if ($ldapbind) {
        session_start();
        $_SESSION['login-name'] = $_POST['login-name'];
        header('Location: container.php');
        exit();
      } else {

        $erreur = 'Identifiant ou Mot de passe incorrect.';
				header('Location: index.php');

      }
    }
  } else {

    $erreur = 'Au moins un des champs est vide.';

  }
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>DevEnv</title>
	<link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/index.php">DevEnv Generator</a>
      </div>
    </div>
  </nav>

<div class="jumbotron">
	<fieldset>
    <legend>DevEnvGen Login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Identifiant">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
			</div>
    </div>
</div>
</body>
</html>
