<?php
echo "Log in";
session_start();





?>
<?php
$host='localhost';
$user='root';
$pass='';
$name='rms';
$con=mysqli_connect($host,$user,$pass,$name);

  
    $name=$_POST['name'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $roll=$_POST['roll'];
    $gpa=$_POST['gpa'];
    
    $insert="INSERT INTO student(st_name,st_mother,st_father,st_roll,st_gpa) values(' $name','$father',' $mother','$roll','$gpa')";
   
  if (isset($_POST['Submit'])) {
  	
  	if (mysqli_query($con, $insert)) {
  		echo "Inserted";
  	}else{
  		echo "Not Yet";
  	}
  }
  
?>


<form action="" method="post">
	<tr>
				<th>Name</th><br>
				<th> <input type="text" name="name" ></th><br>
			</tr>
			<tr>
				<th>Mother</th><br>
				<th> <input type="text" name="mother"> </th><br>
			</tr>
			<tr>
				<th>Father</th><br>
				<th> <input type="text" name="father"> </th><br>
			</tr>
			<tr>
				<th>Roll</th><br>
				<th> <input type="text" name="roll"> </th><br>
			</tr>
			<tr>
				<th>GPA</th><br>
				<th> <input type="text" name="gpa"> </th><br>
			</tr>

			<tr>
				<th></th><br>
					<th><input type="Submit" name="Submit"></th>
				</tr>	

</form>












