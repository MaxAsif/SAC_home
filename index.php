<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    
        }

.container-fluid
{

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
<?php include 'slider/carousal2.php';?>
  
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

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
