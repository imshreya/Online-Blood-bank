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
 	 <form method="get" id="form" action="/friends/hackathon_home_page.php">
	  <table>
	   <tr>
	    <td>Blood Group</td><td><input type="text" placeholder="Enter Blood Group"  name="BGin"/></td>
		<td>Units Required</td><td><input type="text" placeholder="Enter Number of units" name="units"/></td>
		<td>Preferred Location</td><td><input type="text" placeholder="Enter Preffered Location" name="Location"/></td>
		<td><input type="button" onclick="toggle_visibility('tabled')" value = "Search"></td>
	   </tr>
	  </table>
	 </form>
	</div>
   </div>
</div>		
  <br>
 
  
  
  <div id="tabled" class="popup-position">
  <form method="post" action = "/friends/hackathon_home_page.php">  
  <table border="2" class="tableclass">
    <thead>
        <tr>
            <th>Bank Name</th>
            <th>Availability</th>
            <th>Units</th>
			<th>Contact Number</th>
        </tr>
		<tr>
            <td>SDMH</td>
            <td>YES</td>
            <td>5</td>
			<td>98750746548</td>
        </tr>
		<tr>
            <td>Swasth Kalyaan</td>
            <td>YES</td>
            <td>4</td>
			<td>01412657854</td>
        </tr>
		<tr>
            <td>SMS</td>
            <td>YES</td>
            <td>20</td>
			<td>01414587448</td>
        </tr>
		<tr>
            <td>Fortis</td>
            <td>YES</td>
            <td>6</td>
			<td>98887545887</td>
        </tr>
    </thead>
</table>
</form>
	</div>
	
  <div class="webcontents"> 
   <ul class="WebDetails"><li>This Online Blood Bank Portal will provide access to the availability of blood in all the nearby blood banks at one     place          to all the people who are in urgent need of blood.</li><br>
    <li> Donors can access all the details of any ongoing Blood Donation Camp in their nearby area at any given time and can       have their         voluntary registration for donation by authenticating themselves through their Aadhar Number login.</li></ul>
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

