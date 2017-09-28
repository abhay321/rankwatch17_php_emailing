<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To JarvisItech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://blazeworx.com/flags.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="well">Email Sent Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="post" action="response.php">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Enter Full Name Here.." id="name" class="name form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="email" placeholder="Enter Email Address Here.." id="email" class="email form-control">
							</div>
						</div>						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Message</label>
								<textarea placeholder="Enter Message Here.." rows="3" id="message" class=" message form-control"></textarea>
							</div>
						</div>		
					
					<button type="submit" class="btn submit btn-lg btn-info" name="submit" id="submit">Submit</button>					
					</div>
				</form> 
			</div>
		</div>
	</div>