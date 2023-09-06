<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.dddd
{
    background-color: rgba(0, 0, 0, 0.19);
    width:100%;
    height: 95px;
}
.ffff
{
    font-size: 40px;
    opacity: 0.7;
    color: black;
    text-decoration: none;
    font-style: bold;
}
.l1
{
	margin-left:310px;
	font-size: 35px;
    color: white;
    text-decoration: none;
    font-weight: bold;
    -webkit-text-stroke: 1.5px black;
}
.l1:hover
{
	text-decoration: none;
	color: black;
}

/*for respoecive nave bar*/

.topnav {
  background-color: rgba(0, 0, 0, 0.19);
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 40px;
  margin-left: 20px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;

}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/*end */
/*media*/
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav a.active {
  background-color: white;
  color: black;
  opacity: 0.5;
}
}
/*end media*/
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
</style>
<script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
</head>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<body style="background: url(5.jpg);background-repeat:no-repeat;background-size: 100% 630px;">
<div class="topnav" id="myTopnav">
  <a href="adminlogin.php" class="active">Home</a>
  <a href="aa.php">Add Accountant</a>
  <a href="va.php">View Accountant</a>
  <a href="home1.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>	
<br><br>
    <font  class="ffff" style="margin-left: 40px;font-family: Arial, Helvetica, sans-serif;">&nbsp;&nbsp;Admin Panel</font>
        <br>
        <a href="aa.php" class="l1" style="font-size:3vw;">Add Accountant</a><br>
    	<a href="va.php" class="l1" style="font-size:3vw;">View Accountant</a>


</body>
</html>