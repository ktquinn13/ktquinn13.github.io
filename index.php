<?php

function isSelected($pn, $link) {
	if($pn == $link) {
		return ' id="selected-nav" ';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
   <meta name="description" content="Splattered is a site manifesting creativity and aesthetics into a visual commercial interaction between seller and buyer.">
	<title>Splattered</title>


	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
  <link rel="stylesheet" type="text/css" href="/public/css/bubble.css">
  <script type="text/javascript">
		var baseURL = '<?= BASE_URL ?>';
	</script>
  <script type="text/javascript" src="/public/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/public/js/d3.v4.min.js"></script>
  <script type="text/javascript" src="/public/js/bubble.js"></script>
  <script type="text/javascript" src="/public/js/scripts.js"></script>
	<link rel="icon" type="image/vnd.microsoft.icon" href="/public/img/favicon.ico" />
</head>
<body>
<div id="wrapper">

		<div id="header" style="margin-top:-15px">
			<div id = "menubar">

			<h1><a href="http://ktaylorquinn.co/"> <img src = "/public/img/logov2.png" alt="SPLATTERED"> </a></img></h1>

				<div id="search">
				<ul id="primary-nav" style= "font-size: 15px;">

					<li><a href="/paintings">Paintings</a></li>
					<li><a href="/photographs">Photographs</a></li>
					<!--<li><a href="<?= BASE_URL ?>/working">Clothing & Accessories</a></li>-->
					<!--<li><a href="<?= BASE_URL ?>/working">Home & Decor</a></li>-->
					<li><a href="/blogs">Blog</a></li>

					<!--<?php if(isset($_SESSION['user']) && $_SESSION['user'] != '') { ?>
					<li><a href="profile/<?= $_SESSION['user'] ?>">Profile</a></li>
					<?php } ?>-->


					<li>	<!--  Start of View Cart Button Code  -->
						<form target="_self" action="https://www.paypal.com/cgi-bin/webscr" style="width: 20px; display: inline; padding-top: 20px;" method="post">
						<!-- If using a Business or Company Logo Graphic, include the "cpp_header_image" variable in your View Cart code. -->
							<input type="hidden" name="cpp_header_image" value="https://yourwebsite.com/logo.jpg">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<!-- Replace "business" value with your PayPal Email Address or Account ID -->
							<input type="hidden" name="business" value="ktquinn13@gmail.com">
							<!-- Replace value with the web page you want the customer to return to -->
							<input type="hidden" name="shopping_url" value="http://ktaylorquinn.co/">
							<input type="image"  src="public/img/cart.jpg" border="0" style="width: 20px;" name="submit" alt="View Cart">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
						<!--  End of View Cart Button Code  -->
					</li>
					<!--<li><a href="<?= BASE_URL ?>/checkout"> <img class = "cart_icon" src="<?= BASE_URL ?>/public/img/cart.jpg"></a></li>-->
					<li><input type="text" placeholder="Search products" /> <button>Go</button></li>
				</ul>

				</div>
			</div>



		</div>



</div>



<head>
<style>

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-0, .bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.9;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.bgimg-0 {
  background-image: url("public/img/background1.jpeg");
  min-height: 500px;
}
.bgimg-1 {
  background-image: url("public/img/photographer.jpeg");
  min-height: 500px;
}

.bgimg-2 {
  background-image: url("public/img/desk.jpeg");
  min-height: 400px;
}


.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 2px;
  text-transform: uppercase;
  font: 14px "Lato", sans-serif;
  color: #b3b3b3;
  margin-bottom: 0px;
}
h2 {
  letter-spacing: 2px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: white;
}

p {
  letter-spacing: 2px;
  text-transform: uppercase;
  font: 13px "Lato", sans-serif;
  color: #111;
}

a {
  letter-spacing: 2px;
  text-transform: uppercase;
  font: 13px "Lato", sans-serif;
  color: #000;
  text-decoration: none;
}
.hi {
  letter-spacing: 2px;
  text-transform: uppercase;
  font: 13px "Lato", sans-serif;
  color: #111;
  text-decoration: none;
}

a:hover {
  color: white;
}
.hi:hover{
  color: #111;
}


</style>
</head>

<body>

 

<div class="bgimg-1">
  <div class="caption">
  <a href="<?= BASE_URL ?>/paintings" style="text-decoration:none">
    <span class="border">SHOP NEW ARRIVALS</span>
    </a>
  </div>
</div>


   <div id= "tileImages" style="color: #777; background-color:white; text-align:center; text-align: center;">
    <ul id="tiles">

          <li><a href="paintings"> <img class="tile" src="/public/img/paintingtile.jpg" alt="Painting pic"  style = "height:  "/> </a> </li>
            <!--edited from the image found here: https://www.google.com/search?sa=G&hl=en&q=side+braid&tbm=isch&tbs=simg:CAQSlQEJoIMPJccrmF0aiQELEKjU2AQaAggDDAsQsIynCBpiCmAIAxIo6RmGD7cPyhnJELQPoQ_1UEIoP1w_1eMNkw3zDgMOEwyCXiMPM71S7bMBowfjlhgnYthk6MjBxNqmzMtdnOX039F_18vRhoU7RcO-UtPcjMMStEtTzbhNEEa_1j24IAQMCxCOrv4IGgoKCAgBEgQ_1pMqMDA&ved=0ahUKEwjt1MnGia7PAhXEez4KHQD9CHgQwg4IGygA-->
          <li><a href="photography"><img class="tile" src="/public/img/photographertile.jpeg" alt="Photography pic" /></a> </li>
            <!--edited from the image found here: https://lh3.googleusercontent.com/OCWLteVrjHjzDUVIRRIbIrbYZuYXXzTSz0a0akUn0V1u4WPICt3dmR8X28sen953deeSTFQ=s85-->
          <li><a href="blogs"><img class="tile" src="/public/img/blogtile.jpg" alt="Home Decor" /></a> </li>
            <!--edited from the image found here: https://lh3.googleusercontent.com/7S9F_10_tSqAwFJNUV3a0KJ0e8c-XZxTp_hxWP-DBHmocVRL7yXbwzIrLPCJjm-zgLdRmA=s85-->

    </ul>
  </div>

 <a href="/blogs" style="text-decoration:none">
<div class="bgimg-2">
  <div class="caption">
 
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">CHECK OUT NEW POSTS</span>
    
  </div>
</div>
</a>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: center; font-size:25px">
    <h2>FOLLOW OUR ADVENTURES ON INSTAGRAM</h2>
  </div>
   <div id = "Instagram_feed" style="background-color:white;">
        <?php
        // use this instagram access token generator http://instagram.pixelunion.net/
        $access_token="4243791441.1677ed0.7397dce5702e4c1a8403ba9217927a08";
        $photo_count=5;
             
        $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
        $json_link.="access_token={$access_token}&count={$photo_count}";


        $json = file_get_contents($json_link);
        $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

        foreach ($obj['data'] as $post) {
     
          $pic_text=$post['caption']['text'];
          $pic_link=$post['link'];
          $pic_like_count=$post['likes']['count'];
          $pic_comment_count=$post['comments']['count'];
          $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
          $pic_created_time=date("F j, Y", $post['caption']['created_time']);
          $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
           
          echo "<div id='image' class='image' style='display: inline;'>        
                              
               <a href='{$pic_link}'>
                <img class='insta' src='{$pic_src}' alt='{$pic_text}' style='width:19.5%' >
                     
                </a>

                </div>";
       }

        ?>



    </div>
</div>

<div id="footer">


		<ul id="footerelements">
			<li><a href="https://www.instagram.com"><img class="icon" src="/public/img/instagram.png" alt="INSTA" /></a>  <a href="https://www.pinterest.com"><img class="icon" src="/public/img/pinterest.png" alt="PINTEREST" /></a> <a href="https://www.facebook.com"><img class="icon" src="/public/img/facebook.png" alt="FACEBOOK" /></a>  <a href="https://www.twitter.com"><img class="icon" src="/public/img/twitter.png" alt="TWITTER" /></a> </li>

			<!--Facebook logo: https://lh3.googleusercontent.com/jDhF56HdcROR2DOBcxL_yTwWU1SUz-Xlb7BLZ6cjzYftSxN-uzIdHosDdPeVL1grUy9piA=s85-->
			<!--Twitter logo: https://lh3.googleusercontent.com/-EtGHtc8v9V5jC5Gf4N3XPA4PEf6WmjW11XzBaOHNTwRQc9Cbb09oXmfJj-c9_VN02LoCRY=s105-->
			<!--Instagram logo: https://lh3.googleusercontent.com/-q1QAZFDTm6cTLfoI8prYuSryvmZZ-RK32gMFvMu4q3rhaAw-i44yYD2oL8HX0jUslww=s85-->
			<!--Pinterest logo: https://lh3.googleusercontent.com/TtM5NxnMFGPYvJq5z-Zjy4T6bbck9TuPDbGPWbokYR9q7ypADiFk_LufgEtgR8WSMrMa=s85-->
			<!-- <li><input type="text2" placeholder="Enter your email address" /> <button>Sign Up!</button></li> -->


      <!-- If the user is logged in -->
			

      <!-- If the user is an admin -->
			<?php 

			
        $p = User::loadByUsername($_SESSION['user']);

        if($p->get('status') == 2) {


			?>


			<li id="footer_list"><a href='<?= BASE_URL ?>/'>Home</a> | <a href='<?= BASE_URL ?>/working'>About Us</a> | <a href='<?= BASE_URL ?>/working'>Shipping & Returns</a> | <a href='<?= BASE_URL ?>/working'>Terms & Conditions</a> | <a onclick="location.href='<?= BASE_URL ?>/add'"><u name = "add_item">Add Item</u></a> | <a onclick="logoutAppear()"><u name = "log_in">Log out</u></a> </li>

      <!-- Default footer -->
			<?php }

			else {?>


			<li id="footer_list"><a href='<?= BASE_URL ?>/'>Home</a> | <a href='<?= BASE_URL ?>/working'>About Us</a> | <a href='<?= BASE_URL ?>/working'>Shipping & Returns</a> | <a href='<?= BASE_URL ?>/working'>Terms & Conditions</a> | <a onclick="logoutAppear()"><u name = "log_in">Log out</u></a> </li>

			<?php }} ?>

		</ul>
		</div>

    <!-- Popup for user to login -->
		<div id="myLoginPopup" class="popup">

 			<div class="popup-content">
	  		    <span class="close" onclick="loginClose()">×</span>
	  		    <form  action="/footer/login" method="POST">
	  		    <h2>Log in:</h2>
				  Username:<br>
				  <input type="text" name="un" placeholder="username" required>

				  <br>
				  Password:<br>
				  <input type="password" name="pw" placeholder="********" required>
				  <br><br>
				  <input type="submit" value="Submit" >
				</form>


			</div>

		</div>


    <!-- Popup for user to sign up -->
    <div id="mySignupPopup" class="popup">
 			<div class="popup-content">
  		    <span class="close" onclick="signupClose()">×</span>
  		    <form  action="/footer/signup" method="POST">
    		    <h2>Sign up:</h2>
            First Name:<br>
  				      <input type="text" name="fname" placeholder="Bobby" required>
  				  <br>
            Last Name:<br>
  				      <input type="text" name="lname" placeholder="Kins" required>
  				  <br>
            Username:<br>
  				      <input type="text" name="un" placeholder="username" required>
  				  <br>
  				  Password:<br>
  				      <input type="password" name="pw" placeholder="********" required> 
  				  <br>
            Confirm Password:<br>
  				      <input type="password" name="confirmpw" placeholder="********" required>
  				  <br>
            Email Address:<br>
  				      <input type="email" name="email" placeholder="test@gmail.com" required>

						<br>
						Age:<br>
						<select name="age">
							<?php for ($i = 5; $i <= 99; $i++) : ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
					</select>
  				  <br><br>
  				  <input type="submit" value="Submit" >
				</form>


			</div>

		</div>

    <!-- Popup to logout -->
		<div id="myLogoutPopup" class="popup">

 			<div class="popup-content">
	  		    <span  class= "close" onclick="logoutClose()">×</span>

	  		    <form  action="/footer/logout" method="POST">
	  		    <h2>Are you sure you want to log out?</h2>

				  <input class = "close" type="submit" value="Log me out" >

				</form>

 				 <button class="close" onclick="logoutClose()">Cancel</button>


			</div>

		</div>

	</div>

</body>
</html>



<!--
<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">COOL!</span>
  </div>
</div>
-->






<div id="citations">
	<!--IMAGE CITATIONS!!!-->

	<!--ALL IMAGES ARE EITHER MY OWN, OR FREE STOCK IMAGES FOUND ON PEXEL.XCOM-->


	<!--CHECKOUT HEADER: edited from the image found here: http://65.media.tumblr.com/61e836107d470bccfdd94b649af51e1c/tumblr_n2ppvtiBIL1r46cs4o1_1280.jpg-->


	<!--HOME PAGE IMAGES-->
	


	<!--FOOTER IMAGES-->
	<!--Facebook logo: https://lh3.googleusercontent.com/jDhF56HdcROR2DOBcxL_yTwWU1SUz-Xlb7BLZ6cjzYftSxN-uzIdHosDdPeVL1grUy9piA=s85-->
	<!--Twitter logo: https://lh3.googleusercontent.com/-EtGHtc8v9V5jC5Gf4N3XPA4PEf6WmjW11XzBaOHNTwRQc9Cbb09oXmfJj-c9_VN02LoCRY=s105-->
	<!--Instagram logo: https://lh3.googleusercontent.com/-q1QAZFDTm6cTLfoI8prYuSryvmZZ-RK32gMFvMu4q3rhaAw-i44yYD2oL8HX0jUslww=s85-->
	<!--Pinterest logo: https://lh3.googleusercontent.com/TtM5NxnMFGPYvJq5z-Zjy4T6bbck9TuPDbGPWbokYR9q7ypADiFk_LufgEtgR8WSMrMa=s85-->


	<!--PAINTINGS IMAGES-->
	<!--HEADER: edited from the image found here : https://www.google.com/search?sa=G&hl=en&q=artist&tbm=isch&tbs=simg:CAQSlQEJSsxSEGfzGFkaiQELEKjU2AQaAggJDAsQsIynCBpiCmAIAxIo2R7PHqgenRGxHtoemxirGOIX5he6MKg5rTqzOa464i64K8Ustyv2IxowRaiO3cGgZwBmpQTEHTrNUqIFrkX1EZn8o34eFEPhc9X9Kji-uZOU47uqfZdoB_1DDIAQMCxCOrv4IGgoKCAgBEgQToChmDA&ved=0ahUKEwiohYfXia7PAhXDPz4KHUQ0DH8Qwg4IGygA -->
	<!--ALL FOR SALE IMAGES ARE MY OWN PICTURES/ ARTWORK-->

	<!--people profpics-->
	<!--JohnnyDepp- https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjp5LCH_6vQAhXCzFQKHfqnC7wQjRwIBw&url=%2Furl%3Fsa%3Di%26rct%3Dj%26q%3D%26esrc%3Ds%26source%3Dimages%26cd%3D%26cad%3Drja%26uact%3D8%26ved%3D0ahUKEwjp5LCH_6vQAhXCzFQKHfqnC7wQjRwIBw%26url%3Dhttp%253A%252F%252Fwww.mirror.co.uk%252F3am%252Fcelebrity-news%252Fjohnny-depp-rolling-stone-interview-1969098%26bvm%3Dbv.138493631%2Cd.ZGg%26psig%3DAFQjCNGq0Ss7eChjKWGS3ibxCO-mRnR_vw%26ust%3D1479341586024173&bvm=bv.138493631,d.ZGg&psig=AFQjCNGq0Ss7eChjKWGS3ibxCO-mRnR_vw&ust=1479341586024173-->


</div>
