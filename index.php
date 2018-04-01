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
  
	  
  <!--LOGIN AND SIGNUP START-->
 		<!--LOGIN-->
 		
  		<div id="id01" class="modal">
  
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
  
  
  
  
  
   <!--SLIDE SHOW START-->
 
   <div  class="container-fluid heigth">
		  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color: #0E0707; ">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox " >
					<div class="item active">
					  <img src="img/Cover.png"  alt="...">
					  <div class="carousel-caption">
						<?php  if(isset($_SESSION['username'])){
								echo'<a href="What is your question.php" class="btn btn-dangerx btn-lg" style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder">What\'s Your Question</a>';
	
								}
						  		else
						        {
								echo'<a href="#" class="btn btn-dangerx btn-lg" style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder"  onClick="mydisp();" >What\'s Your Question</a>';
	
								}
						  
						  
						  ?>
						  
						  
					  <h1 class="slidetext">WELCOME TO CLERIFY</h1>
        			  <h2 class="slidetext2" >Everything You Need To Know In One Place</h2>
					  </div>
					</div>
					<div class="item ">
					  <img src="img/Cover1.png"  alt="...">
					  <div class="carousel-caption">
						<?php  if(isset($_SESSION['username'])){
								echo'<a href="What\'s your question.php" class="btn btn-dangerx btn-lg" style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder">What\'s Your Question</a>';
	
								}
						  		else
						        {
								echo'<a href="#" class="btn btn-dangerx btn-lg" style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder" onClick="mydisp();">What\'s Your Question</a>';
	
								}
						  
						  
						  ?>
					  <h1 class="slidetext">WELCOME TO CLERIFY</h1>
        			  <h2 class="slidetext2" >Everything You Need To Know In One Place</h2>
					  </div>
					</div>
				
					<div class="item ">
					  <img src="img/Cover2.png"  alt="..." >
					  <div class="carousel-caption">
						<?php  if(isset($_SESSION['username'])){
								echo'<a href="What\'s your question.php" class="btn btn-dangerx btn-lg" style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder">What\'s Your Question</a>';
	
								}
						  		else
						        {
								echo'<a href="#" class="btn btn-dangerx btn-lg " style="margin-bottom: 120px; width:450px; height:100px; padding-top: 30px; font-size:30px;font-weight: bolder" onClick="mydisp();" >What\'s Your Question</a>';
	
								}
						  
						  
						  ?>
					  <h1 class="slidetext">WELCOME TO CLERIFY</h1>
        			  <h2 class="slidetext2" >Everything You Need To Know In One Place</h2>
					  </div>
					</div>
					
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
				
				<!-- The Modal -->
	     <div id="myModal" class="modalx">

		  <!-- Modal content -->
	  
		  <div class="modalx-content"> 
			<h3 class="text-center"><span class=" glyphicon glyphicon-warning-sign" style="font-weight: bolder; color: #FFFFFF"></span> PLease Login or Signup to post a question </h3>
		  </div>
  		
	</div>
   </div>
   
   
      

    <!--SLIDESHOW END-->
    
    
    <!--INFRO DISPLAY START-->
    <br>
      
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="background-color: #000000;border: 2px #FF0004 dotted ; border-left: 0px; border-right: 0px" >
      
       <?php 
		include 'dbh.php'; 				 
		
		$sql="SELECT count(mid) as member_count FROM members";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
	   //output of each row
		while($row = $result->fetch_assoc())
		{
       
        echo'
    	<div class="col-lg-3 col-md-3  col-sm-12 col-xs-12 background" style="height: 300px;" >
    		<h1 class="text-center">Our Community</h1>
    		<div class="informationn">
    			<h1 class="text-center">'.$row['member_count'].'</h1>
    			<h5 class="text-center" >Members</h5>
    		</div>
    	</div>';
    	}}?>
    	
    	<div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
    	
    	<?php 
		include 'dbh.php'; 				 
		
		$sql="SELECT count(mid) as ques_count FROM questions";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
	   //output of each row
		while($row = $result->fetch_assoc())
		{
       
        echo'
		<div class="col-lg-4   col-md-4 col-sm-12 col-xs-12 background" style="height:300px;">
    		<h1 class="text-center">Our Posts</h1>
    		<div class="informationn">
    			<h1 class="text-center">'.$row['ques_count'].'</h1>
    			<h5 class="text-center" >Questions</h5>
    		</div>
    	</div>
		';
    	}}?>
    	
    	
    	
    	
    	
    	
    	 
    	 <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
    	
    	<?php 
		include 'dbh.php'; 				 
		
		$sql="SELECT count(cdid) as com_count FROM comments";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
	   //output of each row
		while($row = $result->fetch_assoc())
		{
       
        echo'
		<div class="col-lg-4   col-md-4 col-sm-12 col-xs-12 background" style="height:300px;">
    		<h1 class="text-center">Your Replies</h1>
    		<div class="informationn">
    			<h1 class="text-center">'.$row['com_count'].'</h1>
    			<h5 class="text-center" >Comments</h5>
    		</div>
    	</div>
		';
    	}}?>
    	
    	
    </div>
	
    <!--INFRO DISPLAY END-->
    
    <!--RECENT ASKED START-->
    
      
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="background-color: #000000;border: 2px #FF0004 dotted ; border-left: 0px; border-right: 0px" >
     <br> <br>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading " style="margin-top: -0px;">
   				<h1 class="text-center"><span class='glyphicon glyphicon-calendar' style='color:white'></span> Recent Updates</h1>
     </div>
     
     <div class="row">
     <br><br><br><br><br><br>
     
     <?php
	   $sql="SELECT SUBSTRING(question, 1,20) AS question,category,mname,post_date,musername,qid FROM `questions` ORDER BY post_date DESC";
		   
		   $count=0;
		   $result=$conn->query($sql);


		   if($result->num_rows>0){
			   //output of each row

			   while(($row = $result->fetch_assoc())&&($count<8))
			   {
				   echo
					  '<div class="col-lg-3  col-md-3 col-sm-12 col-xs-12" >
						<div class="thumbnail" style="background-color: #1A1A1A ; border: 1px #930002 solid">
						  <div class="caption">
							<p style="font-weight:bold; color: #B90003; font-size: 30px;" ><span class="glyphicon glyphicon-pencil"></span> '.$row["question"].'....</p>
							<p>Category : <span>'.$row["category"].'</span></p>
							<p>Posted By Name: <span>'.$row["mname"].'</span></p>
							<p>Posted By Username : <span>'.$row["musername"].'</span></p>
							<p>Posted Date : <span>'.$row["post_date"].'</span></p><br>
							
							<form action="view ques.php" method="Post">
							<button type="submit"" class="btn btn-dangerx btn-lg" name="view" >View Question</button>
							<input type="hidden" value="'.$row['qid'].'" name="qid">
							</form>
							
							
							
						  </div>
						</div>
					</div>';
				   $count++;
			   }
		   }
	  ?>
	</div>
    
    
    
	</div>
    <!--RECENT ASKED END-->
    
    
    
    <!--MID SECTION START-->
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 500px;background-color: #000000" >dssdadsd</div>
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