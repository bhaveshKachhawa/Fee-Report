<?php  
    require 'connection.php';
    $query='select * from admin';
    $result=mysqli_query($conn,$query);
    $res=mysqli_fetch_assoc($result);
    if(isset($_GET["B1"]))
    {
        if($_GET['mail1'] == $res['username'] && $_GET['pswrd1'] == $res['password'])
        {
            header("Location:adminlogin.php");   
        }       
        else
        {
            ?>
            <script type="text/javascript">
                alert('Admin Not Found!');
            </script>
            <?php
        }
    }   
    if(isset($_GET["FPB1"]))
    {
            if(!empty($_GET["FPB1"]))
       {
        $password=$_GET["FP1"];
        
            mysqli_query($conn,"UPDATE admin set password='" . $password . "' WHERE username='" . $res['username'] . "'");             
    }
}

//For Second Login Button
    $query2='select * from accountant';
    $result2=mysqli_query($conn,$query2);
    $r= mysqli_query($conn,'SELECT * FROM accountant');
    $rowcount=mysqli_num_rows($r);
     if($rowcount == 0)
     {
            ?>
            <style type="text/css">
                .disable
                {
                    pointer-events: none; 
                    cursor: default; 
                    opacity: 0.4;
                }
            </style>
            <?php
     }
    if(isset($_GET['B2']))
    {
            while($res2=mysqli_fetch_assoc($result2))
            {
                if($_GET['mail2'] == $res2['username'] && $_GET['pswrd2'] == $res2['password'])
                {
                    ?><script type="text/javascript">
                        window.location.href = "accoutantlogin.php";
                    </script><?php
                }     
            }
            ?>
            <script type="text/javascript">
                alert('User Not Found!');
            </script>
            <?php
             
    }

//forget password 2

    if(isset($_GET["FPB2"]))
    {
       if(!empty($_GET["FPB2"]))
       { 
            $query2='select * from accountant';
            $result2=mysqli_query($conn,$query2);
            $var=1;
            while ($res2=mysqli_fetch_assoc($result2))
            {
                if($res2['username'] == $_GET['FE2'])
                {
                    $var=0;  
                    $password=$_GET["FP2"];
            
            mysqli_query($conn,"UPDATE accountant set password='" . $password . "' WHERE username='" . $res2['username'] . "'");                 
                
            }
        }
        if($var == 1)
        {
           echo "<script>alert('User Not Found!');</script>";
        }
    
}
}
?>











<html>
<style type="text/css">
    #FP,#FP1
    {
        width:350px;
        height: 50px;
    }
    .login-container{
    margin-top: 4%;
    margin-bottom: 4%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 2%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}
.dddd
{
    background-color: rgba(0, 0, 0, 0.19);
    width:100%;
    height: 95px;
}
.ffff
{
    font-size: 35px;
    opacity: 0.7;
    color: black;
}
</style>
<script type="text/javascript">
    function myFunctionF2() {
  var x = document.getElementById("FP");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunctionF1() {
  var x = document.getElementById("FP1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  var x = document.getElementById("sp1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
      var x = document.getElementById("sp2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
<script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background: url(5.jpg);background-repeat:no-repeat;background-size: 100% 100%;">
    <div class="dddd"><br>
        <font  class="ffff" style="margin-left: 30px;">FeeReport</font>
    </div>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Admin Login Form</h3>
                    <form method="get">
                        <div class="form-group">
                            <input type="Email" class="form-control" placeholder="Your Email *" value="" name="mail1" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name="pswrd1" required id="sp1" / pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}" title="Must contain at least one  number and one uppercase and lowercase letter.">
                        </div>
                        <input type="checkbox" onclick="myFunction1()">Show Password
                        <div class="form-group"><br>
                            <input type="submit" class="btnSubmit" value="Login" name="B1" />
                        </div>
                        <div class="form-group">
                            <a href="" class="ForgetPwd" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2 disable">
                    <h3>Accountant Login Form</h3>
                    <form>
                        <div class="form-group">
                            <input type="Email" class="form-control" placeholder="Your Email *" value="" required name="mail2" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" required name="pswrd2" id="sp2" / pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}" title="Must contain at least one  number and one uppercase and lowercase letter.">
                        </div>
                        <input type="checkbox" onclick="myFunction2()"><font color="white">Show Password</font>
                        
                        <div class="form-group"><br>
                            <input type="submit" class="btnSubmit" value="Login" name="B2" />
                        </div>
                        <div class="form-group">

                            <a href="" class="ForgetPwd" value="Login" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!--Forget Password2-->
       <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get">
            <input type="Email"  placeholder="Enter Email"  required style="width: 350px;height: 50px;" name="FE2">
            <input type="password" placeholder="Enter New Password " id="FP1" required name="FP2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}" title="Must contain at least one  number and one uppercase and lowercase letter.">
            <input type="checkbox" onclick="myFunctionF1()">Show Password
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" name="FPB2">
        </form>
      </div>
    </div>
  </div>
</div>

<!--forget password2-->




























<!--Forget Password1-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get">
            <input type="password" name="FP1" placeholder="Enter New Password " id="FP" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,100}" title="Must contain at least one  number and one uppercase and lowercase letter.">
            <input type="checkbox" onclick="myFunctionF2()">Show Password
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" name="FPB1">
        </form>
      </div>
    </div>
  </div>
</div>
<!--end forget password 1-->
</body>        
</html>