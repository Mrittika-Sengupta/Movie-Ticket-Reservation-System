<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">MOVIE TICKET </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href=" ">DASHBOARD</a></li>
  
      </ul>
    </div>
  </div>
</nav>


	<div class="jumbotron" style="background:url('image/register.jpg') no-repeat; height:400px; background-size:cover;"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="movie_list.php" class="list-group-item active " style="background-color:#3365FF;color:#ffffff;border-color:#3365FF;">MOVIE LIST</a>
					<a href="reg_movie.php" class="list-group-item">REGISTER MOVIE</a>
					<a href="delete_movie.php" class="list-group-item " >DELETE MOVIE</a>


				</div>
				
				
			</div>
            
			<div class="col-md-8">
            
                <div class="card-body" >
				
				<table class="table table-hover table-dark ">
					<thead>

						<tr>
							<th scope="col">MOVIE_ID</th>
							<th scope="col">MOVIE Name</th>
							<th scope="col">SEATS AVAILABLE</th>
							<th scope="col">TICKET PRICE</th>
							<th scope="col">START TIME</th>
							<th scope="col">END TIME</th>
							<th scope="col">DATE</th>
							
						</tr>
					</thead>
					<tbody>

					<?php
						$conn = mysqli_connect("localhost", "root", "","movieticket");
						$query = mysqli_query($conn,"SELECT * from movie");
						while ($info=mysqli_fetch_array($query))
						{

						?>
							<tr>

								<td><?php echo $info['movie_id'];?></td>
								<td><?php echo $info['movie_name'];?></td>
								<td><?php echo $info['seats'];?></td>
								<td><?php echo $info['ticket_price'];?></td>
								<td><?php echo $info['start_time'];?></td>
								<td><?php echo $info['end_time'];?></td>
								<td><?php echo $info['date'];?></td>
							
							</tr>
						<?php	

							}
						?>

					</tbody>
				</table>
			</div>
				
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
   

</body>
</html>