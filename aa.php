<?php
  require 'connection.php';
  if(isset($_GET['signup']))
  {
    $query='select * from accountant';
    $result=mysqli_query($conn,$query);

    $n=$_GET['name'];
    $e=$_GET['email'];
    $p=$_GET['pass'];
    $pn=$_GET['pnumber'];
    $a=$_GET['address'];
    $var=1;

    while($res=mysqli_fetch_assoc($result))
    { 
        if($_GET['email'] == $res['username'])
        {
              ?>
              <script type="text/javascript">
                alert('Email Already Exist!');
              </script>
              <?php
              $var=0;
              break;
        }
    }
    if($var == 1)
    {
        mysqli_query($conn,"INSERT INTO accountant (username,password,name,address,contact) VALUES('$e','$p','$n','$a','$pn')");             
        ?>
        <script type="text/javascript">
          alert("Add Successfully!");
          window.location.href = "adminlogin.php";
        </script>
        <?php
    }
  }
?>

<html>
<head>
	<style type="text/css">
		.dddd
{
    background-color: rgba(0, 0, 0, 0.19);
    width:100%;
    height: 95px;
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
/*for body*/
#risk1
{
  padding: 50px 0;
  height: 750px;
}
#risk2
{
  height: 650px;
  padding: 10px;
}
/*for body*/
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--for body-->
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<!--for body-->

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
<script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

<body style="background: url(5.jpg);background-repeat:no-repeat;background-size: 100% 100%;">
<div class="topnav" id="myTopnav">
  <a href="adminlogin.php" class="active">Home</a>
  <a href="aa.php">Add Accountant</a>
  <a href="va.php">View Accountant</a>
  <a href="home1.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>	<br>
<!--for body-->
<div class="main" id="risk1">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container" id="risk2">
                <div class="signup-content" id="risk3">
                    <div class="signup-form">
                        <h2 class="form-title" style="white-space: nowrap;font-size: 25px;">Add Accountant Form</h2>
                        <form method="get" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                            <label><i class="zmdi zmdi-eye"></i></label>
                            <input type="text" name="pass" id="pass" placeholder="Password" required / pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}" title="Must contain at least one  number and one uppercase and lowercase letter and minimum length must be 8 and maximum 100.">
                            </div>
                                <div class="form-group">
                                <label><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="pnumber" id="re_pass" placeholder="Contact" required pattern="(?=.*\d).{10,10}" title="Only digits allow that length must be 10." />
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-home"></i></label>
                                <input type="address" name="address" id="ads" placeholder="Address" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Add Accountant"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>



</body>
</html>
