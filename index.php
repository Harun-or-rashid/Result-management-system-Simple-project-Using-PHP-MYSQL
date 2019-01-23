<?php
$host='localhost';
$user='root';
$pass='';
$db_name='rms';

$con=mysqli_connect($host,$user,$pass,$db_name);





if (isset($_POST['submit'])) {
	$na=$_POST['name'];
	//echo $na;
   $rol=$_POST['roll'];
    //echo $name;

    $query="SELECT * FROM student WHERE st_roll='$rol'";
   $view=mysqli_query($con,$query);

//echo "string";

		//$query = "SELECT * FROM student WHERE name='ringku'";
		//$read = mysqli_query($conn, $query);

		while ($result = mysqli_fetch_assoc($view)) {
		
	
	 echo $result['st_name']."<br>";
		 echo $result['st_gpa']."<br>";
		
		 
	

	}

		 }

		
		

  















?>


<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/index.css">

    <title>education board result</title>
  </head>
  <body>
<section class="header">
   <div class="container nav ncss">
   	<div class="left">
   		<img src="image/bd_logo.png" alt="Logo">
   	</div>
   	<div class="right">
   		<h2>Ministry of Education</h2>
   		<h3>Intermediate and Secondary Education Boards Bangladesh</h3>
   	</div>
   </div>
</section>
<section class="container">
	<form action="" method="post">
		<tr>
			<th>Name</th><br>
			<th><input type="text" name="name"></th><br>
		</tr>
		<tr>
			<th>Roll No</th><br>
			<th><input type="text" name="roll"></th><br>
		</tr>
		<tr>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th></th>
			<th></th>
		</tr>

		<tr>
			<th></th><br>
			<th> <input type="submit" name="submit" value="Search Result"> </th>
		</tr>
	</form>
</section>



    <!-- Optional JavaScript -->
  <!--    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="js/bootstrap.min.js"></script>
  </body>
</html> 