<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Forresta Kitchen Bar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="assest/css/style.css">
<script type="text/javascript" src="assest/js/style.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  style="background-image:url( assest/image/bg.jpeg); box-shadow: 10px 10px 10px 10px gray;">
 <div class=" mt-5" style="color: white;">
    <div class="container bg-dark">
    <h1 style="text-align: center;">Book Your Table</h1>
  </div></div>
  <div class="container mt-5" style="background-color: gray; border-radius: 10px;">
  	<form action="controllor/controllor.php" method="post" enctype="multitype/form-data">
  		<br><label>Name</label>
  		<input type="text" name="name" placeholder="Enter Your Name" class="form-control" required><br>
  		<label>Mobile Number</label> 
  		<input type="text" name="numbe" placeholder="Enter Your Mobile Number" class="form-control"required><br>
  		<label>Email ID</label>
  		<input type="Email" name="email" placeholder="Enter Email ID" class="form-control"required><br>
  		<label for="item">Number of Sitting</label>
  		<input type="number" id="item" name="sitting" min="1" max="20" class="form-control"required style="text-align: center;"><br>
  		 <label>Date Of Booking</label>
  		 <input type="date" name="dat" placeholder="Enter date" class="form-control"required style="text-align: center;"><br>
  	   <label for="dropdown">Choose Time Slot</label>

     <select id="dropdown" name="dropdown" class="form-control" style="text-align: center;" >
        <option value="option2">12:00 - 13:00</option>
        <option value="option3">13:00 - 14:00</option>
        <option value="option4">14:00 - 15:00</option>
        <option value="option5">15:00 - 16:00</option>
        <option value="option6">16:00 - 17:00</option> 
        <option value="option7">17:00 - 18:00</option>
        <option value="option8">18:00 - 19:00</option>
        <option value="option9">19:00 - 20:00</option>
        <option value="option10">20:00 - 21:00</option>
        <option value="option11">21:00 - 22:00</option>
        <option value="option12">22:00 - 23:00</option>
        <option value="option13">23:00 - 24:00</option>
    </select required><br>


  		 <button type="submit" class="w-100 bg-success">Submit</button><br><br>
  		

  	</form>
  </div>

<?php include ('include/footer.php'); ?>