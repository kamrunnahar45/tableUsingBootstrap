<!DOCTYPE html>
<html lang="en">



<head><title>crud app</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  


</head>

<body>
     
	<?php
	//display all record inside table
	//add dbconnection
	include('dbconnect.php');
	//create query
	$query = "SELECT * FROM books";
	$result = mysqli_query($connection,$query);



	?>



<div class="container bg-info" style="padding-top:20px; padding-bottom: 20px;">
	<h3>php mysql bootstrap and php crud app</h3>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<h4>Insert Books Form</h4>
			<hr>

<form role="form" action="insert.php" method="post">

	<div class="form.group">
	<label>book title</label>
	<input type="text" name="btitle" class="form-control">
	</div>

	<div class="form.group">
	<label>book price</label>
	</div>
	<input type="text" name="bprice" class="form-control">
	<br>
	</div>
    </div>
    <button type="submit" class="btn btn-success">
     add books</button>
	
</form>
</div>




<div class="container bg-info" style="padding-top:20px; padding-bottom: 20px;">
			<div class="col-sm-8">
				<h3>Display All Record Table
					<hr>
				<table class="table">
					<thead>
						<tr>
							<th>book title</th>
							<th>book price</th>
							<th>crud action</th>
						</tr>
					</thead>
					<tbody style="font-size: 20px">

						<?php
						//display all record inside table
                            while ($row = mysqli_fetch_assoc($result)){

                            

                        ?>



						<tr>
							<td><?php echo $row['book_title']; ?></td>

							<td><?php echo $row['book_price']; ?></td>
							<td>
								<a href="editfrom.php?id=<?php echo $row['book_id']; ?>" class="btn btn-success " role="button">edit book</a>
								<a href="delete.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger " role="button">delete book</a>
							</td>
						</tr>
						<?php
					}
						mysqli_close($connection);
						?>



					</tbody>
				</table>

				
			</div>
		</div>
	</div>
</div>







</body>
<script src "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.js"></<script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>



</html>