<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  </style>
</head>
<body>
<h2>FORM</h2>
    <form method="POST" action="{{ url('/main/reg')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="name">Class_ID:</label>
            <input type="number" class="form-control" id="class_id" name="class_id">
        </div>
        <div class="form-group">
            <label for="name">Dept_ID:</label>
            <input type="number" class="form-control" id="dept_id" name="dept_id">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="name">Pass:</label>
            <input type="text" class="form-control" id="pass" name="pass">
        </div>
        <div class="form-group">
            <label for="name">Photo:</label>
            <input type="text" class="form-control" id="Photo" name="photo">
        </div>
        <div class="form-group">
            <label for="name">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="name">Father Name:</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <input type="submit" value="save">
</form>
</body>
</html>