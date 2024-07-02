<html>


</html>

<?php
	
	$server="localhost";
	$user="root";
	$pass="";
	$db_name="Heal";
	
	$conn=mysqli_connect($server,$user,$pass,$db_name);
	/*if(!$conn)
	{
		echo "Connection unsucessfull";
	}
	else{
		echo "Connection successfull";
	}*/
	if(isset($_POST['submit'])){
		
		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$department=$_POST['dept'];
		$salary=$_POST['salary'];
		
		$query1 = "INSERT INTO `empoyee` (`first_name`, `last_name`, `department`, `salary`) VALUES ('".$first_name."','".$last_name."','".$department."','".$salary."');";
		//echo $query1;
		//exit;
		$result=mysqli_query($conn,$query1);
		
		echo "<script> alert(' Data inserted'); </script>";
		echo "<script> window.location.href=' EmployeeRecord.php'; </script> ";
	}
	
	if(isset($_POST['retrive'])){
		
		$query2 = "select * from `empoyee` where salary>=50000 ;";
		//echo $query2;
		//exit;
		$result=mysqli_query($conn,$query2);
		?>
		<html>
		<head>
			<style>
				table,td,th{
					border: 1px solid;
					border-collapse : collapse;
					padding: 1px 6px 1px 6px;
					margin-left: 400px;
					margin-top: 20px;					
				}
				h3{
					margin-left: 400px;
					margin-top: 40px;
				}
			</style>
		</head>
			<body>
			<form >
				<table>
				 <h3> Employee having Salary > 50000 </h3>
					<tr>

						<th> First Name </th>
						<th> Last Name </th>
						<th> Department </th>
					</tr>
		<?php
			while($row=mysqli_fetch_assoc($result))
			{
		?>
					<tr>
						<td> <?php echo $row['first_name']; ?> </td>
						<td> <?php echo $row['last_name']; ?> </td>
						<td> <?php echo $row['department']; ?> </td>
					</tr>
				</table>
			</form>
			</body>
		</html>
		<?php
			}
		
		
		echo "<script> 
				setTimeout(function (){
					window.location.href=' EmployeeRecord.php';
				},5000)
			</script> ";
	}
?>