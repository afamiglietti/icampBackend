<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $my_var = file_get_contents('http://www.w3schools.com');

  echo $my_var;
?>
