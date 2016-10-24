<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Sign Up - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
	p{
	font-size: 32px;
	line-height: 25px;
	position: relative;
	margin-top: -65px;
	color: #494949;
	font-weight:initial;	
    font-family: Gotham;
	font-style: normal;	
	
	}
	#contents{
		font-size: 29px;
		float: left;
		margin-left: 5cm;
		color: #7d7d7d;
	    font-family: Gotham;
	}
	#contents1{
		font-size: 29px;
		float: right;
		margin-right: 5cm;
		color: #7d7d7d;
	    font-family: Gotham;
	}
	hr.horizontal{
		width:9%;
		margin-top: 2.5cm;
		border: -1px solid  #494949;
		opacity: 1.00;
		transition: rotate(90deg);
		-o-transform:rotate(90deg);
	    -moz-transform:rotate(90deg);
	    -webkit-transform:rotate(90deg);
}

	body{
		background-color: #f9f9f9;
	}

	#textbox{

	    border: 2px solid #e0e0e0; 
	    border-radius: 5px;
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
		border-radius: 5px;
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
 	.submit{
 	  display: inline-block;
 	  border-radius: 4px;
	  padding: 5px 30px;
	  font-size: 20px;
	  text-align: center;	
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color:#5bbc2e;
	  opacity: 1.09;
	  border: none;
	  float: left;
	  margin-left: 2.5cm;
 	}
 	.submit:hover{
 		background-color: #276705;
 		-webkit-transition: .3s ease-in-out;
 		transition: .3s ease-in-out;
 	} 
 		.submit1{
	 	  display: inline-block;
	 	  border-radius: 4px;
		  padding: 5px 30px;
		  font-size: 20px;
		  text-align: center;	
		  text-decoration: none;
		  outline: none;
		  color: #fff;
		  background-color:#5bbc2e;
		  opacity: 1.09;
		  border: none;
		  float: right;
		   margin-right: 2.5cm;
 	}
 	.submit1:hover{
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
	span{
		line-height: 15px;
	}

</style>
</head>
<body>
	<?php include './header/header.php'; ?>
	<div class="main">
			
			<form >
			<p>Let's get started! <br> <br> First, tell us what you're looking for.</p>
			<br>
			
			<hr class="horizontal"/>
			<p id="contents">I want to hire a freelancer <br><br>
				<span style="font-size:17px; color: #494949;">Find, collaborate with,<br> and pay an expert</span>
				 <br><br>
				<a href="client-account.php" class="submit">Hire</a>
			</p>
			<p id="contents1">I'm looking for online work <br><br> 
				<span style="font-size:17px; color: #494949;">Find freelance projects and<br>grow your business.</span>
				 <br><br>
				<a href="freelancer-account.php" class="submit1">Work</a>
			</p>

			
			

	</form>
	<br><br><br><br>
	</div>
	<?php include './footer/footer.php'; ?>
</body>
</html>