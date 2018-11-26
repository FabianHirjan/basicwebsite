<?php require('assets/php/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Made by FabioT </title>
</head>
<body>
<!--
Made by FabioT, show posts
-->
<!-- Header
echo $_SESSION['username']; 
-->
<h1>Postari</h1>
<?php
try{
	$stmt = $db -> query('SELECT postID, postTitle, postDesc, postimg , postDate FROM posts ORDER BY postID DESC'); 
	while($row = $stmt -> fetch())
	{
		echo $row['postimg']; // Sistem semi-finalizat de imagini, va fi imaginea principala a postarii, un fel de thumbnail
		echo $row['postTitle'];
		echo $row['postDesc'];
		echo $row['postDate'];
	}	
}
</body>
</html>