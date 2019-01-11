<!DOCTYPE html>
<html lang="en">
<head>
<title>my 1st bootstrap Document</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
 <script src="js/jquery.js"></script>
</head>
<body>


<?php
include('dbconnect.php');
if(isset($_GET['id'])){
	
	$bookId = $_GET['id'];

	$query = "SELECT * FROM books WHERE book_id = $bookId  ";
    $select_book = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_book)){
        $book_title = $row['book_title'];
        $book_price = $row['book_price'];
            
       ?> 





<div class="container bg-info" style="padding-top: 20px; padding-bottom:20px;">
	<h3>Edit Book</h3>
	<form role="form" action="" method="post">


		<div class="form-group">
			<label>Book title</label>
			<input type= "text" name="btitle" class="form-control" value="<?php echo $book_title; ?>">
		</div>
		<div class="form-group">
			<label>Book price</label>
			<input type= "text" name="bprice" class="form-control" value="<?php echo $book_price; ?>">
		</div>
		<button type="submit" name="submit" class="btn bg-success btn-block">Edit book</button>
		
	</form>

</body>

<?php
	}
}

?>




<?php




if (isset($_POST['submit'])){

$id=$_GET['id'];
$book_title = $_POST['btitle'];
$book_price = $_POST['bprice'];


//create query
$query = "UPDATE books SET book_title= '$book_title', book_price= '$book_price' WHERE book_id='$id' ";
$udate_query = mysqli_query($connection , $query);
header('Location:index.php');

if(!$udate_query){
            die("Query Faied" . mysqli_error($connection));
        }
}
?>



<script src "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.js"></<script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


</html>
