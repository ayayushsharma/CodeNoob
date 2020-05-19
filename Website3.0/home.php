<?php
session_start();

$_SESSION['key']='0';
?>

<div class="body">
<link rel="stylesheet" href="home.css">
	<header class="header">
    <h1> COVID TRACKER 2020 </h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> 
    <br>
    <br>  
    <br>
		<nav>
      
      <ul>
			<li class="active"><a href="map.php">MAP</a></li>
			<li><a href="login.php">Admin login</a></li>
		</ul></nav>
	</header>
		
	<div class="mainContent">
		<div class="content">	
				<article class="content-1">	
					<header>
						<h2>How does this website work?</h2>
					</header>
				
					
					<content>
						<p>The government has specified the red ,orange and green zone districts. But do you really know if your locality is safe or not.  </p>
						<p>This is where our website helps you . We tell you whether your neighbourhood is safe from coronavirus or not., whether you should stay at home or can go out safely to buy neccesary things</p>
            						<h2>Know where are covid affected areas in your city.</h2>
						<p><button>Enter city name</p>
					</content>
					
				</article>

				<article class="content-2">	
					<header>
						<h2>Number of corona virus cases </a></h2>
          </header>
					
					<content>
            <p><a href="https://www.worldometers.info/coronavirus/">In the world</a></p>
            <p><a href="https://www.coronatracker.com/country/india/">In India</a></p>
            					
					</content>
				
				</article>
		</div>
			
				<aside class="sidebar-1">
					<article>
					<h2>Guidelines to be followed </h2>
					<p><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">In this situation of pandemic,WHO has released certain guidelines for every person to prevent himself from getting the disease.</a></p>
				    </article>
				</aside>
				
				<aside class="sidebar-2">
					<article>
					<h2>Covid Helpline Number</h2>
					<p><a href="https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf">Click here to know the helpline number of your state.</a></p>
				    </article>
				</aside>				

				<aside class="sidebar-3">
					<article>
					<h2>Know more about coronavirus</h2>
					<p><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1">click here to know more</a></p>
				    </article>
				</aside>	
	</div>
	
	<footer class="footer">
		<p>Copyright &copy; 2020 <a href=""> Team CodeNoob</a></p>
	</footer>
  
</div>