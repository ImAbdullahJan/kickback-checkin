<?php
 include 'mysql_connection.php';
 include 'utils.php';
//print_r($_GET);
 if(isset($_GET["wallet_id"]) && isset($_GET["event_id"]) && isset($_GET["event_name"])) {
  $uuid = $_GET['uuid'];
  $wallet_id = make_safe_insert($_GET['wallet_id']);
  $event_id = make_safe_insert($_GET['event_id']);
  $event_name = make_safe_insert($_GET['event_name']);
  $time = time();
          $sql = "INSERT INTO users (id, wallet_id, event_id, event_name, checkin_timestamp)
          VALUES (NULL, '$wallet_id', '$event_id', '$event_name', '$time')";
          $log .= $sql."-";
          if ($conn->query($sql) === TRUE) {
              $last_id = $conn->insert_id;
              print_r(json_encode(array("Inserted Record", $last_id)));
              $log .= "New record created successfully";
          } else {
              //echo "Error: " . $sql . "<br>" . $conn->error;
              print_r(json_encode(array("Error: " . $sql . "<br>" . $conn->error)));
              $log .= "Error: " . $sql . "<br>" . $conn->error;
          }


}else{
  print_r(json_encode(array("No donut for you!")));
}
?>
