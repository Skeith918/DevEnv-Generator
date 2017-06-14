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
  <form class="form-horizontal" action="confirmation.php"  method="POST">
    <fieldset>
      <legend align="center">Créer un DevEnv - Sélection des outils</legend>

      <div class="form-group">
        <label for="inputnamecontainer" class="field">Nom du Container</label>
        <input type="text" class="form-control" id="inputnamecontainer" placeholder="Nom de votre container">
      </div>

      <div class="form-group" disable>
        <label for="os" class="field">Système d'exploitation</label>
        <input type="text" class="form-control" id="os" placeholder="Windows" $
      </div>

      <div class="form-group">
        <label for="selectwebserv">Serveur Web</label>
        <select class="form-control" id="selectwebserv">
          <option>Aucun</option>
          <option>Apache</option>
          <option>IIS</option>
        </select>
      </div>

      <div class="form-group">
        <label for="selectdb">Base de données</label>
        <select class="form-control" id="exampleSelect1">
          <option>Aucune</option>
          <option>MySQL</option>
          <option>PostgreSQL</option>
        </select>
      </div>
      <div class="form-group">
            <label class="col-lg-2 control-label">Outils</label>
            <div class="col-lg-10">
              <div class="radio">
                <label>
                  <input type="checkbox" id="checkbox1" value="python">
                  Python
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="checkbox" id="checkbox2" value="cpp">
                  C++
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="checkbox" id="checkbox3" value="nodejs">
                  NodeJS
                </label>
              </div>
            </div>
          </div>

      <input type="submit" name="connexion" value="Créer le DevEnv" class="btn btn-primary btn-block" >
    </fieldset>
  </form>
</div>
</body>

</html>
