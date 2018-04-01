
<div class="col-lg-12 col-md-12 container-fluid header_color">
  		  	   <div class="row">
				   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="img/Clerify-Logo-V2.png" class="img-responsive">
				   </div>
 		  	  	   <div div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 user_role">
						<ul class="nav navbar-nav navbar-right"><?php  if(isset($_SESSION['username'])){
	               
							echo'<li><a href="#"  class="text-danger" onclick="alert(\'Already Logged In \')"><span class=" glyphicon glyphicon-log-in"></span>  Login</a></li>';
							}
						    else{
							echo'<li><a href="loginForm.php"  class="text-danger"><span class=" glyphicon glyphicon-log-in"></span>  Login</a></li>';
							}	
								
							
							?>
							<li><a href="SignupForm.php"><span class="glyphicon glyphicon-user" ></span> Signup</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: red">
							  <?php 
							   if(isset($_SESSION['username'])){

								   echo "<label> <span class='glyphicon glyphicon-user' style='color:red' ></span>&nbsp;&nbsp;".$_SESSION['username']."&nbsp;</label>";
							   }else{

								   echo"<label>"."Please Login "."</label>&nbsp;";
							   }
							?><span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="Member info.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
									<li role="separator" class="divider"></li>
								<li id="link">
									<form action="logout.php">
										<button id="logoutbut"> <span class="glyphicon glyphicon-log-out"></span> LogOut</button>
									</form>
								</li>
							  </ul>
							</li>
						  </ul>
					</div>
 		  	   </div>
  		  	  </div>

