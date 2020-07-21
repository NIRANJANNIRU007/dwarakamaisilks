<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Dwarakamai<br>Silks</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Dwarakamai Silks</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Dwarakamai Silks</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
 
  <div class="w3-container w3-center w3-blue">
	
	<button class="w3-btn w3-white" id ="prev" onclick="previous(this)" >  &lt &lt PREV</button>
	<button class="w3-btn w3-white" id="next" onclick="next(this)">NEXT &gt &gt</button>
	
  </div> <br><br><br>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row">
    <div class="w3-col w3-container m4 ">
      <img src="" style="width:100%" onclick="onClick(this)" id ="0" name="" alt="">
      <img src="" style="width:100%" onclick="onClick(this)" id ="1" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="2" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="3" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="4" name="" alt="">
    </div>
    <div class="w3-col w3-container m4 ">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="5" name="" alt="">
      <img src="" style="width:100%" onclick="onClick(this)" id ="6" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="7" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="8" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="9" name="" alt="">
    </div>
	<div class="w3-col w3-container m4 ">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="10" name="" alt="">
      <img src="" style="width:100%" onclick="onClick(this)" id ="11" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="12" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="13" name="" alt="">
	  <img src="" style="width:100%" onclick="onClick(this)" id ="14" name="" alt="">
    </div>
  </div>
  
<br><br><br>
  <div class="w3-container w3-center w3-blue">
	
	<button class="w3-btn w3-white" id ="prev" onclick="previous(this)" >  &lt &lt PREV</button>
	<button class="w3-btn w3-white" id="next" onclick="next(this)">NEXT &gt &gt</button>
	
  </div> 

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
//Loading data from googlesheets
			var data;
			var max;
			var page= 1 ;
			var xmlhttp = new XMLHttpRequest();
			//Loading data from googlesheets
			xmlhttp.onreadystatechange = function() {
			  if (this.readyState == 4 && this.status == 200) {
				data = JSON.parse(this.responseText);
				tot = Object.keys(data.feed.entry).length;
				max = tot/15;
				load();
			  }
			};
			xmlhttp.open("GET", "https://spreadsheets.google.com/feeds/list/1-vuyMkUD8F7PGPQGt1ET9rEpP6Rfn-B-LuPm8dUBI3o/od6/public/values?alt=json", true);
			xmlhttp.send();
			function load(){
			var element;
			for (i = (page-1) * 15,j=0;i<15 && i<tot;i++,j++)
			{
			element = document.getElementById(j);
			element.src = "images/" + data.feed.entry[i].gsx$imagelocation.$t + ".jpg";
			element.name = i;
			element.alt = data.feed.entry[i].gsx$name.$t			
			}}

//Previous and Next button functions
function next() {
 if (page==max-1)
	{
	page = page+1;
	document.getElementById("next").disabled = true;
	load();
	}
 else
	{
	page = page+1;
	document.getElementById("prev").disabled = false;
	load();
	}
}

function previous() {
 if (page==2)
	{
	page = page-1;
	document.getElementById("prev").disabled = true;
	load();
	}
 else
	{
	page = page-1;
	document.getElementById("next").disabled = false;
	load();
	}
}


// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
