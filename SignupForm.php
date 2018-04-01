<?php 
session_start();
include 'dbh.php'; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clerify | Ask your Questions Here</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Favicon -->
     <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
    
    <!-- CSS LInks -->
    <link type="text/css" rel="stylesheet" href="css/header.css">
     <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/Slide Show.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link type="text/css" rel="stylesheet" href="css/login Singup.css">
    <link href="fonts/IndieFlower.ttf" rel="stylesheet"> 
    <link href="fonts/FreckleFace-Regular.ttf" rel="stylesheet"> 
     
   	<style> 
		*{
			  padding: 0px;
			  margin: 0px;
			  }
		body{
			
			background-color: black;
			font-family: 'Indie Flower', cursive;
		
		}
	</style>
	
  </head>
  <body bgcolor="#000000">
   
  <!--HEADER-->
        
  		<nav class="navbar navbar-inverse navbar-fixed-top">
  		  	  <?php include"header.php" ?>
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				  
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
				    <li class="active"><a href="index.php" style="color: #FF0004">Home</a></li>
				 	<li><a href="Categories.php">Categeries</a></li>
					<li><a href="Questions.php">Questions</a></li>
					<li><a href="Members.php">Members</a></li>
					<li><a href="About.php">About Us</a></li>
				  </ul>
				  <form class="navbar-form navbar-right" method="post" action="search.php">
					<div class="form-group ">
					  <input type="text" class="form-controlx" placeholder="Search" name="search">
					</div>
					<button type="submit" class="btn btn-dangerx"><span class="glyphicon glyphicon-search"></span></button>
				  </form>
				
					 
				 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

  <!--HEADER END-->
     <div style="height: 100px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  >dfsdfs</div>
 <!--Signup-->
 
 	<div id="id02" class="login">

		  <form name="signup" class="login-content animate" method="post" action="signup.php" onsubmit="return validateForm();" >
			<div class="imgcontainer">
			  <h1 class="text-center" style="color: red; font-weight: bolder"><span class="glyphicon glyphicon-user" ></span> Signup</h1>
			  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <br/><br/>
			  <img src="img/login1.png" alt="Avatar" class="img-responsive" style="margin: auto">
			</div>

			<div class="container">
		  		<br/>
				<br/>
			  <input type="text" placeholder="Enter Name" name="name" required class="inputx">
			  <br/>
			  <input type="text" placeholder="Enter Enmai" name="email" required class="inputx">
			  <br/>
			  <input type="text" placeholder="Enter Username" name="username" required class="inputx">
			  <br/>
			  <input type="password" placeholder="Enter Password" name="password" required class="inputx" minlength="6"><br/>
			  <input type="submit" class="buttonx" value="Signup" name='signupSubmit' >
				<br/><br/><br/><br/>
			</div>

		  </form>
		</div>

  
  
    <!--MID SECTION END-->
    
   <!--FOOTER SECTION END-->
   <?php include'Footer.php';?>
   <!--FOOTER SECTION START-->
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    
    <script src="js/login.js"></script>
	<script>
		$(document).ready(function(){
			$(".flip").click(function(){
				$(".panel").slideToggle("slow");
			});
		});

	</script>
	
	

  </body>
</html>