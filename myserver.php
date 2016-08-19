<?php

  include 'LegierskiAES/aes.php';

  $cryption = (string)$_POST['cryption'];
  $aes = new \Legierski\AES\AES();
  $hash = '11a2976e56b62e0069b25f38bab06811';
  $decrypted = $aes->decrypt($cryption, $hash);
  echo $decrypted;

?>
