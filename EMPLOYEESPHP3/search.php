<?php
ini_set('display_errors', 1);
try{$conn =new PDO('mysql:host=localhost;dbname=bootcamp','abhi','ttn');
       if ($conn){}
       else{echo "error";}
   }
catch(PDOException $ex){die('Error:'.$ex);}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
         <form method="post">   
        <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="Search">
        <div class="input-group-append">
          <input class="btn btn-success" type="submit" value="Name" name="submit"> 
           <input class="btn btn-success" type="submit" value="Email" name="email"> 
           <input class="btn btn-success" type="submit" value="Contact" name="contact"> 
         </div>
      </div>
       
       </form>
      <?php
	if(isset($_POST['submit'])){
	$fname=$_POST['name'];
	echo $fname;
       	$stmt = $conn->prepare("SELECT * FROM EMPLOYEES where Fname= :fname");
    	$stmt->execute(['fname' => $fname]);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    	
	?>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last  Name</th>
			<th>Email</th>
			<th>Contact</th>
		</tr>
	<?php
	foreach($result as $value)
	{
		?>
		<tr>
			<td><?php echo $value['Fname']; ?></td>
			<td><?php echo $value['Lname']; ?></td>
			<td><?php echo $value['Email']; ?></td>
			<td><?php echo $value['Contact']; ?></td>
		</tr><br><br>
		<?php
	}
	?>
	</table>
<?php
	
}

?>
<?php
	if(isset($_POST['email'])){
	$fname=$_POST['name'];
	echo $fname;
       	$stmt = $conn->prepare("SELECT * FROM EMPLOYEES where Email= :fname");
    	$stmt->execute(['fname' => $fname]);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	
	?>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last  Name</th>
			<th>Email</th>
			<th>Contact</th>
		</tr>
	<?php
	foreach($result as $value)
	{
		?>
		<tr>
			<td><?php echo $value['Fname']; ?></td>
			<td><?php echo $value['Lname']; ?></td>
			<td><?php echo $value['Email']; ?></td>
			<td><?php echo $value['Contact']; ?></td>
		</tr><br><br>
		<?php
	}
	?>
	</table>
<?php
	
}

?>
<?php
	if(isset($_POST['contact'])){
	$fname=$_POST['name'];
	echo $fname;
       	$stmt = $conn->prepare("SELECT * FROM EMPLOYEES where Contact= :fname");
    	$stmt->execute(['fname' => $fname]);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	
	?>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last  Name</th>
			<th>Email</th>
			<th>Contact</th>
		</tr>
	<?php
	foreach($result as $value)
	{
		?>
		<tr>
			<td><?php echo $value['Fname']; ?></td>
			<td><?php echo $value['Lname']; ?></td>
			<td><?php echo $value['Email']; ?></td>
			<td><?php echo $value['Contact']; ?></td>
		</tr><br><br>
		<?php
	}
	?>
	</table>
<?php
	
}

?>
</body>
</html>
