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
<h1>Vander Information</h1>
<form method="POST" action="/vsave">
        {{ csrf_field() }}
        <div class="brand_info">
        	<label for="name">Vander Name:</label>
        	<input type="text" class="brand_info" id="name" name="name" >
        </div>
        <div class="brand_info">
          <label for="name">Vander Comany:</label>
          <input type="text" class="brand_info" id="name" name="company" >
        </div>
        <div class="brand_info">
          <label for="name">Vander phone:</label>
          <input type="text" class="brand_info" id="name" name="phone" >
        </div>
        <div class="brand_info">
          <label for="name">Vander Address:</label>
          <input type="text" class="brand_info" id="name" name="address" >
        </div>
        <div class="brand_info">
          <label for="name">Vander email:</label>
          <input type="text" class="brand_info" id="name" name="email" >
        </div>
        <div class="brand_info">
          <label for="name">Product Name:</label>
          <input type="text" class="brand_info" id="name" name="name" >
        </div>
        <div class="brand_info">
          <label for="name">Product Brand:</label>
          <input type="text" class="brand_info" id="name" name="brand" >
        </div>
        <div class="brand_info">
          <label for="name">Cost Price:</label>
          <input type="text" class="brand_info" id="name" name="costprice" >
        </div>
        <div class="brand_info">
          <label for="name">Selling Price:</label>
          <input type="text" class="brand_info" id="name" name="sellingprice" >
        </div>
        <input type="submit" value="SAVE">
      </form>
    </body>
    </html>
