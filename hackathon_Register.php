<?php
 include('DB.php');
error_reporting(0);
$email = $_POST['email'];
$bg = $_POST['bg'];
$name = $_POST['name'];
$last_donated = $_POST['last_donated'];
$password = $_POST['password'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$Mobile = $_POST['PMob'];
$Res = $_POST['Pres'];
$Pin = $_POST['PIN'];
$S_no = "1";
$Address = "DEFAULT";
$Aadhar = $_POST['aadhar'];
$conn = new mysqli("localhost","root", "","hackathon");
$stmt = $conn->prepare("insert into donor(SNo,AadharNo,Name,Age,Gender,BGroup,Address,Mobile,Email,City,State,Last_Donated,Password,Pin) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sss",$S_no,$Aadhar,$Name,$Age,$Weight,$Gender,$bg,$Address,$Mobile,$email,$city,$state,$last_donated,$pass,$Pin);
$stmt->execute();	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SKITGEEKS</title>
<link rel="stylesheet" href="/friends/hackathon_Register.css" type="text/css" />
<script type="text/javascript">
	function toggle_visibility(id){
   		var e=document.getElementById(id);
		if(e.style.display=='block')
         e.style.display='none';
		 else
		 e.style.display='block';
    }
	function alerting(){
	 alert("Your Registration Has Been Done!");
	}
</script>

</head>

<body class="body">
  <div class="logo">
   <img src="/friends/Images/a_ffd8a0ae.jpg"/>
</div>
   <div class="ls">
     <a href="login.php">Login</a>
	 <a href="signup.php">SignUp</a>
   </div>
   <div class="navbar">
  <a href="/friends/hackathon_home_page.php">Home</a>
  <a href = "/friends/hackathon_Register.php">Register</a>
  <a href = "/friends/hackathon_blood_camp.php">Blood Donation Camp</a>
  <a href = "/friends/hackathon_why_to_donate.php">Why Need Blood?</a>
  <a href = "/friends/who_needs_blood.php">Who Needs Blood?</a>
  <a href = "/friends/tips_on_donating.php">Tips on Donating!</a>
  <a href = "/friends/hackathon_most_needed_blood.php">Most Blood Needed</a>
  <a href = "/friends/hackathon_Contact_Us.php">Contact Us</a></div>



  <div id="submit" class="search-position" >
   <div id="search-wrapper">
	<div id="search-container">
 	 <form method="post" id="form" action="/friends/hackathon_Register.php">
	   <table class="table2" >      
		 <tr>
			<td class="text">Email ID<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="email" placeholder="Enter Your Email ID" />
              </div>
			 </td>
			 <td class="text">Blood Group<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="bg" placeholder="Enter Your Blood Group" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">Name<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="Name" placeholder="Enter yout Complete name" />
              </div>
			 </td>
			 <td class="text">Date of Last Donated<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="DOLD" placeholder="Date of last Donated" />
              </div>
			 </td>
		 </tr>
		  <tr>
			<td class="text">Password<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="password"  name="pass" placeholder="Enter your Password" />
              </div>
			 </td>
			 <td class="text">Age<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="age" placeholder="Enter your Age" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">Comfirm Password<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="password"  name="compass" placeholder="Re-Enter Your Password" />
              </div>
			 </td>
			 <td class="text">Weight<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="weight" placeholder="Enter your Current Weight" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">Country<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="country" placeholder="Enter your City" />
              </div>
			 </td>
			 <td class="text">Gender<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="gender" placeholder="Enter Your Gender" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">State<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="State" placeholder="Enter your State" />
              </div>
			 </td>
			 <td class="text">Phone : Mobile<span class="span">*</span></td>
			 <td>
			  <div class="field2">
               <input type="text"  name="PMob" placeholder="Enter Mobile No." />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">City/District<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="City" placeholder="Enter City" />
              </div>
			 </td>
			 <td class="text">Phone : Res</td>
			 <td>
			  <div class="field2">
               <input type="text"  name="Pres" placeholder="Enter your Residential Number" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">Location</td>
			 <td>
			  <div class="field2">
                <input type="text"  name="location" placeholder="Enter the Location" />
              </div>
			 </td>
			 <td class="text">Phone : Off</td>
			 <td>
			  <div class="field2">
               <input type="text"  name="Poff" placeholder="Enter your office Number" />
              </div>
			 </td>
		 </tr>
		 <tr>
			<td class="text">Pin-Code</td>
			 <td>
			  <div class="field2">
                <input type="text"  name="PIN" placeholder="PIN" />
              </div>
			 </td>
			 <td class="text">Aadhar Number<span class="span">*</span></td>
			 <td>
			  <div class="field2">
                <input type="text"  name="aadhar" placeholder="Enter Aadhar Number" />
              </div>
			 </td>
		 </tr>
         <tr>
			<td class="text1"></td>
			 <td>
			  <div align="right">
                <input type="submit"  name="submit" value="SUMBIT" class="button" onclick="alerting()"/>
              </div>
			 </td>
			 <td>
			  <div align="left">
                <input type="reset" value="RESET"  class="button"/>
              </div>
			 </td>
		 </tr>
		
		
	  </table>
	 </form>
	</div>
   </div>
  </div>		
  
 <div class="Footer">
      
	  <div>
        <table width="1093" cellpadding="0" cellspacing="0" class="footertable">
          <tbody>
            <tr>
              <td class="main-footer"><a href="TC.php" title="Terms&amp;Conditions"> Terms&amp;Conditions</a></td>
              <td class="main-footer"><a href="/login.php" title="Privacy Policy">Privacy Policy </a> </td>
              <td class="main-footer"><a href="/FAQ.php" title="Ask Any Questions Related to this Site">FAQ's</a> </td>
              <td class="main-footer"><a href="/Add.php" title="Investers">Advertisements </a></td>
              <td class="main-footer"><a href="/Customer.php" title="Customer Support">Customer Services </a> </td>
            </tr>
          </tbody>
        </table>
      </div>
	        
	  <p class="para3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SKITGEEKS &copy;2016</p>
    </div>
  
	
</body>
</html>

