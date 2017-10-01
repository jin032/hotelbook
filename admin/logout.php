<?php 

session_start();



session_destroy();

echo "<script>window.open('login.php?logout=You successfully log out come back soon....','_self')</script>";


?>