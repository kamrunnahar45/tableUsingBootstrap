<?php
include("dbconnect.php");
$bid =$_GET['id'];
//include(dbconnect.php);


//query
$query = "DELETE FROM books WHERE book_id=$bid ";
if (mysqli_query($connection , $query)) {
	//echo "record delete"
	//redricet page to inddex.php
	header("Location:index.php");
}
else{
	echo"error" . mysql_error($connection);
}

mysql_close($connection);
?>