<?php
//add dbconnect



include("dbconnect.php");



 $title = $_POST['btitle'];
  $price = $_POST['bprice'];


  //crete query
  if(empty($title && $price)){
  	echo "Put some value";
  }else{
  $query = "INSERT INTO books (book_title, book_price) VALUES('{$title}', '{$price}') ";
  $create_query=mysqli_query($connection,$query); 
  header('Location:index.php');

	if(!$create_query){
		die('query faild').mysqli_error();
	}
}


?>