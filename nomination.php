<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nomination Panel</title>
</head>
<?php
require_once 'connection.php';

$member = $con->query("SELECT * from candidates inner join party on party_id=id ORDER BY fullname ASC");
// require_once("nav.php");
?>
<style>
   #suparConainer {
    width: 100%;
    margin-top: 5vh;
  }

  .dataholder {
    width: 20%;
    display: inline-block;
    padding: 1%;
    margin: 1% 1.3%;
  }

  .dataImg {
    width: 100%;
    height: 200px;
    margin-bottom: 4%;
  }

  .cndiName {
    width: auto;
    margin-bottom: 1vh;
    border-bottom: none;
    text-align: center;
    padding: 0 5px;
    font-size: 18px;
  }

  fieldset {
    border: 2px groove threedface;
    padding: 5px;
  }
</style>
<div id="suparConainer">
  <?php foreach ($member as $value) : ?>
    <div class="dataholder">
      <img src="img/candidates/<?= $value['fullname'] ?>.png" class="dataImg" alt="<?= $value['fullname'] ?>">
      <img src="img/party/<?= $value['opt'] ?>.png" class="dataImg" alt="<?= $value['name'] ?>">
      <fieldset>
        <legend class="cndiName"><?= $value['fullname'] ?></legend>
        <ul class="nom_det">
          <!-- <li><b>Born</b>:June 13, 1946 (age 74 years), Ashigram</li>
          <li><b>Spouse</b>: Arzu Rana Deuba</li>
          <li><b>Education</b>: London School of Economics and Political Science</li> -->
          <li><b>Party</b>:<?= $value['name'] ?></li>
        </ul>
      </fieldset>
    </div>
  <?php endforeach; ?>
</div>