<?php
  if(isset($_COOKIE["admin"]))
      header("Location:op.php");
      else
      header("Location:index.html");
?>
