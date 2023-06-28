<?php

if(isset($_SESSION['username'])){
  //echo $_SESSION['username'];
} else {
  //echo "login";
  header('Location: ../Join');
}
?>