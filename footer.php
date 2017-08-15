<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
input[type=button]
{
  background-color: black;
  color: black;
}
.btn-link
{
  background-color: black;

}


   .headsoc{
    text-align: center;
    padding-top: 20px;
   }
   
    #foot{
      padding-top: 15px;
      text-align: center;
    }


    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<div class="row" style="color:white;background-color: black">
  <div class="col-sm-4"><p id="foot"><strong>Office of Alumni Affairs & International Relations,<br>
                   Indian Institute of Technology, Kharagpur<br>
                    Pin-721302, West Bengal, India<br>
                    Ph: 03222-282236 <br>
                    Email: aao@hijli.iitkgp.ernet.in</strong></p></div>
  <div class="col-sm-4"><div id="map" class=" col l4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d784.9332419499943!2d87.30956309721707!3d22.3193820950838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a63547376e5c22c!2sMain+Building+IIT+KGP!5e0!3m2!1sen!2sin!4v1471677047994" width="400" height="180" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
<div class="col-sm-4">
               <div class="headsoc"><strong>Connect with us on</strong></div> <br>
               <div class="btn-group btn-group-justified" class="btn-link"> 
                  <div class="btn-group" >
                    <button type="button" class="btn btn-link" style="font-size:36px"><a href="http://www.facebook.com/iitkgp.alumnicell?fref=ts&ref=br_tf" class="icoFacebook" class="img-responsive" title="Facebook" style="color: #3e5b98"><i class="fa fa-facebook-square"></i></a></button>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-link" style="font-size:36px"><a href="http://twitter.com/IITKgpAlumni" class="icoTwitter" class="img-responsive" title="Twitter"><i class="fa fa-twitter-square" style="color: #4da7de"></i></a></button>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-link" style="font-size:36px"><a href="https://www.linkedin.com/company-beta/13273135/" class="icolink" class="img-responsive" title="linkedin"><i class="fa fa-linkedin-square" style="color: #3371b7"></i></a></button>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-link" style="font-size:36px;"><a href="http://www.youtube.com/channel/UCtnSs1CT59Rd8L6VlOAxzRA" class="icoyoutube" class="img-responsive" title="You Tube"><i class="fa fa-youtube-square" style="color:#e02a20;"></i></a></button>
                  </div>
                </div>
              </div>
</div>

<footer class="container-fluid text-center">
  &copy; 2016 Students' Alumni Cell
</footer>

</body>
</html>
