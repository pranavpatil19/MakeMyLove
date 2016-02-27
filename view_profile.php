<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("/includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];

//getting profile details from db
$sql="SELECT * FROM customer WHERE id = $id";
$result = mysqlexec($sql);
$row=mysqli_fetch_assoc($result);

	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$sex=$row['sex'];
	$email=$row['email'];
	$dob=$row['dateofbirth'];
	$religion=$row['religion'];
	$caste = $row['caste'];
	$subcaste=$row['subcaste'];
	$country = $row['country'];
	$state=$row['state'];
	$district=$row['district'];
	$age=$row['age'];
	$maritalstatus=$row['maritalstatus'];
	$profileby=$row['profilecreatedby'];
	$education=$row['education'];
	$edudescr=$row['education_sub'];
	$bodytype=$row['body_type'];
	$physicalstatus=$row['physical_status'];
	$drink=$row['drink'];
	$smoke=$row['smoke'];
	$mothertounge=$row['mothertounge'];
	$bloodgroup=$row['blood_group'];
	$weight=$row['weight'];
	$height=$row['height'];
	$colour=$row['colour'];
	$diet=$row['diet'];
	$occupation=$row['occupation'];
	$occupationdescr=$row['occupation_descr'];
	$fatheroccupation=$row['fathers_occupation'];
	$motheroccupation=$row['mothers_occupation'];
	$income=$row['annual_income'];
	$bros=$row['no_bro'];
	$sis=$row['no_sis'];
	$aboutme=$row['aboutme'];

//end of getting profile detils



	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
//getting image filenames from db
$sql="SELECT * FROM photos WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
	$row=mysqli_fetch_array($result);
	$pic1=$row['pic1'];
	$pic2=$row['pic2'];
	$pic3=$row['pic3'];
	$pic4=$row['pic4'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | View_profile :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $id;?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?php echo $id;?>/<?php echo $pic1;?>">
							<img src="profile/<?php echo $id;?>/<?php echo $pic1;?>" />
						</li>
						<li data-thumb="profile/<?php echo $id;?>/<?php echo $pic2;?>">
							<img src="profile/<?php echo $id;?>/<?php echo $pic2;?>" />
						</li>
						<li data-thumb="profile/<?php echo $id;?>/<?php echo $pic3;?>">
							<img src="profile/<?php echo $id;?>/<?php echo $pic3;?>" />
						</li>
						<li data-thumb="profile/<?php echo $id;?>/<?php echo $pic4;?>">
							<img src="profile/<?php echo $id;?>/<?php echo $pic4;?>" />
						</li>
					 </ul>
				  </div>
			</div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_value">4 hours ago</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $maritalstatus;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $country;?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $profileby;?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $education;?></span></td>
						</tr>
				    </tbody>
				</table>
				<ul class="login_details">
			      <li>Already a member? <a href="login.php">Login Now</a></li>
			      <li>If not a member? <a href="register.php">Register Now</a></li>
			    </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>About Me.</h1>
				    	<p><?php echo $aboutme; ?></p>
				    </div>
				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $bodytype;?></td>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Age / Height :</td>
									<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $physicalstatus;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span><?php echo $profileby;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><?php echo $drink;?></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertounge;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $colour;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $weight;?> KG</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $bloodgroup;?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $smoke;?></span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $caste;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">
 of Birth :</td>
									<td class="day_value closed"><span><?php echo $dob;?></span></td>
								</tr>
							</tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $religion;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<td class="day_value"><?php echo $subcaste;?></td>
								</tr>
							    
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value"><?php echo $education;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Education Detail :</td>
									<td class="day_value"><?php echo $edudescr;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $occupationdescr;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span><?php echo $income;?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value"><?php echo $fatheroccupation;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><?php echo $motheroccupation;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $bros;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $sis;?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>

<?php
//getting partner prefernce
$sql = "SELECT * FROM partnerprefs WHERE custId = $id";
$result = mysqlexec($sql);
$row= mysqli_fetch_assoc($result);

$agemin=$row['agemin'];
$agemax=$row['agemax'];
$maritalstatus=$row['maritalstatus'];
$bodytype=$row['bodytype'];
$complexion=$row['complexion'];
$height=$row['height'];
$diet=$row['diet'];
$religion=$row['religion'];
$caste=$row['caste'];
$mothertounge=$row['mothertounge'];
$education=$row['education'];
$occupation=$row['occupation'];
$country=$row['country'];
$descr=$row['descr'];



?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value"><?php echo $agemin . "to" . $agemax;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value closed"><span><?php echo $bodytype;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed"><span><?php echo $colour;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height;?> Cm</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span><?php echo $religion;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span><?php echo $caste;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed"><span><?php echo $mothertounge;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed"><span><?php echo $country;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">State :</td>
									<td class="day_value closed"><span><?php echo $state;?></span></td>
								</tr>
								
							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div>
        <div class="view_profile">
        	<h3>View Similar Profiles</h3>
        	<ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p5.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p6.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p7.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
           <ul class="profile_item">
        	  <a href="#">
        	   <li class="profile_item-img">
        	   	  <img src="images/p8.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4>2458741</h4>
        	   	  <p>29 Yrs, 5Ft 5in Christian</p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
       </div>
       
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>

<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	