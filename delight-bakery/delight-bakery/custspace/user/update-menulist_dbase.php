 <?php 
 
 include('../con_dbase.php');
 session_start();
 
 //This is the directory where images will be saved 
 $target = "product_image/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
//This gets all the other information from the form 
$name=$_POST['name']; 
$price=$_POST['price']; 
$pic=($_FILES['photo']['name']); 
	
if($name&&$price&&$pic)
	{
		//Writes the photo to the server 
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
			{ 
				//Writes the information to the database 
				mysql_query("INSERT INTO `productlist` VALUES ('','$name', '$price', 'product_image/$pic')") ; 
		
				//Tells you if its all ok 
				header('location:menulist.php');
			} 
		else
			{ 
				//Gives and error if its not 
				echo "<center><h1>Update Failed!</h1><br />Sorry, there was a problem uploading your file.</center>"; 
			} 
	}
	else
		echo "<center><h1>Update Failed!</h1><br />Please fill <b>all</b> the field.";
 ?> 
