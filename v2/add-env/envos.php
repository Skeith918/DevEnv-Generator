<?php include "../header.php";?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>DevEnvGen</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css">

</head>

<body>
<div class="jumbotron">
  <form class="form-horizontal" action="envos.php"  method="POST">
    <fieldset>
      <legend align="center">Créer un DevEnv - Sélection de l'OS</legend>

      <div class="form-group">
      <label class="col-lg-2 control-label">Systèmes d'exploitation</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="os" id="windows" value="windows">
            Windows (Basé sur Windows Server Core)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="os" id="linux" value="linux">
            Linux (Basé sur Debian)
          </label>
        </div>
      </div>
    </div>

      <input type="submit" name="suite" value="Suite" class="btn btn-primary btn-block" >
      <?php
      if (isset($erreur)) echo $erreur;
      ?>
    </fieldset>
  </form>
</div>
</body>

</html>

<?php
if (isset($_POST['os'])){

  $os  = ($_POST['os']);
  if ($os == 'linux') {

    header('Location: linuxenv.php');

  } elseif ($os == 'windows') {

    header('Location: winenv.php');

  }

} else {

  $erreur = 'Veuillez sélectionner un OS';

}
?>
