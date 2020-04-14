<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
</head>
<body>
	<header>
		<nav>
			<ul class="nav-ul">
				<li class="nav-list activenav">HOME</li>
				<li class="nav-list">ABOUT US</li>
			    <li class="nav-list">CONTACT US</li>
			</ul>
		</nav>
	</header>


	<div class="bike-collections">
		<div class="product-pic-related">
		  <div class="product-pic"></div>
		    <div class="product-color">
	        <span class="red active" data-color="hsl(360, 91%, 39%)" data-pic=url("img/2.png")></span>
	        <span class="black" data-color="hsl(0,0%,0%)" data-pic=url("img/1.png")></span>
	        <span class="grey" data-color="hsl(0,0%,70%)" data-pic=url("img/4.png")></span>
	        </div>
	    </div>
        <div class="logo-related">
        	<div class="logo"><img class="logo-img" src="img/3.png" ></div>
        	<div class="description">HARLEY-DAVIDSON STREET 750</div>
        	<div class="heading">Carve the canons of the urban grid</div>
        	<ul>
        		<li><i class="fa fa-tachometer" style="margin-right: 10px;"></i>750CC liquid cooled revolution X Engine</li>
        		<li><i class="fa fa-car" style="margin-right: 10px;"></i>Anti-Lock Brakes(ABS)</li>
        		<li><i class="fa fa-caret-up" style="margin-right: 10px;"></i>Light lift off force</li>
        	</ul>
        </div>

	</div>

	<div id="car">
		<div id="car-left">
			<div class="car-name">THE GLC</div>
			<div class="car-description">Strength From Within</div>
			<ul>
				
				<li class="car-list"><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i>MBUX Voice control</li>
				<li class="car-list"><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i>Smartphone-integration.</li>
				<li class="car-list"><i class="fa fa-angle-double-right" style="margin-right: 10px;"></i>MBUX Touch control</li>


			</ul>

		</div>
		<div id="car-img"></div>
		<div id="car-right">
			<div id="racer-img"></div>
			<div id="racer-description">THE RACER</div>
		</div>

		
	</div>


	<div class="bike-collections">
		<div class="product-pic-related">
		  <div class="product-pic1"></div>
		    <div class="product-color">
	        <span class="red active" data-color="rgb(131,152,249)" data-pic1=url("img/e1.png")></span>
	        <span class="yellow" data-color="rgb(24,6,48)" data-pic1=url("img/e2.png")></span>
	        <span class="green" data-color="rgb(116,252,196)" data-pic1=url("img/e3.png")></span>
	        </div>
	    </div>
	    <div style="display: flex; flex-direction:column;justify-content: center;
	    ">
	    	<div id="electric-cycle">ELECTRIC CYCLES FOR NEW GENERATION</div>
	    	<button>Check Now</button>
	    </div>
         



	</div>
 <div class="foot" style="background: hsl(0,0%,80%); text-align: center;"><i class="fa fa-copyright"></i>2020 All Rights Reserved
          <div class="sailee"><a href="">Sailee Salgaonkar</a></div>

	</div>

   <!--	   
   	    <div class="product-pic"></div>
	    <div class="product-color">
	        <span class="blue active" data-color="rgb(131,152,249)" data-pic=url("img/2.png")></span>
	        <span class="dark-blue" data-color="rgb(24,6,48)" data-pic=url("img/1.png")></span>
	        <span class="green" data-color="rgb(116,252,196)" data-pic=url("img/2.png")></span>
	    </div>
   -->


<script type="text/javascript">
	
	$(".product-color span").click(function(){
		$(".product-color span").removeClass("active");
		$(this).addClass("active");
		$(".product-pic").css("background-image",$(this).attr("data-pic"));
   
});

	$(".product-color span").click(function(){
		$(".product-color span").removeClass("active");
		$(this).addClass("active");
		$(".product-pic1").css("background-image",$(this).attr("data-pic1"));
   
});

</script>
  
</body>
</html>