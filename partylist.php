<?php
include "connection.php";
include "nav.php";
$row = $con->query("SELECT * FROM party left outer JOIN candidates on id = party_id");
$i = 1;
?>
<style>
    table {
  width: 40%;
  
}
tr:nth-child(even) {background-color: #f2f2f2;}

th, td {
  border-bottom: 1px solid #ddd;
}
th {
  height: 70px;
}
#helloTh{
 
    border:solid;
     margin-right:auto; 
     margin-right:auto; 
}
body{
  background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
  background-image: url("images/7dc460d843ec2f103255c11a985dfa87.jpg");
}
</style>
<body>
<div  class="center" style="text-align:center ;">
<table  id="helloTh" style="margin-top: 100px;">
    <tr>
        <th>SN</th>
        <th>Party</th>
        <th>Status</th>
    </tr>
    <?php foreach ($row as $value){ ?>
    <tr>
        <td><?=$i?></td>
        <td><?=$value['name']?></td>
        <td><?php if($value['fullname']!=null){
            echo $value['fullname'];
        }else{
           echo "N/A";
        }
            ?></td>
    </tr>
    <?php $i++; } ?>
</table>
</div>
</body>