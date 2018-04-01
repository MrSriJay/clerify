<?php 
session_start();
?>
<?php


include 'dbh.php';


          $qid=$_POST['qid'];

	  		if(isset($_POST['delete'])){
				$sql="DELETE  FROM questions WHERE qid='$qid'";
			    $result=$conn->query($sql);	
		     	header("Location:myques.php");
				
			 
			} 



