<?php
    require '../connection.php';
    $query='select * from student';
    $result=mysqli_query($conn,$query);

    $query2='select * from student';
    $result2=mysqli_query($conn,$query2);

    $r= mysqli_query($conn,'SELECT * FROM student');
    $rowcount=mysqli_num_rows($r);
    if($rowcount == 0)
    {
        mysqli_query($conn,'ALTER TABLE student DROP COLUMN id');
        mysqli_query($conn,'ALTER TABLE student ADD COLUMN id INT NOT NULL AUTO_INCREMENT FIRST,ADD PRIMARY KEY (id)');             
        ?><script type="text/javascript">alert('No Record.');
        window.location = "../accoutantlogin.php";</script>
        <?php
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
/*For Table*/
    .custab{
    border: 1px solid #ccc;
    padding: 0px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
/*For Table*/    
    /*end media*/
    #r1
    {
      width: 100%;
    }
    #r2
    {
      width: 1010px;
      border-color: black;
    }
    #r3
    {
      margin-top: 0px;
    }
    .B
    {
        padding: 0px;
    }
</style>
<!--For Table-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--For Table-->
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
<script type="text/javascript">
  function e(id)
  {
    location.href="edit.php?did="+id;
  }
  function d(id)
  {
    location.href="delete.php?del="+id;
  }
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
</div>	<br><br><br>
<!--For Table-->
<div class="container" id="r1">
    <div class="row col-md-12 col-md-offset-2 custyle" id="r3">
    <table class="table table-striped custab table-responsive" id="r2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Sex</th>
            <th>Course</th>
            <th>Fee</th>
            <th>Paid</th>
            <th>Due</th>
            <th>Address</th>
            <th>Contact</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
        <?php
              while($res=mysqli_fetch_assoc($result))
              {
                ?><tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['name']; ?></td>
                  <td><?php echo $res['email']; ?></td>
                  <td><?php echo $res['sex']; ?></td>
                  <td><?php echo $res['course']; ?></td>
                  <td><?php echo $res['fee']; ?></td>
                  <td><?php echo $res['paid']; ?></td>
                  <td><?php echo $res['due']; ?></td>
                  <td><?php echo $res['address']; ?></td>
                  <td><?php echo $res['contact']; ?></td>
                  <td class="text-center"><a class='btn btn-info btn-xs'id="<?php echo $res['id']; ?>" onclick="e(this.id)"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a onclick="d(this.id)" class="btn btn-danger btn-xs" id="<?php echo $res['id']; ?>"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr><?php
              } 
        ?>
    </table>
    </div>
</div>

<!--For Table-->
</body>
</html>
