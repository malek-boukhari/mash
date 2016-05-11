<?php
//fuction header() we call everytime we have a new page
function headerCode(){
	echo'
		<header id="main_header">
			<h1><a href="index.php">Smoub</a></h1>	
			<div>
				<h2><a class="button" href="following.php">Following</a></h2>
				<h2><a class="button" href="today.php">Today</a></h2>
				<h2><a class="button" href="fashion.php">Fashion</a></h2>
				<h2><a class="button" href="motors.php">Motors</a></h2>
				<h2><a class="button" href="electronics.php">Electronis</a></h2>
				<h2><a class="button" href="sporting.php">Sporting</a></h2>
				<h2><a class="button" href="toysandhobbies.php">Today</a></h2>
				<h2><a class="button" href="home.php">Home</a></h2>
				<h2><a class="button" href="collectibles.php">Collectibles</a></h2>
				<h2><a class="button" href="collectibles.php">Other</a></h2>
			</div>
		</header>	
	';
}

//Code for footer
function footerCode(){
	echo '
		<footer id="main_footer">
				<tr>
					<td><a href="https://www.facebook.com/shady.smaoui"> YouTube</a></td>
					<td><a href="https://www.facebook.com/shady.smaoui"> Facebook</a></td>
					<td><a href="https://www.facebook.com/shady.smaoui"> Google+</a></td>
					<td>2016 &copy</td>
				</tr>		
		</footer>
	';
}
?>