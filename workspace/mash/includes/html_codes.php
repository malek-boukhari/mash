<?php
//fuction header() we call everytime we have a new page
function headerCode(){
	echo'
		<header id="main_header">	
			<h2 class="button">Following</h2>
			<h2 class="button">Today</h2>
			<h2 class="button">Fashion</h2>
			<h2 class="button">Motors</h2>
			<h2 class="button">Electronics</h2>
			<h2 class="button">Sporting goods</h2>
			<h2 class="button">Toys & Hobbies</h2>
			<h2 class="button">Home</h2>
			<h2 class="button">Collectibles</h2>
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
					<td> &copy</td>
				</tr>		
		</footer>
	';
}
?>