<?php
  session_start();
  session_destroy();
  header("Location:login.php?ok=9");
?>