<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<title>Registration</title>
</head>
<body style="background-image: url('./Photos/giphy\ \(1\).gif');background-position: center;background-size: cover;background-repeat: no-repeat;">

	<nav style="background-color: rgba(0, 0, 0, 0.731);width: 100%;">
		<ul>
			<a href="./soon.php"><li>Home</li></a>
			<a href="./soon.php"><li>Resources</li></a>
			<a href="./soon.php"><li>Info</li></a>
			<a href="./soon.php"><li>Speakers</li></a>
			<a href="./soon.php"><li>Sponsors</li></a>
			<a href="./index.php"><li>Register</li></a>
		</ul>
		<div class="handle">
			<img src="./Photos/startup-conclave.png" width="80px" alt="">
			<div class="menu_icon">
			  <div></div>
			  <div></div>
			  <div></div>
		  </div>
		</div>
	</nav>

<script>
	$('.handle').on('click', function(){
		$('nav ul').toggleClass('showing');
	});
</script>

	<div class="form_wrapper">
		<div class="form_container">
		  <div class="title_container">
			<h2>Startup Conclave Workshops Registration</h2>
		  </div>
		  <div class="row clearfix">
			<div class="">
			  <form>
				<div class="input_field">
				  <input type="text" name="name" placeholder="Name" required />
				</div>
				<div class="input_field"> 
				  <input type="email" name="email" placeholder="Email" required />
				</div>
				<div class="input_field">
				  <input type="text" name="city" placeholder="City" required />
				</div>
				<div class="input_field">
					<input type="text" name="contact" placeholder="Contact Number" required />
				</div>
				<input class="button button-reg" type="submit" name="submit_form" value="Register" />
			  </form>
			</div>
		  </div>
		</div>
	  </div>


	  

	  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>
</html>