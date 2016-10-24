<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Sign Up - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
	p{
	font-size: 15px;
	line-height: 20px;
	position: relative;
	color: green;
	font-weight:initial;	
    font-family: Gotham;
	font-style: normal;	
	
	}
	

	body{
		background-color: #f9f9f9;
		

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

 	}
 	.submit:hover{
 		background-color: #276705;
 		-webkit-transition: .3s ease-in-out;
 		transition: .3s ease-in-out;
 	} 
 	#mommy{
 		border: 3px solid #e0e0e0;
		background: white;
		padding: 20px;
		-webkit-box-flex: 1;
		width: 40%;
		line-height: 2cm;
		margin-left: 10cm;
		z-index: 0;
		position: relative;
		margin-top: -2cm;


 	}
 		
	


</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
	<div class="main">
				<div id="mommy">
				<p> <b>POST A JOB &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; FREELANCERS APPLY &nbsp;&nbsp;| &nbsp;  YOU INTERVIEW AND HIRE<b></p>
				<br>
				<a href="client-post.php" class="submit">Post Job</a>
				<br>
				</div>
	<br><br>
	</div>
	<?php include 'footer/footer.php'; ?>
</body>
</html>