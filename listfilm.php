<?php
session_start();
require_once('../bdfilms/connexion.inc.php');
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/global.js"></script>

</head>
<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="login.php"><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['username']; ?></a></li>
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
                        <li><a href="films.php">ADD film</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    <h2 class='section-title'>CATALOQUE</h2>
    <table class="table border=1 align='center' width=60%">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>Number</th>
            <th>Image</th>
            <th>Name</th>
            <th>Movie Director</th>
            <th>Category</th>
            <th>Duration</th>
            <th>Price</th>
            <th colspan='2'>Action</th>
        </tr>
        </thead>
        <tbody>
<?php
  
//    require_once('connexion.inc.php');

	$requette="SELECT * FROM films";
	$listeFilms=mysqli_query($connexion,$requette);

if($listeFilms->num_rows>0){
	$sr = 1;

  	while($ligne=mysqli_fetch_object($listeFilms)){

  	    $listeFilmsId = $ligne->id;
        $listeFilmsImg = $ligne->image;
        $listeFilmsName = $ligne->name;
        $listeFilmsDir = $ligne->director;
        $listeFilmsCat = $ligne->category;
        $listeFilmsDur = $ligne->duration;
        $listeFilmsPrice = $ligne->price;	?>

        <tr style='text-align: center;'>
            <td><?php echo $sr;?></td>
            <td><img src='../img/<?php echo $listeFilmsImg;?>' width=80 height=80></td>
            <td><?php echo $listeFilmsName;?></td>
            <td><?php echo $listeFilmsDir;?></td>
            <td><?php echo $listeFilmsCat;?></td>
            <td><?php echo $listeFilmsDur;?></td>
            <td><?php echo $listeFilmsPrice;?></td>
            <td><a href="delete.php?listeFilmsId=<?php echo $listeFilmsId?>" class="btn btn-danger btn-lg">Delete</a> </td>
            <td>
<!--                 <input type="button" value="EDIT" class="btn btn-success btn-lg onClick="rendreVisible('divFiche');"> -->
            <a href='modify.php?listeFilmsId=<?php echo $listeFilmsId?>' class="btn btn-success btn-lg ">Modify</a> 
            </td>
        </tr>
<?php
                $sr++;
            }
        }
 ?>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="../js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="../js/main.js"></script>  

    <script src="../js/global.js"></script>

</body>
</html>