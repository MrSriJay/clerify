<?php 
session_start();
include 'dbh.php';  

                      if(isset($_REQUEST['likesss'])){
						
	                   $cidd=$_POST['cidd'];
						
						$likez=$_POST['likez'];
						
						$newlikez=$likez+1;
							
						$sql="UPDATE comments SET likes=$newlikez
							where cdid=$cidd";

						$result=$conn->query($sql);
						
						header("Location:Questions.php");
						}
