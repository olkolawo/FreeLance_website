<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Create Profile - 9jaWork</title>
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="hel.js" ></script>
<link rel="stylesheet" type="text/css" href="./freelancer-profile.css">
<link rel="stylesheet" type="text/css" href="skills.css">
<style type="text/css">

	.main{
		text-align: center;
		margin-top: 4cm;
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

</style>
</head>
<body>
	<?php include './header/header.php'; ?>
	
		<form action="introduce.php" method="post">
		<div class="main" align="center">
			<div align="left" id="head"> Accounting & Consulting</div><br>
					
					<section id="mommy">
						<div style="font-size: 18px; color:grey;" align="center" >
							<br><br><br>
							
								<p id="first" >
									<input type="checkbox" id="termsChkbx" onclick="hasTickedBox();" />
									<span id="termsP">Desktop Software Development </span> 
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx1" onclick="hasTickedBox1();"/>
									<span id="termsP1"> Ecommerce Development</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx2" onclick="hasTickedBox2();"/> 
									<span id="termsP2">Game Development</span> 
									<br><br><br><br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

									<input type="checkbox" id="termsChkbx3" onclick="hasTickedBox3();"/>
									<span id="termsP3"> Mobile Development</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx4" onclick="hasTickedBox4();"/>
									<span id="termsP4"> Production Management</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx5" onclick="hasTickedBox5();"/> 
									<span id="termsP5">QA & Testing</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx6" onclick="hasTickedBox6();"/> 
									<span id="termsP6">Script & Utilities </span>
									<br><br><br><br>

									<input type="checkbox" id="termsChkbx7" onclick="hasTickedBox7();"/>
									<span id="termsP7"> Web Development</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx8" onclick="hasTickedBox8();"/> 
									<span id="termsP8">Web & Mobile Design</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

									<input type="checkbox" id="termsChkbx9" onclick="hasTickedBox9();"/> 
									<span id="termsP9">Other - Software Development</span>
								</p>
								<br><br>
								<p class="link">
								<button class="submit" >Save & Continue</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Doesn't look like you? 
								<a href="freelancer-profile.php" class="start">Start over</a>
							</p>
						</div>
					</section>
			</div>		
		</div>
		</form>
		<?php include './footer/footer.php'; ?>
</body>
</html>