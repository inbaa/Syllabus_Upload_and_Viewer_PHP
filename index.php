<head>
<title>Syllabus</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
 
</head>
<body>
<div class="panel panel-default">

	<div class="panel-heading">
	<h2>	
	<b><center>Syllabus Upload and Viewer</center><b>
	</h2>
	</div>

<div class="container">

	<div class="panel-body">
<form method="POST" action="upload.php" enctype="multipart/form-data">

		<div class="form-group">

		<label for="file">File</label>
		<input type="file" name="file" required accept = "application/pdf,.doc,.docx">

		</div>
		<div class="form-group">

		<input type="submit" name="submit" class="btn btn-primary" value="Upload" >
		</div>
</form>
<center><h2>Uploaded Files</h2></center>

<table class="table table-stripped">
 	<tr>
 	 <th>File Name</th><th>Download</th><th>View</th><th>Delete</th> 
 	</tr>
<?php
 
// This will return all files in that folder
$files = scandir("uploads");
 
// first 2 indexes are "." and "..",
for ($a = 2; $a < count($files); $a++)
{
    ?>
 <tr>
        <!-- Displaying file name !-->
        <td><?php echo $files[$a]; ?>
    	</td>
 	
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <td>
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
    	</td>
    <!--View -->
    <td>
        <a href="uploads/<?php echo $files[$a]; ?>" target="_use-underscore-for-new-tab" >
            View
        </a>
    	</td>	
    <!--Delete the file -->
    <td>
    <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
    Delete
	</a>
	</td>
</tr>
    
  
    <?php
}
?>
</table>
</div>
</div>
</body>