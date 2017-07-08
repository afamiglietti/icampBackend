<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET

  $categories = htmlspecialchars($_POST['username']);

  //$apiString = "WHERE Category IN ('" . $categories . "')";
  //$apiURL = urlencode($apiString);

  //$my_var = file_get_contents("https://www.googleapis.com/fusiontables/v2/query?sql=SELECT+ROWID%2C+Name%2C+Description+FROM+1Iw9qt8__F6E8RB53bbflrGAt3eI4GS3StvcF1o-I%20" . $apiURL . "&key=AIzaSyBYdqXls8CORbjl1yVC53qZ-75pMJaCmJY");

  echo $categories;
  //echo $my_var;
?>
