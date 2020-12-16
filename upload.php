<?php
 
// Getting uploaded file
$file = $_FILES["file"];

// Uploading in "uploads" folder
$r=move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
 if($r)
 {
 echo "<script> 
 alert('Uploaded!'); 
 window.location.href='index.php';
 </script>";
}
else{
echo "<script> 
 alert('Failed to upload'); 
 window.location.href='index.php';
 </script>";	
}

?>