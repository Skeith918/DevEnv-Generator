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

<html lang="fr">
<head>

    <title>DevEnvGen</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>

  <form action="index.php" method="POST">
      <div class="login">
	       <div class="login-screen">
	          <div class="app-title">
		            <h1>DevEnvGen Login</h1>
	          </div>

            <div class="login-form">
              <div class="control-group">
                <input type="text" class="login-field" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" placeholder="identifiant" name="identifiant">
                <label class="login-field-icon fui-user" for="login-name"></label>
              </div>

              <div class="control-group">
                <input type="password" class="login-field" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" placeholder="mot de passe" name="mot de passe">
                <label class="login-field-icon fui-lock" for="login-pass"></label>
              </div>

              <input type="submit" name="connexion" value="Connexion" class="btn btn-primary btn-block" >
              <?php
              if (isset($erreur)) echo '<br /><br />',$erreur;
              ?>
              <br>
            </div>
          </div>
        </div>
      </form>
</body>
</html>
