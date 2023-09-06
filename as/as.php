<?php
  require '../connection.php';
  if(isset($_GET['submit']))
  {
    $query='select * from student';
    $result=mysqli_query($conn,$query);

    $n=$_GET['name'];
    $e=$_GET['email'];
    $pn=$_GET['pnumber'];
    $a=$_GET['address'];
    $sex=$_GET['gender'];
    $c=$_GET['course'];
    $fee=$_GET['fee'];
    $paid=$_GET['paid'];
    $due=$_GET['due'];
    $var=1;

    while($res=mysqli_fetch_assoc($result))
    { 
        if($_GET['email'] == $res['email'])
        {
              ?><script type="text/javascript">alert('Email Already Exist!');</script><?php
              $var=0;
              break;
        }
    }
    if($var == 1)
    {
        mysqli_query($conn,"INSERT INTO student (name,email,sex,course,fee,paid,due,address,contact) VALUES('$n','$e','$sex','$c','$fee','$paid','$due','$a','$pn')");         
        ?>
        <script type="text/javascript">
          alert('Add Successfully!');
          window.location.href = "../accoutantlogin.php";
        </script>
        <?php    
        //message
    }
  }
?>
<html>
<head>
  <style type="text/css">
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
  font-size: 35px;
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
<!--for form-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
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
function f()
{
  var x=document.getElementById('course').value;
  if(x == "BBA")
  {
      x=50000;
      document.getElementById('fee').value=x;
  }
  else if(x == "BCA")
  {
      x=45000;
      document.getElementById('fee').value=x;
  }
  else if(x == "BA")
  {
      x=30000;
      document.getElementById('fee').value=x;
  }
  else
  {
      x="";
      document.getElementById('fee').value=x;
  }
}
function check()
{
  if(document.getElementById('fee').value >= document.getElementById('paid').value)
  {
      document.getElementById('due').value=document.getElementById('fee').value - document.getElementById('paid').value;
  }
  else
  {
    document.getElementById('paid').value="";
  }
}
</script>

<style type="text/css">
  .B
  {
    padding: 0px;
  }
</style>
<script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<body style="background: url(../5.jpg);background-repeat:no-repeat;background-size: 100% 100%;" class="B">
<div class="topnav" id="myTopnav">
  <a href="../accoutantlogin.php" class="active">Home</a>
  <a href="/project fir sa/as/as.php">Add Student</a>
  <a href="/project fir sa/as/vs.php">View Student</a>
  <a href="/project fir sa/as/due.php">Due Fee</a>
  <a href="/project fir sa/as/ss.php">Search Student</a>
  <a href="../home1.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br><br>
<div class="main">
        <div class="container" style="border:2px solid black;">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="get" class="register-form" id="register-form">
                        <h2>Add Student Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Sex :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked value="male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="pincode">Contact :</label>
                            <input type="text" name="pnumber" id="pnumber" pattern="(?=.*\d).{10,10}" title="Only digits allow that length must be 10." required>
                        </div>
                        <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course" required onchange="f()">
                                    <option value=""></option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BA">BA</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fee :</label>
                            <input type="number" id="fee" readonly name="fee">
                        </div>
                        <div class="form-group">
                            <label>Paid :</label>
                            <input type="number" name="paid" id="paid" onmouseleave="check()" required />
                        </div>
                        <div class="form-group">
                            <label>Due :</label>
                            <input type="number" name="due" id="due" readonly />
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" required />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Save Student" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>