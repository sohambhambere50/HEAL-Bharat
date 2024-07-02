<html>
	<head>
		<style>
			.container{
				margin: 20px 500px 0px 400px;
				padding : 10px 0px 140px 0px;
				border: 2px solid;
				border-radius: 50px;
				background: cyan;
			}
			.btn{
				 border-radius: 10px;
				 padding: 4px 8px 4px 8px;
			}
			.edtText{
				width: 90%;
				border: none;
			}
		</style>
	</head>

	<body>
		<form name="form1" method="POST" action="retriveData.php" class="container">
			
			<center> <h2> Employee Registration Form </h2>
			<input type="text" name="fname" placeholder="First Name" class="edtText"> <br><br>
			<input type="text" name="lname" placeholder="Last Name" class="edtText" > <br><br>
			<input type="text" name="dept" placeholder="Department" class="edtText" > <br><br>
			<input type="text" name="salary" placeholder="Salary" class="edtText" > <br><br>
			<input type="submit" name="submit" value="Submit" class="btn"> 
			<input type="submit" name="retrive" value="Retrive Data" class="btn"> </center>
			
		
		</form>
	</body>
</html>