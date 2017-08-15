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
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

   @media only screen and (min-width: 1200px) {

.navbar .nav li {
    display: table-cell;
    width: 1%;
    float: none;
}

.navbar .nav li a {
    font-weight: bold;
   
    border-left: 1px solid rgba(255, 255, 255, .75);
    border-right: 1px solid rgba(0, 0, 0, .1);
}
}


#logo
{
margin-left: 40%;
}
.head
{
  background-color: white;
}
.about
{
    box-shadow: 10px 10px 5px #888888;
    border-radius: 50px;
    background: linear-gradient(white, #D3D8E8);
  background-repeat: no-repeat;
}
#about_head
{
  text-align: center;
  text-decoration: underline;
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
</style>
</head>
<body>


  <div class="container-fluid"></div>
  <div class="head"> <a  href="#"><img  id="logo" src="sac_logo.png" width=""></a></div>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Events</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-gift"></span> Initiatives</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Publications</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> The Team</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Sponsors</a></li>
      </ul>
     
    </div>
  </div>
</nav>



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
        <img src="slider/mentorship.jpg"  style="width:100%; ">
      </div>

      <div class="item">
        <img src="slider/alvida1.jpg"  style="width:100%;">
      </div>
    
      
          <div class="item">
        <img src="slider/3.jpg"  style="width:100%;">
      </div>
      <div class="item">
        <img src="slider/givingback.jpg"  style="width:100%;">
      </div>
          <div class="item">
        <img src="slider/sam3.jpg"  style="width:100%;">
      </div>
          <div class="item">
        <img src="slider/yoy1.jpg"  style="width:100%;">
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



  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 

  <br />
  <h2 id="about_head">ABOUT US</h2>
  <br /><br />

    <div class="about" style="background-color: white;">
                    <p class="z-depth-1 text_align" style="font-size: 16px;padding: 3.3em 3em">
                      The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the aegis 
                      of the Dean of Alumni Affairs and International Relations. It strives to bridge the gap between 
                      IIT Kharagpur and its esteemed alumni community.<br>
                            <br>
                       The Students' Alumni Cell continuously endeavours to strengthen the relations of 
                       the alumni of this Institute and their alma mater. 
                       It has been instrumental in organising the Annual Alumni Meet, Regional Student Alumni Meet, 
                       regular guest lectures by distinguished alumni in the campus, publishing the annual 
                       literary magazine (Yearnings of Yore) & the annual yearbook.  
                       The Students' Alumni Cell also operates the Student - Alumni Mentorship Programme, My Imprint
                      (Giving Back - Alumni contribution) and organises Alvida (the annual farewell dinner).
                    </p>
                </div>
      
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
