 <html>
 <head> <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	   <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
	 <li data-target="#myCarousel" data-slide-to="5"></li> 
	 
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="mentorship.jpg"  style="width:100%; ">
      </div>

      <div class="item">
        <img src="alvida1.jpg"  style="width:100%;">
      </div>
    
      
	        <div class="item">
        <img src="3.jpg"  style="width:100%;">
      </div>
      <div class="item">
        <img src="givingback.jpg"  style="width:100%;">
      </div>
	        <div class="item">
        <img src="sam3.jpg"  style="width:100%;">
      </div>
	        <div class="item">
        <img src="yoy1.jpg"  style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</html>


