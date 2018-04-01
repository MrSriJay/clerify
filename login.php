<?php 
session_start();
?>
<?php


include 'dbh.php';



	  		if(isset($_POST['loginSubmit'])){
				$usernamelog=$_POST['usernamelog'];
				$passwordlog=$_POST['passwordlog'];
				$sql="SELECT * from members where username='$usernamelog'";		$hashedpwd = password_hash($passwordlog, PASSWORD_DEFAULT);  	
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					
					while($row=mysqli_fetch_array($result)){
						if(password_verify($passwordlog,$row['password'])){
							    $_SESSION["username"]=$usernamelog; 
							    
								header("Location: member info.php");
						}
						else
							{
									echo "<script>
									alert('Please check your Username or Password');
									window.location='index.php';

									</script>";
		
							
							}
						    
					}
				
				   }
				else
					echo "<script>
									alert('Please check your Username or Password');
									window.location='index.php';

									</script>";
			     }
	  		
