<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	body{
		background-color: #f9f9f9;
	}
	.button{
	 	   	 
	 	  border-radius: 4px;
		  padding: 8px 12px;
		  font-size: 20px;
		  cursor: pointer;
		  text-align: center;	
		  text-decoration: none;
		  outline: none;
		  color: #fff;
		  background-color:#5bbc2e;
		  opacity: 1.09;
		  border: none;
 	}
 	.button:hover{
 		background-color: #276705;
 		-webkit-transition: .3s ease-in-out;
 		transition: .3s ease-in-out;
 	}
</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
	<form action="signup.php" method="post">
	<div class="main">
			<p id="moredone">Get more done with <br><span style="color:#494949; font-size:65px; line-height: 80px; ">Freelancers</span>
			<hr class="horizontal"/>
			<span id="use9ja" ><br>Find freelancers to tackle any job, any size, any time
			</span></p>
			<br><br>
	<div class="button">
			<button type="submit" class="button">Post Your Job</button>
		</div>
		<br><br><br><br>
			<p class="workwith">Work with someone perfect for your team</p>
	</div>
	</form>
	<?php include 'footer/footer.php'; ?>
	</body>
</html>