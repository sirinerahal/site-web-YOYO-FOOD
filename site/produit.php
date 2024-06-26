
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Produits</title>
  </head>
  <body>
   <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Gestion des Produits</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      

<?php
require_once 'inc/produit.inc.php';
require_once 'inc/connect.inc.php';
$db = new db('localhost', 'yoyofood', 'root', '');
$pdo = $db->connect();
$produit = new produit();
if(isset($_POST['del'])){
    $produit->delete_produit($pdo,$_POST);
}
$produit->affichproduits($pdo);
?>
      
    </div>
    
<style>
     
     .tab  {
         border-collapse: collapse;
         border: 2px solid midnightblue;
     }
     
     .head{
         background-color: midnightblue;
         color: #fff;
         text-align: left;
     }
     
     tr, td {
         padding: 15px 20px;
         text-align: center;
     }
     tr, td{
         border: 1px solid #ddd;
     }
     </style>

</body>
</html>
