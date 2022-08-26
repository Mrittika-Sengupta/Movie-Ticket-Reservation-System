<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c7e84f67-519e-4886-9a7b-0d96fdc5732d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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


	<div class="jumbotron" style="background:url('image/hawa.jpg') no-repeat; height:400px; background-size:cover;"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="movie_list.php" class="list-group-item " >MOVIE LIST</a>
					<a href="reg_movie.php" class="list-group-item active" style="background-color:#3365FF;color:#ffffff;border-color:#3365FF;">REGISTER MOVIE</a>
					<a href="delete_movie.php" class="list-group-item">DELETE MOVIE</a>


				</div>
				
				
			</div>
            
			<div class="col-md-8">
            
				<div class="card">

					<div class="card-body" style="background-color:#3365FF;color:#ffffff;">MOVIE REGISTRATION FORM</div>

					<div class="card-body">

						<form action="insert.php" class="form-group" method="post">

						
							<label>MOVIE_Name :</label>
							<input type="text" name="m_name" class="form-control"><br>
							<label>SEATS AVAILABLE :</label>
							<input type="text" name="s_avail" class="form-control"><br>
							<label>TICKET PRICE :</label>
							<input type="text" name="t_price" class="form-control"><br>
                            <label>START TIME :</label>
							<input type="time" name="s_time" class="form-control"><br>
                            <label>END TIME :</label>
							<input type="time" name="e_time" class="form-control"><br>
                            <label>DATE :</label>
							<input type="date" name="date" class="form-control"><br>
							
							<input type="submit" name="register" class="btn btn-primary" value="Register">
						</form>
                    </div>
				</div>
				</div>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div>
   

</body>
</html>