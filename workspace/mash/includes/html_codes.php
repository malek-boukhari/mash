<?php
//fuction header() we call everytime we have a new page
function headerCode(){
	echo'
			<div id="highBanner">
				<div id="announceButton" align="right"><a class="button" href="">Create a new ad</a></div>
			</div>
			<div id="banner">
				<div id="IDlogin">
					<form align="right"><input type="text" placeholder="username"/>
					<input type="text" placeholder="password"/>
					<input type="submit" id ="button" value="login"/>
					<input type="submit" id ="button" value="register"/>
				</div>
			<br>
				<div>
					<td><a class="button" href="following.php">Following</a></td>
					<td><a class="button" href="today.php">Today</a></td>
					<td><a class="button" href="fashion.php">Fashion</a></td>
					<td><a class="button" href="motors.php">Motors</a></td>
					<td><a class="button" href="electronics.php">Electronis</a></td>
					<td><a class="button" href="sporting.php">Sporting</a></td>
					<td><a class="button" href="toysandhobbies.php">Today</a></td>
					<td><a class="button" href="home.php">Home</a></td>
					<td><a class="button" href="collectibles.php">Collectibles</a></td>
					<td><a class="button" href="collectibles.php">Other</a></td>
					<td><a class="button" href="login.php">login</a></td>
				</div>
			</div>
	';
	
	echo "
	</div>
	</header>
	<div id=\"top_search\">
	<form id=\"recherche\" name=\"input\" action=\"\" method=\"get\">
	<input type=\"text\" id=\"keywords\" name=\"keywords\" size=\"100\"  class=\"searchBox\" value=\"\"> &nbsp;
	<select id=\"button\" name=\"category\" class=\"searchBox\">
	";
	//include categories here
	createCategoryList();
	echo '
				</select>
				<input type="submit" value="Search" id="button" />
			</form>
		</div>
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
//Creates Category <option>'s for search bar
function createCategoryList(){
	if( ctype_digit($_GET['category']) ){
		$x = $_GET['category'];
	}else{
		$x = 999;
	}
	echo "<option>All Categories</option>";
	$i = 0;
	while(1){
		if(numberToCategory($i)=="Category Does Not Exist"){
			break;
		}else{
			echo " <option value=\"$i\" ";
			if($i==$x){
				echo ' SELECTED ';
			}
			echo " >";
			echo numberToCategory($i);
			echo "</option>";
		}
		$i++;
	}
}
//Category Number to String
function numberToCategory($n){
	switch ($n) {
		case 0:
			$cat = "Antiques";
			break;
		case 1:
			$cat = "Art";
			break;
		case 2:
			$cat = "Automotives";
			break;
		case 3:
			$cat = "Baby";
			break;
		case 4:
			$cat = "Books";
			break;
		case 5:
			$cat = "Business & Industrial";
			break;
		case 6:
			$cat = "Cameras & Photo";
			break;
		case 7:
			$cat = "Clothing & Accessories";
			break;
		case 8:
			$cat = "Collectibles";
			break;
		case 9:
			$cat = "Computers";
			break;
		case 10:
			$cat = "Crafts";
			break;
		case 11:
			$cat = "DVD's & Movies";
			break;
		case 12:
			$cat = "Electronics";
			break;
		case 13:
			$cat = "Health & Beauty";
			break;
		case 14:
			$cat = "Home & Garden";
			break;
		case 15:
			$cat = "Jewelry & Watches";
			break;
		case 16:
			$cat = "Music";
			break;
		case 17:
			$cat = "Pet Supplies";
			break;
		case 18:
			$cat = "Services";
			break;
		case 19:
			$cat = "Sports & Outdoors";
			break;
		case 20:
			$cat = "Sports Memorabilia & Cards";
			break;
		case 21:
			$cat = "Tools & Home Improvement";
			break;
		case 22:
			$cat = "Toys & Hobbies";
			break;
		case 23:
			$cat = "Video Games";
			break;
		case 24:
			$cat = "Other";
			break;
		default:
			$cat = "Category Does Not Exist";
	}
	return $cat;
}
?>