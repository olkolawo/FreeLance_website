<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Create an Account - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
	p{
	font-size: 29px;
	line-height: 25px;
	position: relative;
	margin-top: -65px;
	color: #494949;
	font-weight:initial;	
    font-family: Gotham;
	font-style: normal;	
	
	}
	.contents{
		font-size: 24px;
		line-height: 34px;
		color: #7d7d7d;
		font-weight:initial;	
	    font-family: Gotham;
		font-style: normal;	
	}
	
	
	body{
		background-color: #f9f9f9;
	}

	#textbox{

	    border: 1px solid #e0e0e0; 
	    outline:0; 
	    padding-left: 25px;
	    height:35px; 
	    width: 450px; 
	    font-family: Gotham;
	    font-size: 14px;
	    font-style: #494949;
	    line-height: 34px;
	}

	#textbox:hover{
		border: 2px solid green;
	    outline:0; 
	    padding-left: 25px; 	  
}

	#textbox:focus {
    border-color: green;
    outline: none;
     background-color:#faffbd;
}
 		.submit{
 	  display: inline-block;
 	  border-radius: 4px;
	 padding: 15px 30px;
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
 	.submit:hover{
 		background-color: #276705;
 		-webkit-transition: .3s ease-in-out;
 		transition: .3s ease-in-out;
 	}

 	.check{
 		width: 20px;
		height: 20px;
	
 	}

</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
		<div class="main">
				
			<form action="client-direct.php" method="post">
					<p>Create a Free Client Account</p><br>
						
						<input type="text" name="username" id="textbox" placeholder="First Name"><br>
						<input type="text" name="username" id="textbox" placeholder="Last Name"><br>
						<input type="text" name="username" id="textbox" placeholder="Company Name  / Person's Name"><br>
						<input type="text" name="username" id="textbox" placeholder="Email"><br>
						<input type="password" name="password"  id="textbox" placeholder="Password">
						<br><br><br><br><br><br>
						 <p style="font-size:15px"><input type="checkbox" name="checkbox" class="check"> Yes, I understand and agree to the 9jawork Terms of Service,<br> including the User Agreement and Privacy Policy.
						</p><br><br>
							<input type="submit" class="submit" value="Get Started"> <br><br>
			</form>
		</div>
		<br><br><br>
	<?php include 'footer/footer.php'; ?>
</body>
</html>