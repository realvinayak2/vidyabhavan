<?php
session_start();
if(!isset($_SESSION['adminid']))
{
	echo "<script>window.location='adminlogin.php';</script>";
}
include("dbconnection.php");
include("headers.php");
?>
<div class="wrapper col2">
  <div id="breadcrumb">

<div class="dropdown">
<strong>Admin Dashboard</strong>
</div>


  </div>
</div>
<div class="wrapper col4">
  <div id="container">
  <p><form method="get" action=""><strong>Date -</strong> <input type="date" name="date" value="<?php echo $_GET[date]; ?>" ><input type="submit" name="submit" value="Submit"></form></p>
    <h1>Number of Startup Records :     
    <?php
	$sql = "SELECT * FROM appointment WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND appointmentdate ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>	
    <!--<h1>Number of Billing Reports : -->
    
    </h1>
   
    <h1>Number of Student Records : 
    <?php
	$sql = "SELECT * FROM patient WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND admissiondate ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>    
    <!--<h1>Number of Treatment Records : 
    
	
    </h1>
    
    <h1>Number of Prescription  : 
    
	
    </h1>
    <br>
<hr>
    
    <h1 style="color:rgba(0,4,70,1.00)"> &nbsp; Database Records</h1>
   
   
    <h1>Number of Prescription Records : 
   
    </h1>
    <h1>Number of Treatment Types : -->
    
    
  
    <h1>Number of Admin records :  
    <?php
	$sql = "SELECT * FROM admin WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
    <!--<h1>Number of Department Records : -->
   
    </h1>
     <h1>Number of Mentor Records : 
    <?php
	$sql = "SELECT * FROM doctor WHERE status='Active' ";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
 <h1>Number of Mentor Timings Records : 
    <?php
	$sql = "SELECT * FROM doctor_timings WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
    <!--<h1>Number of Billing Records :-->
   
    </h1>
  </div>
</div>

    <div class="clear"></div>
  </div>
</div>
<?php
include("footrs.php");
?> 