<?php include "header.php";?>
<body>
<form class="form-horizontal" action="addtools.php"  method="POST">
    <fieldset>
      <legend align="center">Créer un DevEnv - Sélection des outils</legend>

      <div class="form-group">
        <label for="nametools" class="field">Nom de l'outil (Tel qu'il apparaîtra sur l'interface)</label>
        <input type="text" class="form-control" id="nametools" placeholder="Nom de l'outil">
      </div>

      <div class="form-group">
        <label for="selecttype">Type d'outil</label>
        <select class="form-control" id="selecttype">
          <option>Serveur Web</option>
          <option>Base de donnée</option>
          <option>Développement</option>
        </select>
      </div>

      <div class="form-group">
        <label for="namepackages" class="field">Nom du paquet (Nom du paquet à installer)</label>
        <input type="text" class="form-control" id="namepackages" placeholder="Nom du paquet">
      </div>


	<input type="submit" name="ajouter" value="Ajouter" class="btn btn-primary btn-block" >
    </fieldset>
  </form>
</div>
</body>

<?php

?>
