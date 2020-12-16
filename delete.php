<?php
 
// Built-in PHP function to delete file
unlink($_GET["name"]);
 echo "<script> 
 alert('File Deleted!'); 
 window.location.href='index.php';
 </script>";
?>