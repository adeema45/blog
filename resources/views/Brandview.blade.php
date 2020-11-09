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
<h1>Brand Information</h1>
<form method="POST" action="/bsave">
        {{ csrf_field() }}
        <div class="brand_info">
        	<label for="name">Brand Name:</label>
        	<input type="text" class="brand_info" id="name" name="name" >
        </div>
        <div class="brand_info">
        	<label for="name">Brand Logo:</label>
        	<input type="text" class="brand_info" id="Brand Logo" name="logo" >
        </div>
        <div class="brand_info">
        	<label for="name">Brand_ID:</label>
        	<input type="number" class="brand_info" id="Brand_ID" name="Brand_ID" >
        </div>
        <div class="brand_info">
        	<label for="name">Address:</label>
        	<input type="text" class="brand_info" id="address" name="address" >
        </div>
        <div class="brand_info">
        	<label for="name">Email:</label>
        	<input type="text" class="brand_info" id="email" name="email" >
        </div>
        <div class="brand_info">
        	<label for="name">Owner Name:</label>
        	<input type="text" class="brand_info" id="Owner Name" name="ownername" >
        </div>
        <div class="brand_info">
        	<label for="name">password:</label>
        	<input type="text" class="brand_info" id="password" name="password" >
        </div>
        <div class="brand_info">
        	<label for="name">Dresses:</label>
        	<input type="text" class=
        	"brand_info" id="dresses" name="dresses" >
        </div>
        <div class="brand_info">
        	<label for="name">HandBags:</label>
        	<input type="text" class="brand_info" id="HandBags" name="handbags" >
        </div>
        <div class="brand_info">
        	<label for="name">Shoes:</label>
        	<input type="text" class="brand_info" id="Shoes" name="shoes" >
        </div>
        <div class="brand_info">
        	<label for="name">Rings:</label>
        	<input type="text" class="brand_info" id="Rings" name="rings" >
        </div>
        <input type="submit" value="insert">

	
</form>
</body>
</html>