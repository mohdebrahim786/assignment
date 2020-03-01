<!DOCTYPE HTML>  
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
<form action="<?php echo route('student.update',$student->id) ?>" method="post">
	<?php echo csrf_field() ?>
	<?php echo method_field('PATCH') ?>
    <div class="row">
          <div class="col">
            ID<input type="text" class="form-control" name="student_id" placeholder="student_id">
          </div>
          <div class="col">
            NAME<input type="text" class="form-control"  name="student_name" placeholder="student name">
          </div>
        </div>
        <div class="row">
          <div class="col">
            age<input type="text" class="form-control" name="student_age" placeholder="student_age">
          </div>
          <div class="col">
            gender<input type="text" class="form-control" name="student_gender" placeholder="student_gender">
          </div>
        </div>
        <div class="row">
          <div class="col">
            education<input type="text" class="form-control" name="student_qualification" placeholder="student_qualification">
          </div>
          <div class="col">
            department<input type="text" class="form-control" name="student_department"placeholder="student_department">
          </div>
        </div>
	<input type="submit" value="save"/>
</form>
</body>
</html>