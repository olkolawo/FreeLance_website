<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>9jaWork- Log In</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
	p{
	font-size: 35px;
	line-height: 29px;
	position: relative;
	margin-top: -60px;
	color: #494949;
	font-weight:initial;	
    font-family: Gotham;
	font-style: normal;	
	
	}

	body{
		background-color: #f9f9f9;
	}

	#textbox{

	    border: 2px solid #e0e0e0; 
	    outline:0; 
	    padding-left: 25px;
	    height:35px; 
	    width: 350px; 
	    font-family: Gotham;
	    font-size: 14px;
	    font-style: #494949;
	    line-height: 34px;
	}

	#textbox:hover{
		border: 2px solid green;
	    outline:0; 
	    padding-left: 25px;
	    height:35px; 
	    width: 350px; 	
	    -webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;   
}

	#textbox:focus {
    border-color: green;
    outline: none;
     background-color:#faffbd;
 }
 	#submit{
 	  display: inline-block;
 	  border-radius: 4px;
	  padding: 7px 18px;
	  font-size: 20px;
	  cursor: pointer;
	  text-align: center;	
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color:#5bbc2e;
	  border: none;
	  margin-left: -7.5cm;
 	}
 	#submit:hover{
 		background-color: #276705;
 		-webkit-transition: .3s ease-in-out;
 		transition: .3s ease-in-out;
 	}

 	#forgot {
    
    color: green;    
    float: left;
    margin-left: 12.5cm;
    padding: 15px;
   	font-size:19px;	
    font-style: bold;
	font-family: Gotham;
   
}

	#forgot:hover{
		text-decoration: underline;
		text-decoration-color: green;
	}

</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
	<div class="main">
			
			<form >
			<p>Log in and get to work</p>
			<br>
			<input type="text" name="username" id="textbox" placeholder="Username or Email"><br><br>
			<input type="password" name="password"  id="textbox" placeholder="Password"><br><br><br><br>
			<input type="submit" id="submit" value="Log In"> <br><br>
			<a href="#" id="forgot">Forgot Password?</a>	

	</form>
	<br><br><br><br>
	</div>
	<?php include 'footer/footer.php'; ?>
</body>
</html>