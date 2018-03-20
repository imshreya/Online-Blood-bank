<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SKITGEEKS</title>
<link rel="stylesheet" href="/friends/hackathon_home_page.css" type="text/css" />
<script type="text/javascript">
	function toggle_visibility(id){
   		var e=document.getElementById(id);
		if(e.style.display=='block')
         e.style.display='none';
		 else
		 e.style.display='block';
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
  <a href ="/friends/hackathon_Register.php">Register</a>
  <a href = "#">Why Need Blood?</a>
  <a href = "#">Who Needs Blood?</a>
  <a href = "#">Tips on Donating!</a>
  <a href = "#">Most Blood Needed</a>
  <a href = "#">Refer a Friend</a>
  <a href = "#">Contact Us</a></div>

 <div id="submit" class="search-position" >
   <div id="search-wrapper">
	<div id="search-container">
 	 <form method="get" id="form" action="/friends/hackathon_home_page.php">
	  <table>
	   <tr>
	    <td>Blood Group</td><td><input type="text" placeholder="Enter Blood Group"  name="BGin"/></td>
		<td>Units Required</td><td><input type="text" placeholder="Enter Number of units" name="units"/></td>
		<td>Preferred Location</td><td><input type="text" placeholder="Enter Preffered Location" name="Location"/></td>
		<td><input type="submit" onclick="toggle_visibility(tabled)" value = "Search"></td>
	   </tr>
	  </table>
	 </form>
	</div>
   </div>
  </div>		
  <br>
 
  <div class="webcontents"> 
  <ul class="WebDetails"><li>This Online Blood Bank Portal will provide access to the availability of blood in all the nearby blood banks at one place          to all the people who are in urgent need of blood.</li><br>
  <li> Donors can access all the details of any ongoing Blood Donation Camp in their nearby area at any given time and can       have their voluntary registration for donation by authenticating themselves through their Aadhar Number login.</li></ul>
 </div>
  
  <div id="tabled" class="popup-position">
   <div id="pop-wrapper">
	<div id="popup-container">

  <?php

    /*mysql_connect($host,$user,$password) or die("server not available");
    mysql_select_db($dbname) or die("Database not available");
	*/
	$BGin = $_POST['BGin'];
	$units = $_POST['units'];
	$City = $_POST['Location'];
	$conn = new mysqli("localhost","root", "","hackathon");
	$sql = "select Bbank.Name as Bank_Name,bgBank1.Avalability as Availability,Bbank.Mobile1 as Contact_Number from BBank,bgBank1     where Bbank.BankID = bgBank1.BankID and (bgBank1.BloodGroup = '$BGin' and Availablity >= '$units' and City = '$Location')";
		$result = $conn ->query($sql);
		  echo "<table border ='1'><tr>";
		  if ($result->num_rows > 0)
		  {
				  $i = 0;
				  echo "<th>'Bank Name'</th>";
				  echo "<th>'Availability'</th>";
				  echo "<th>'Availability'</th>";
			      echo "</tr>";
		
			while ($row = $result->fetch_assoc())
			{
			  echo "<tr>";
			  foreach ($rows as $data)
			  {
				echo "<td align='center'>". $data . "</td>";
			  }
			}
		  }else{
			echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
		  }
		  echo "</table>";
		
		?>
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
	        
	  <p class="para3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SKITGEEKS &copy;2018</p>
    </div>
  
	
</body>
</html>

