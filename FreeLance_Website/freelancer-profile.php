<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Create Profile - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">

	.main{
		text-align: center;
		margin-top: 3.5cm;
}

	
	#head{
		float: left;
		margin-left:3cm;  
		font-size: 30px;
		line-height: 20px;
		color: grey;
		font-weight:initial;	
	    font-family: Gotham;
		font-style: normal;		
	
	}
	
	body{
		background-color: #f9f9f9;
	}

#mommy{
	border: 2px solid #e0e0e0;
	background: white;
	padding: 20px;
	-webkit-box-flex: 1;
	width: 80%;
	margin-bottom: 2cm;
	margin-left: 3cm; 
	display:-webkit-box;
	-webkit-box-orient: horizontal;
	-webkit-box-pack: center;/*start, end, center*/
	height: 400px;
}
#kid1{
	border: 1px solid #e0e0e0;
	border-radius: 5px;
	background: white;
	padding: 20px;
	margin: 20px;
	-webkit-box-flex: 1;/*This function makes the boxes flexible and adjudtible according to the documemnt size*/
	height: 100px;
	width: 4cm;
	text-align: center;
	font-size: 18px;
}

#kid1:hover{
	border-bottom-color: green;
	border-bottom: 3px solid green;
	color: green;
}

#mommy2{
	
	padding: 20px;
	-webkit-box-flex: 1;
	width: 80%;
	margin-top: -8cm;
	margin-left: 3cm; 
	display:-webkit-box;
	-webkit-box-orient: horizontal;
	-webkit-box-pack: center;/*start, end, center*/
}




</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
	
		<div class="main" align="center">
			<div align="left" id="head">What are the main services you offer to clients?</div><br>
					
					<section id="mommy">
						<a href="skills-web.php"><div id="kid1"><br>Web, Mobile & <br>Software Dev</div></a> 
						<a href="skills-networking.php"><div id="kid1"><br>IT & Networking</div></a> 
						<a href="skills-data-science.php"><div id="kid1"><br>Data Science & <br> Analytics</div></a> 
						<a href="skills-engineering.php"><div id="kid1"><br>Engineering & <br> Architecture </div></a> 
					</section>
					<section id="mommy2">
						<a href="skills-design.php"><div id="kid1"><br>Design & Creative</div></a> 
						<a href="skills-accounting.php"><div id="kid1"><br>Accounting & Consulting</div></a> 
						<a href="skills-writing.php"><div id="kid1"><br>Writing</div></a> 
						<a href="skills-sales.php"><div id="kid1"><br>Sales & Marketing</div></a> 
					</section>
			</div>		
		</div>

		<?php include 'footer/footer.php'; ?>
</body>
</html>