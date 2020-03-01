<html>
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
<table class="table" >
  <thead class="thead-dark">
    <tr>
	
		<th><scope="col">No</th>
		<th><scope="col">Name</th>
		<th><scope="col">Age</th>
		<th><scope="col">Gender</th>
		<th><scope="col">Education</th>
		<th><scope="col">Department</th>
		<th><scope="col">Edit</th>
		<th><scope="col">Delete</th>
        <th><scope="col">create new user </th>
	</tr>
	<?php
	foreach ($student as $key => $value) {
	?>
	<tr>
		<td><?php echo $value->id; ?></td>
		<td><?php echo $value->name; ?></td>
		<td><?php echo $value->age; ?></td>
		<td><?php echo $value->gender; ?></td>
		<td><?php echo $value->educationqualification; ?></td>
		<td><?php echo $value->department; ?></td>
		<td>
			<a href="<?php echo route('student.edit',$value->id); ?>">Edit</a>
		</td>
		<td>
			<form action="<?php echo route('student.destroy', $value->id) ?>" method="post" style="display: inline-block;">
				<?php echo csrf_field() ?>
				<?php echo method_field('DELETE') ?>
				<a href="javascript:;" onclick="confirm_delete(this.parentNode)">Delete</a>
			</form>
		</td>
        <td><a href="<?php echo route('student.create') ?>">Create</a>
	</td>
    </tr>
	<?php
	}
	?>
</table>


<script>
	function confirm_delete(form){
			form.submit();
	}
</script>
</body>
</html>