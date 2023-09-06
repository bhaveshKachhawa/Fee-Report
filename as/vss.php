<?php
    error_reporting(1);
    $value=$_GET['did'];
    require '../connection.php';
    $query="select * from student WHERE id='$value' ";
    $result=mysqli_query($conn,$query);
    if($result->num_rows === 0)
    {
        ?><script type="text/javascript">alert('Id Not Found');
        window.location = "ss.php";</script>
        <?php
    }
    $res=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
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
<style>
    .l1
{
  
  
    color: white;
    text-decoration: none;
    font-weight: bold;
    -webkit-text-stroke: 1.5px black;
}
</style>
<style type="text/css">
  /*For Table*/
  .table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}

</style>
<script type="text/javascript">
  $(document).ready(function() {

   
   // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
   $('.table-responsive-stack').each(function (i) {
      var id = $(this).attr('id');
      //alert(id);
      $(this).find("th").each(function(i) {
         $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
         $('.table-responsive-stack-thead').hide();
         
      });
      

      
   });

   
   
   
   
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
   
   
   
   
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });
      
    
   // window is less than 768px   
   } else {
      
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
      
      

   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
   
   
   
   

  
// document ready  
});



</script>
<style type="text/css">
  #c
  {
    background-color: black;
    color: white;
    width: 100%;
  }
  #c1
  {
    background-color: white;
    color: black;
    width: 100%;
  }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<body style="background: url(../5.jpg);background-repeat:no-repeat;background-size: 100% 100%;">
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
</div>	<br><br>

<div class="container" style="height: 497px;">

   <h2><?php echo $res['name']; ?></h2>
   <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
      <tbody>
         <tr>
            <th id="c">Id</th>
            <td id="c1"><?php echo $res['id']; ?></td>
         </tr>
         <tr>
            <th id="c">Name</th>
            <td id="c1"><?php echo $res['name']; ?></td>
         </tr>
         <tr>
            <th id="c">Email</th>
            <td id="c1"><?php echo $res['email']; ?></td>
         </tr>
         <tr>
            <th id="c">Sex</th>
            <td id="c1"><?php echo $res['sex']; ?></td>
         </tr>
         <tr>
            <th id="c">Course</th>
            <td id="c1"><?php echo $res['course']; ?></td>
         </tr>
         <tr>
            <th id="c">Fee</th>
            <td id="c1"><?php echo $res['fee']; ?></td>
         </tr>
      </tbody>
   </table>
   
   


</div>
</body>
</html>