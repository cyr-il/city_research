<?php
session_start();
require("PDO.php");

if(isset($_GET['city'])){
  $city = (String) trim($_GET['city']);

  $req = $connexion->query("SELECT ville_nom, ville_code_postal, ville_id, ville_population_2012, ville_surface
    FROM villes_france_free
    WHERE ville_nom LIKE '%$city%'");

  $req = $req->fetchALL();

  foreach($req as $r){
    ?>   
    <div style="margin-top: 20px 0; border-bottom: 2px solid #ccc ">
        <a href="<?= $r['ville_id']?>" style ="text-decoration:none; color:blue">
            <?= $r['ville_nom']." "?><b style="color:black"><?=$r['ville_code_postal']." | ".$r['ville_population_2012']." habitants | ".$r['ville_surface']." km²"?></b>
        </a>
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Boulogne_vue_generale_phare_beffroi_mer.jpg"/>
    
    
    <?php    
  }
} 
?>