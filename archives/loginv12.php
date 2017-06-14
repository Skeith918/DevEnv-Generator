<?php
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
    if ((isset($_POST['login-name']) && !empty($_POST['login-name'])) && (isset($_POST['login-pass']) && !empty($_POST['login-pass']))) {

    $login  =$_POST['login-name'];
    $user = system("echo " .$login. " | sed s/'%20'/' '/g");
    $ldappass =$_POST['login-pass'];
    $host = 'DC01.vilgenis.com ';
    $port = 389;


    $ldaprdn = "cn=$user,ou=Persons,dc=vilgenis,dc=com";
    $ldapconn =ldap_connect("ldap://$host", $port);


    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);


    if ($ldapconn) {
      $ldapbind =ldap_bind($ldapconn,$ldaprdn,$ldappass);

      if ($ldapbind) {
        session_start();
        $_SESSION['login-name'] = $_POST['login-name'];
        header('Location: /env/env.php');
        echo $user;
        exit();
      } else {

        $erreur = 'Identifiant ou Mot de passe incorrect.';
	echo $user;
        header('Location: /index.php');

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
/*<div class="jumbotron">
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
</div>-->*/
</body>
</html>
