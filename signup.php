
<?php 
session_start();
?>
<?php

		   include 'dbh.php';

  

		  if(isset($_POST['signupSubmit'])){
						$name=$_POST['name'];
						$email=$_POST['email'];
						$username=$_POST['username'];
						$password=$_POST['password'];
						$hashedpwd =password_hash($password, PASSWORD_DEFAULT);
			            
			  
		   $sql2="SELECT * FROM members";
		   $result2=mysqli_query($conn,$sql2);
			 $result3=mysqli_query($conn,$sql2);  
	if(mysqli_num_rows($result2)>0){
			   
			while($row=$result2->fetch_assoc()){
					if($username==$row["username"]) 
						 {
							  $pos="0";
						 }
					else {
			  			      $pos="1";
				         }		
			

          }
			   
		 while($row3=$result3->fetch_assoc()){
					
					if($email==$row3["email"]){
						
						    $epos="2";
					}
		            else {
			  			     $epos="3";
				         }

          }
			   			
			       
		  }
			  
		if($pos==1 && $epos==3)
		           {
					    $sql1="INSERT INTO members (name,email,username,password) values ('$name','$email','$username','$hashedpwd')";	
						$resultS=$conn->query($sql1);
			  			header("Location: index.php");
						
					}
	   
		else if($pos==0 && $epos==2){
				  include('index.php');
				  echo('<script> alert("Username & eamil already taken");</script>');
				  
		}
		          
       else if($pos==0){
				  include('index.php');
				  echo('<script> alert("Username already taken");</script>');
				  
		}
	   else if($epos==2){
				  include('index.php');
				  echo('<script> alert("Email already taken");</script>');
				  
		}	  
		 
		}
		
		
		  
		  
		  
		  
		  