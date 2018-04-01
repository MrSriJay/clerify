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
    <link type="text/css" rel="stylesheet" href="css/Slide Show.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link type="text/css" rel="stylesheet" href="css/login Singup.css">
    <link type="text/css" rel="stylesheet" href="css/mid-section.css">
    <link href="fonts/IndieFlower.ttf" rel="stylesheet"> 
   	<style> 
		*{
			  padding: 0px;
			  margin: 0px;
			  }
		body{
			
			background-color: black;
			font-family: 'Indie Flower', cursive;
		
		}
		.a{
				display: block;
				background-color:#1F1F1F;
				margin-top: 120px;   
			    font-size: 50px; 
			    color: red ;
			     font-weight: bolder ;
			    text-decoration: none;
				border-radius: 5px;
			   border: 1px solid red;
		}
		.a:hover{
			background-color:#980002;
			color: white;
			text-decoration: none;
			font-size: 50px;
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
				    <li><a href="index.php">Home</a></li>
				 	<li><a href="Categories.php">Categeries</a></li>
					<li><a href="Questions.php">Questions</a></li>
					<li class="active"><a href="Members.php"  style="color: #FF0004">Members</a></li>
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
  
	  
  <!--LOGIN AND SIGNUP START-->
 		<!--LOGIN-->
 		
  		<div id="id01" class="modal ">
  
			  <form class="modal-content animate" action="login.php" method="post">
				<div class="imgcontainer">
			  	  <h1 class="text-center" style="color: red; font-weight: bolder"><span class=" glyphicon glyphicon-log-in"></span> Login</h1>
				  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				  <img src="img/login.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
				  <label  style="color: red;"><b>Username</b></label>
				  <input type="text" placeholder="Enter Username" name="usernamelog" required class="input">

				  <label style="color: red;"><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="passwordlog" required class="input">

				  <input type="submit" class="buttonx" value="Login" name="loginSubmit" >
				  
				</div>

			  </form>
			</div>
			
			
		<!--Signup-->
		
		<div id="id02" class="modal">

		  <form name="signup" class="modal-content animate" method="post" action="signup.php" onsubmit="return validateForm();" >
			<div class="imgcontainer">
			  <h1 class="text-center" style="color: red; font-weight: bolder"><span class="glyphicon glyphicon-user" ></span> Signup</h1>
			  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <img src="img/login1.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label  style="color: white;"><b>Name</b></label>
			  <input type="text" placeholder="Enter Name" name="name" required class="inputx">
			  <label  style="color: white;"><b>Email</b></label>
			  <input type="text" placeholder="Enter Enmai" name="email" required class="inputx">
			  <label  style="color: white;"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required class="inputx">
			  <label style="color: white;"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required class="inputx" minlength="6">
			  <input type="submit" class="buttonx" value="Signup" name='signupSubmit'>

			</div>

		  </form>
		</div>

  
  
  <!--LOGIN AND SIGNUP END-->
  
  
  
  
  

    
    <!--MID SECTION START-->
    <div class="container-fluid">
    <div class="row" style="height: 500px;background-color: #000000" >
        <!--MID SECTION 1-->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 " style="border-right: 1px solid #FF0004 ; min-height: 1800px;"> 
        	
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading "  >
   				<h1 class="text-center"><span class='glyphicon glyphicon-user' style='color:white'></span> My Profile</h1>
        	</div>
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  >
   				<?php 
						 include 'dbh.php';
						 if(isset($_SESSION['username'])){
   								$uname=$_SESSION['username'];
							 	$sql="SELECT * FROM members where username='$uname'";
						 		$result=mysqli_query($conn,$sql);
						 		if(mysqli_num_rows($result)>0){
							   //output of each row
							   	while($row = $result->fetch_assoc())
							   {
								    echo
									  ' <a href="myques.php"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center a"><spam class="glyphicon glyphicon-question-sign" ></spam> My Questions</a>';

								   echo "
								   <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 ' >
								   <div class='borderx'>
								   <h2 class='h2'><span class='glyphicon glyphicon-user' style='color:red' ></span>&nbsp;&nbsp;Name</h2>
								   <h2 class='h2other'> 
								   		<span class='glyphicon glyphicon-asterisk' style='color:white' ></span>&nbsp;&nbsp;
										"
									   .$row['name'].
								   "</h2>
								   </div>
								   
								   <div class='borderx'>
								   <h2 class='h2'><span class='glyphicon glyphicon-user' style='color:red' ></span>&nbsp;&nbsp;Username</h2>
								   <h2 class='h2other'> 
								   		<span class='glyphicon glyphicon-asterisk' style='color:white' ></span>&nbsp;&nbsp;
										"
									   .$row['username'].
								   "</h2>
								   
								   </div>
								   <div class='borderx'>
								   <h2 class='h2'><span class='glyphicon glyphicon-user' style='color:red' ></span>&nbsp;&nbsp;E-mail Address</h2>
								   <h2 class='h2other'> 
								   		<span class='glyphicon glyphicon-asterisk' style='color:white' ></span>&nbsp;&nbsp;
										"
									   .$row['email'].
								   "</h2>
								   </div>
										</div>";
								   
								  
									   
							   }
						    }
						}
						  else{
								echo'<script>
										  alert("Please Login To Proceed");
									</script>'; 
							    echo "
								   <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 ' >
								   <h1 class='text-center' style='colour:white; font-size:20px;'>Please Login</h1></div>";
						}
		                
						 
									  
		                 ?>
		                 
		                 
        	</div>
        	
        
        </div>
        <!--MID SECTION 1-->
        
        
        
        
        
        <!--MID SECTION 1-->
    	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs sections">
    		
			<div  style=" margin-top: 120px; ">
				  <div>
					<div class="thumbnail"  style="background-color:#000000; border:  solid 1px red; ">
					  <img src="img/search-button-imagev.png" alt="...">
					  <div class="caption">
						<h3 style="font-weight: bolder; color: red">Join With Us</h3>
						<p style=" color:#979797">Post your question here and let your fellow friends to help you clarify it!</p>
						<p class="text-center">
							<?php  if(isset($_SESSION['username'])){
								echo'<a href="What is your question.php" class="btn bg-dangerxx" role="button" >Post Your Question </a>';
	
								}
						  		else
						        {
								echo'<a href="#" class="btn bg-dangerxx" role="button" onClick="mydisp();" >Post Your Question </a>';
	
								}
						  
						  
						  ?>
							
						</p>
					  </div>
					</div>
				  </div>
				
			</div>
    			
    		 <div>
    			<div class="bg-dangerxx flip text-white bold">Computing</div>
				<div class="panel text-success border border-success">
					<a href="Software Engineering.php">Software Engineering</a>
    			    <a href="Computer Networks.php">Computer Networks</a>
    			    <a href="Computer Science.php">Computer Science</a>
			        <a href="Computer Security.php">Computer Security</a>
    			    <a href="Multimedia.php">Multimedia</a>
				</div>
    		 </div>	
    		 <div>
    			<div class="bg-dangerxx flip text-white bold">Business</div>
				<div class="panel text-success border border-success">
					 <a href="Business Management.php">Business Management</a>
					 <a href="Accounting.php">Accounting &amp; Finance</a>
					 <a href="Business Communication.php">Business Communication</a>
					 <a href="Human Resource Management.php">Human Resource Management</a>
					 <a href="Foundation Programme.php">Foundation Programme</a>
				</div>
    		 </div>
    		 <div>
    			<div class="bg-dangerxx flip text-white bold">Engineering</div>
				<div class="panel text-success border border-success">
					 <a href="Civil Engineering.php">Civil Engineering</a>
					 <a href="Mechanical Engieering.php">Mechanical Engieering</a> 
					 <a href="Electronic Enginnering.php">Electronic Enginnering</a> 
					 <a href="Interior Designing.php">Interior Designing</a> 
				</div>
    		 </div>
    		 <div>
    			<div class="bg-dangerxx flip text-white bold">Students</div>
				<div class="panel text-success border border-success">
					<a href="Administration.php">Administration</a>
					<a href="Acadamics.php">Acadamics</a>
					<a href="Upcoming Events.php">Upcoming Events</a>
					<a href="Sports.php">Sports</a>
					<a href="Clubs.php">Clubs &amp;Societies </a>
				</div>
    		 </div>
    		 <div>
    			<div class="bg-dangerxx flip text-white bold">Other</div>
				<div class="panel text-success border border-success">
					<a href="Social Activities.php">Social Activities</a>
					<a href="Career Guidance.php">Career Guidance</a>
					<a href="Hostel.php">Hostel</a>
					<a href="Medical.php">Medical</a>
					<a href="Other.php">Other</a>
				</div>
    		 </div>
    	<!--MID SECTION 1-->
    			

    		</div>
    	
    </div>
	</div>
   
   <!-- -------------------------------------------------------------------- -->								
		<div id="myModal" class="modalx">

		  <!-- Modal content -->

		  <div class="modalx-content"> 
			<h3 class="text-center"><span class=" glyphicon glyphicon-warning-sign" style="font-weight: bolder; color: #FFFFFF"></span> PLease Login or Signup to post a question </h3>
		  </div>
										  
	  </div>  	
	<!-- -------------------------------------------------------------------- -->
    <!--MID SECTION END-->
    
   
   <!--FOOTER SECTION END-->
   <?php include'Footer.php';?>
   <!--FOOTER SECTION START-->
   
   

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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