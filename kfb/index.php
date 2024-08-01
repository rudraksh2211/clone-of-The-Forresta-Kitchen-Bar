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
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: sandybrown;
  overflow-x: hidden;
  transition: .1 s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display:block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


</head>
<body style="background-image:url( assest/image/bg.jpeg); box-shadow: 10px 10px 10px 10px gray;" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#kitchen">Kitchen</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#bar">Bar</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#mic">Microbrewery</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dining.php">Dining Options</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="book.php">Book Table</a>
      </li>
    </ul>
  </div>

</div>


<span class="fixed-top" style="font-size:50px;cursor:pointer ; color: sandybrown; width:min-content;" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="container" >
	<a href="https://www.theforrestakitchenbar.com/"> <img src="assest/image/logo1.png" class="rd"></a>
	<p style="text-align: center; color: white; font-style:italic;" class="mt-3"><b>Serving Since 2010</b></p>
</div>
<!--slide show-->
<div class="container"><div id="home">

	<div id="demo" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>

		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assest/image/sl1.jpg" alt="" class="d-block w-100 ">
			</div></div>
			<div class="carousel-inner">
				<div class="carousel-item ">
					<img src="assest/image/sl2.jpeg" alt="" class="d-block w-100">
				</div></div>
				<div class="carousel-inner">
					<div class="carousel-item ">
						<img src="assest/image/sl3.jpeg" alt="" class="d-block w-100">
					</div></div>
					<div class="carousel-inner">
						<div class="carousel-item ">
							<img src="assest/image/sl4.jpg" alt="" class="d-block w-100">
						</div></div>
						<div class="carousel-inner">
							<div class="carousel-item ">
								<img src="assest/image/sl5.jpg" alt="" class="d-block w-100">
							</div></div>
							<div class="carousel-inner">
								<div class="carousel-item ">
									<img src="assest/image/sl6.jpg" alt="" class="d-block w-100">
								</div></div>
								<div class="carousel-inner">
									<div class="carousel-item ">
										<img src="assest/image/sl7.jpg" alt="" class="d-block w-100">
									</div></div>
									<div class="carousel-inner">
										<div class="carousel-item ">
											<img src="assest/image/sl8.jpg" alt="" class="d-block w-100">
										</div></div>
										<div class="carousel-inner">
											<div class="carousel-item ">
												<img src="assest/image/sl9.jpg" alt="" class="d-block w-100">
											</div></div>
											<p>.</p>

										</div></div></div>
								
									<div class=" mt-2"><div id="about">
										<div style="background-color:white; border-radius: 50px;" class="container mt-5" >
										<div style="text-align: center;color:black; font-weight: 3000;">
											<br><h2 ><u>Unlock Memories with <br>Renewed Zeal</u></h2><br><br>
											<p style="font-style: italic;">A serene ambiance paired with delectable food is what The Forresta Kitchen & Bar is all about.</p>
											<br><p style="font-style: italic;">Jaipur is not short of restaurants where you can give your taste-buds a delicious treat. But, The Forresta Kitchen & Bar is the place<br> for those who believe, “good food tastes better when accompanied with indulgent surroundings”. While entering through <br>the door you get the feeling of going through a thick tree cave which opens up to a beautiful setting with lush greenery. Add to that the background music,<br> pleasantly dim lighting, and more ensure an ambience that totally cuts you off from the hustle and bustle of the city.</p>
											<br><p style="font-style: italic;">Let’s accept the fact that we can satiate our hunger by ordering food online, but when we choose to step out; it means that we want to <br>enjoy a refreshing setting that re-energize our mind and makes our dining special as well as safe. The Forresta Kitchen & Bar<br> has always been conscious about it and thus offers an impeccable fine dining experience amidst nature’s bounty. So, here’s a compilation of experiences <br>with a comprehensive menu of Drink and Dine.</p>
											<a href="images.php"> <button type="button"  style="font-family: sans-serif; background-color: lightgray; border: 2px solid black; border-radius: 7px;">View images</button></a><br><br><br><br>

										</div></div></div>
										
										<div style="text-align: left; margin-left: 100px; font-weight: 3000; background-color: white;border-radius: 50px;" class="container mt-5">
											<div class="row">
												<div class="col">	
											<br><h2 style="color: black; margin-left: 90px;"><u>Kitchen</u></h2>
												
													<br><br><p style="font-style: italic;">Once you have finished admiring the surroundings, you can get to the equally important delights, Food!</p>
													<p style="font-style: italic;">The Forresta Kitchen & Bar offers a wide variety of delectable cuisines to choose from well seasoned Vegetarian cuisines to the Non Vegetarian array. The tempting food would always leave you wanting for more and before you know it, you find yourself already thinking about when you will be visiting again.</p>
													<a href="assest/pdf/menu.pdf"><button type="button"  style="font-family: sans-serif; background-color: lightgray; border: 2px solid black; border-radius: 7px;">View Menu</button><br><br></a>	
													<a href="dining.php"><button type="button"  style="font-family: sans-serif; background-color: lightgray; border: 2px solid black; border-radius: 7px;">Dining Options</button></a> 
												</div>

												<div class="col">
													<img src="assest/image/kit1.jpg" style="border-radius: 50px;">
												</div>
											</div></div></div>
                                                <div id="bar">
											<div class="container mt-5" style="text-align: left; margin-left: 100px; background-color: white;border-radius: 50px;">
												<div class="row">
													<div class="col">
													<img src="assest/image/bar1.jpg" style="border-radius: 50px;">
												</div>
												<div class="col">
												<br><h2 style="color: black; margin-left:120px"><u>Bar</u></h2><br>
												<p style="font-style: italic;">As a hectic city day retires, guest can<br> unwind at this bar midst a contemporary <br>a la mode ambience. The Bar is open<br> till the wee hours and serves craft beer <br>and an international range of popular cocktails.<br> Along with that, you can enjoy in-house<br> music to groove the mood and occasional live screenings of sports events & live music<br> by guest band performers.</p>
                                            </div></div></div></div>
                                            <div id="mic">
                                            <div class="container mt-5" style="text-align: left; margin-left: 100px; background-color: white;border-radius: 50px;" >
                                            	<div class="row">
                                           <div class="col"style="margin-left: 50px;">
												<br><h2 style="color: black; margin-left:120px"><u>Microbrewery</u></h2><br>
												<p style="font-style: italic;">The Forresta’s Microbrewery usually has six craft beers on tap that you can relish while savouring the delicious food. You can order a sample craft beer to find the one that suits your taste. Make your days and nights memorable with Rajasthan's first microbrewery! </p>
												<img src="assest/image/mic1.jpg" style="margin-left: 50px;">
                                             </div>
												<div class="col">
													<img src="assest/image/mic2.jpg"style="margin-left: 50px;">
												</div>
                                            
                                            </div></div></div>
      <?php
      include ('include/footer.php');
  ?>