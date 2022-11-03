<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body background="./Photos/Bg2.png">
    

    <nav style="background-color: rgba(0, 0, 0, 0.731);">
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

    <div class="text">
        <h1>COMING SOON</h1>
    </div>

    <script>
        $('.handle').on('click', function(){
            $('nav ul').toggleClass('showing');
        });
    </script>
    

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>
</html>