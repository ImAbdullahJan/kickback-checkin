<?php
include 'mysql_connection.php';

function make_safe_insert($variable)
{
   global $conn;
   $variable = $conn->real_escape_string(trim($variable));
   return $variable;
}

function make_safe_all($variable)
{
   $variable = strip_tags(trim($variable));
   return $variable;
}
 ?>
