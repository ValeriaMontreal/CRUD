<?php
    session_start();    
    require_once('../bdfilms/connexion.inc.php');
    if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

		$id = $_GET['listeFilmsId']; 
		$requette= "SELECT * FROM films WHERE id='$id'";
		$res= mysqli_query($connexion, $requette);  
		$row= mysqli_fetch_assoc($res);  
?>  

<!doctype html>
<html>
	<head>
		
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP2 de Valeriya Popenko</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/responsive.css">
    <script language="javascript" src="../js/global.js"></script>

</head>
	<body>
	    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="login.php"><i class="fa fa-user"></i>Welcome <?php echo $_SESSION['username']; ?></a></li>
                            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="../accueil.html">MOVIE<span>Shop</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

        <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="listfilm.php">CATALOGUE</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
		<h2 class='section-title'>Film management</h2><br><br>
				<div id="divEnreg" style='width:1200px; margin:0 auto;'>
                    <form action="" method="POST" enctype="multipart/form-data">  
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/> 
					<label>Name</label>
					<br>
					<input type='text' name="name" size="50" value='<?php echo $row['name']; ?>'/>
					<br />  
					<label>Movie Director</label>
					<br>
					<input type="text" name="director" size="50" value="<?php echo $row['director']; ?>"/>
					<br />
					<label>Category</label>
					<br>
					<input type="text" name="category" size="50" value="<?php echo $row['category']; ?>"/>
					<br />
					<label>Duration</label>
					<br>
					<input type="text" name="duration" size="50" value="<?php echo $row['duration']; ?>"/>
					<br />
					<label>Price</label>
					<br><input type="text" name="price" size="50" value="<?php echo $row['price']; ?>"/>
					<br />
					<label>Image</label>
					<br>
                    <img src="../img/<?php echo $row['image'];?>" style="width: 60px; height: 80px">
                    <br /><br>
					<input type="file" name='image' size="50"/>
					<br><br />
					<br><br />
					<input type="submit" style="width:350px; height:70px;" value="update" name="update" />  
					</form>

                    <?php 
                    if (isset($_POST['update'])){

                    $name = $_POST['name'];  
                    $director = $_POST['director'];
                    $category = $_POST['category'];
                    $duration = $_POST['duration'];
                    $price = $_POST['price'];
                    $id   = $_POST['id']; 
                    $old_image=$row['image'];
                    if (isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")){

                        $size=$_FILES['image']['size'];
                        $temp=$_FILES['image']['tmp_name'];
                        $type=$_FILES['image']['type'];
                        $img_name=$_FILES['image']['name'];
                        
                        unlink('../img/$old_image');
                        move_uploaded_file($temp, '../img/$img_name');
                    }
                    
                    else{
                        $img_name=$old_image;
                    }
                        $sql  = "UPDATE films SET name='$name', 
                                                director='$director', 
                                                category='$category', 
                                                duration='$duration',
                                                price='$price', 
                                                image='$img_name'
                                                WHERE id='$id'"; 
                    $update=mysqli_query($connexion,$sql);
                    if($update){
                        echo '<script>window.location="listfilm.php"</script>';
                    }
                    else{
                        echo"<script>alert('FAILED!')</script>";
                        echo '<script>window.location="listfilm.php"</script>';
                    }
                    }
                     ?>
                    

<br><br><br><br>

				</div>
</body>
</html>