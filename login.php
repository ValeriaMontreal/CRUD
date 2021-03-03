<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP2 de Valeriya Popenko</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
	<div class="header-area">
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h3 align="center">Enter Login Details</h3>
					<form method="post" action="validation.php" align="center">
						<div class="form-group">
							<label for="name">Username:</label>
 							<input type="text" name="user" class="form-control" placeholder="Your user name" required>
 						</div>
						<div class="form-group">
							<label for="password">Password:</label>
 							<input type="password" name="password" class="form-control" placeholder="Your password" required>
 						</div>
 						<button type="submit" class="btn btn-primary">LOGIN</button>
					</form>
			</div>
			<div class="col-md-6 login-right">
				<h3 align="center">Create your account</h3>
					<form method="post" action="registration.php" align="center">
						<div class="form-group">
							<label for="name">Username:</label>
 							<input type="text" name="name" class="form-control" placeholder="Your user name" required>
 						</div>
						<div class="form-group">
							<label for="password">Password:</label>
 							<input type="password" name="password" class="form-control" placeholder="Your password" required>
 						</div>
 						<button type="submit" class="btn btn-primary">CREATE</button>
					</form>
			</div>
		</div>
		</div>
	</div>
	</div>
</body>
</html>