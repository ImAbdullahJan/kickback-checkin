<?php
include 'mysql_connection.php';
$resultsArray = array();

if(isset($_GET['admin_id']) && isset($_GET['event_id'])){
  $itemId = "";
  $sql = "SELECT * FROM users WHERE event_id='".$_GET["event_id"]."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      $counter = $result->num_rows;
      $rowCounter = 0;
      while($row = $result->fetch_assoc()) {
          array_push($resultsArray, $row);
        }
        $json = json_encode($resultsArray);
        //echo $json;
  }else{
    print_r(json_encode(array("No record")));
  }
}
?>

<html>
  <head>
    <style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;

      }
    </style>
  </head>
<body>


<p width="100%"><img src="kickback-banner.png" class="center"></p>
  <table border="1" width="100%">
    <tr>

      <th>Sr#</th>
      <th>Event ID</th>
      <th>Wallet Address</th>
      <th>Event Name</th>
      <th>Checkin Time</th>

  </tr>
      <?php
      foreach($resultsArray as $results){
        echo "<tr>";
        foreach($results as $value){
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
      ?>
  </table>

</body>
</html>
