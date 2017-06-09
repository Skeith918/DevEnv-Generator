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

<div class="col-lg-4">
	<form align="center" class="form-horizontal">
	  <fieldset>
	    <legend>DevEnvGen Login</legend>
	    <div class="form-group">
	      <label for="inputUsers" class="col-lg-2 control-label">Utilisateur</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="inputEmail" placeholder="Utilisateur">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-10">
	        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
	      </div>
	    </div>
	    <div align="center" class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
</div>
<!--<div class="jumbotron">
	<fieldset>
    <legend>DevEnvGen Login</legend>
    <div class="form-group">
      <label align="center" for="inputEmail" class="col-sm-2 control-label"></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Identifiant">
      </div>
    </div>
    <div class="form-group">
      <label align="center" for="inputPassword" class="col-sm-2 control-label"></label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
			</div>
    </div>
		<div class="form-group">
      <div align="center" class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
	</fieldset>
</div>-->
</body>
</html>
