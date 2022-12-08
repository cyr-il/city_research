<!doctype html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/villes/script.js"></script>
  <title>Connexion à MySQL avec PDO</title>
  <meta charset="utf-8">
</head>
<body>
<h1>Interrogation de la table VILLES avec PDO</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-0 col-md-2 col-lg-3"></div>
    <div class="col-sm-12 col-md-8 col-lg-6">
      ﻿<div class="form-group">
        <input class="form-control" type="text" id="search-city" value="" placeholder="Rechercher une ville"/>
      </div>
      ﻿<div style="margin-top: 20px">
        <div id="result-search"></div> <!-- C'est ici que nous aurons nos résultats de notre recherche -->
      </div>
    </div>
  </div>
</div>
</body>
</html>