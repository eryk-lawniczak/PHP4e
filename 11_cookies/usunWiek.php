<?php
if (isset($_GET['usun'])) {
  setcookie('wiek', null, time()-1);
  header ('location: ./index.php?cookie=1');
}else {
  header('location: ./index.php');
}
 ?>
