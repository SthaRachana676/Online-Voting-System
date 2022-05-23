<?php
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: skyblue;
  }

  .headerFont {
    font-family: 'Ubuntu', sans-serif;
    font-size: 24px;
  }

  .subFont {
    font-family: 'Raleway', sans-serif;
    font-size: 14px;

  }

  .specialHead {
    font-family: 'Oswald', sans-serif;
  }

  .normalFont {
    font-family: 'Roboto Condensed', sans-serif;
  }

  .helloTH th {
    background-color: green;
    color: white;
    /* border:solid; */
  }

  table {
    border-collapse: collapse;
    width: 100%;
    border: solid 2px black;
  }

  th,
  td {
    text-align: center;
    padding: 8px;
  }

  tr {
    padding: 1rem;
    border-top: solid 2px black;
  }

  tr:nth-child(even) {
    background-color: #ffcc99;
  }
</style>
<div class="container">
  <div class="container" style="padding:100px;">
    <div class="row">
      <div class="col-sm-12">

       
          <center>
            <h3>Voting So Far</h3>
          </center>
          <!-- <h2 class="specialHead">Voting So Far</h2>
            <p class="normalFont">This is Administration Panel.</p> -->
        

        <div class="col-sm-12">
          <?php
          // if(!isset($_SESSION)) { 
          // session_start();
          // }
          ?>
          <?php
          include "connection.php";
          $member = mysqli_query($con, 'select candidate_id,fullname,name from candidates inner join party on party_id=id');
          if (mysqli_num_rows($member) == 0) {
            echo '<font color="red">No results found</font>';
          } else {
          ?>
            <center>
              <font size='4'>
                <table id="result_table" width="100%">
                  <tr class="helloTH">
                    <th width="10%">ID</th>
                    <th width="60%">CANDIDATES</th>
                    <th width="20%">Party</th>
                    <th width="10%">VOTE</th>
                  </tr>
                <?php
                while ($mb = mysqli_fetch_object($member)) {
                  $id = $mb->candidate_id;
                  $name = $mb->fullname;
                  $about = $mb->name;
                  //	$vote=$mb->votecount;
                  $rs = $con->query("Select count(*) as data from loginusers where cand_id=" . $id);
                  $result = mysqli_fetch_array($rs);

                  echo '<tr bgcolor="#BBBEFF">';
                  echo '<td>' . $id . '</td>';
                  echo '<td>' . $name . '</td>';
                  echo '<td>' . $about . '</td>';
                  echo '<td>' . $result['data'] . '</td>';
                  echo "</tr>";
                }
                echo '</font></table></center>';
              }
                ?>
                <style>
                  a {
                    color: green;
                  }

                  h1,
                  h2,
                  h3,
                  h4 {
                    text-align: center;
                  }

                  a:link {
                    text-decoration: none;
                  }

                  a:visited {
                    text-decoration: none;
                  }

                  a:hover {
                    text-decoration: none;
                  }

                  a:active {
                    text-decoration: underline;
                  }
                </style>
                <?php ?>


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                </body>