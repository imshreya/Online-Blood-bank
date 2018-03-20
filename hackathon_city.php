<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php  $msg=mysql_query("select name from city"); echo $msg;  ?></title>
<script type="text/javascript">
<!--
	function toggle_visibility(id){
   		var e=document.getElementById(id);
		if(e.style.display=='block')
         e.style.display='none';
		 else
		 e.style.display='block';
    }
</script>
<link rel="stylesheet" href="/friends/hackathon_city.css" type="text/css">
<link rel="stylesheet" href="/friends/new_slider.css" />
<script type="text/javascript">
var slideIndex = 1;

function nextSlide(n) {
  showSlides(slideIndex += n);
}


/*function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {n = 1} 
  if (n < 1) {n = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  slides[n-1].style.display = "block"; 
}*/
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
  <a href="/friends/hackathon_contactus.php">ContactUs</a>
  <div class="dropdown">
    <button class="dropbtn">Cities 
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>
  
  
  <div id="cities_toggle" class="popup-position" >
   <div id="popup-wrapper">
	<div id="popup-container">
 	 <form method="post" id="form">
	  <table>
	   <tr><td onclick="city_selected('1')"><a href="/friends/hackathon_city.php">Udaipur</a></td></tr>
       <tr><td onclick="city_selected('2')"><a href="/friends/hackathon_city.php">Jaipur</a></td></tr>
	   <tr><td onclick="city_selected('3')"><a href="/friends/hackathon_city.php">Jaisalmer</a></td></tr>
	   <tr><td onclick="city_selected('4')"><a href="/friends/hackathon_city.php">Jhodpur</a></td></tr>
	  </table>
	 </form>
	</div>
   </div>
  </div>		
  <h1 class="title">UDAIPUR</h1>
  
  <p class="para">
   Content not avalaible due to INTERNET ISSUES.
  </p>
  
  <div class="places">
   <select class="place">	
   <option>Places</option>
    <option onclick="toggle_visibility('click-box') , showSlides('1')">Fateh Sagar</option>
   </select>
  
  <div id="click-box" class="popup-position1">
     <div id="popup-wrapper1">
	   <div id="popup-container1">
 	    <div style="font:'Monotype Corsiva';  color:#33FF33; font-size:14px ; text-align:center;"  ><strong>Fateh Sagar<strong></div>
         <div class="slideshow-container">
			  <div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="/friends/Images/blue.jpg" style="width:100%">
				<div class="text">Features</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="/friends/Images/calm.jpg" style="width:100%">
				<div class="text">Cultures</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="/friends/Images/evolution.jpg" style="width:100%">
				<div class="text">Reviews</div>
			  </div>
	  <a class="prev" onclick="nextSlide(-1)">&#10094;</a>
	  <a class="next" onclick="nextSlide(1)">&#10095;</a>
	</div>
	<br>
    </div>
   </div>
  </div>
	<!-- Click Popup ends -->
	

  
  <div class="Footer">
      
	  <div>
        <table width="1093" cellpadding="0" cellspacing="0" class="footertable">
          <tbody>
            <tr>
              <td class="main-footer"><a href="/friends/hackathon_tc.php" title="Terms&amp;Conditions"> Terms&amp;Conditions</a></td>
              <td class="main-footer"><a href="/friends/hackathon_pp.php" title="Privacy Policy">Privacy Policy </a> </td>
              <td class="main-footer"><a href="/friends/hackathon_faq.php" title="Ask Any Questions Related to this Site">FAQ's</a> </td>
              <td class="main-footer"><a href="/friends/hackathon_Add.php" title="Investers">Advertisements </a></td>
              <td class="main-footer"><a href="/friends/hackathon_cs.php" title="Customer Support">Customer Services </a> </td>
            </tr>
          </tbody>
        </table>
      </div>
	        
	  <p class="para3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SKITGEEKS &copy;2018</p>
</div>
  
</body>
</html>
