<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Create Profile - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="introduce.css">
</head>
<body>
	<?php include 'header/header.php'; ?>

		<form action="http://localhost/9jawork/experience.php" method="post">
			<div class="main" align="center">
				<div align="left" id="head">Create your Profile <br><br>

					<p style="font-size: 18px; color: black; opacity: 0.80; ">
					Impress prospective clients and land your first job with a well-done freelancer profile. It's like a personal resume, business card, <br> and marketing brochure all rolled up in one.
					</p>
					<br>
				</div>
				
				<div id="mommy" align="center">
				<div align="left" id="text"; style="font-size: 20px;">
						Introduce  yourself
						<br>
						<br>
						<br>
						<p>Portrait</p> <br>
						<p style="font-size:15px; margin-left:3cm;">
							<b>You need a photo!</b> <br>
								Freelancers with a friendly, professional-looking portrait are,<br>
								hired 5 times more often than those without a photo.<br>
								<span id="photo">Add a Photo now</span>
						</p>

				</div>
				<div align="left" >
							<br><br>
							<br><br>

							<hr class="horizontal"/>
							<br>
							
							<p id="text">Job Title</p> 
				</div>
				<div align="left">

					<input type="text" placeholder="EXAMPLE: Web Content Specialist" id="need">
						<br>
						<br>
						<br>

						<p id="text">Overview</p>
						<textarea placeholder="EXAMPLE: I am a professional web content writer with more than six years of experience in web content, blog writing, SEO and artilce writing I am passionate about writng with a unique flare for writng in different styles, tones and voices. All my writings are 100% original and unique, and I check all my work Copyspace before delivering it to the client. Please have a look at my portfolio and feel free to contact me."></textarea>

						<br><br>
						<br><br>
						<br><br>
						<br><br><br>			
						<p id="text">Skills (optional)</p>
				<div align="left">
						 <input type="text" placeholder="Type Here" id="skills">
				</div>
						<br>
						<br>
				<div align="left">
					<br>
					<br>
					<br>
					<br>
					<p id="text">Availability to work on 9jaWork</p>

					<select>

						 <option>Please Select...</option>	
						 <option value="SS3">More than 30 hrs/week </option>
						 <option value="SS2">Less than 30 hrs/week</option>
						 <option value="SS1">As Needed - Open to offers</option>
					</select>
					</div>
									
					<br>
					<br>
					<br>
					<br>
					<br>
					<hr class="horizontal"/>
					<br><br>	
					<a href="http://localhost/9jawork/freelancer-profile.php" class="back">Back</a>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Save & Continue" class="submit"><br><br>
						
				</div>		
			</div>
		</form>
		<?php include 'footer/footer.php'; ?>
</body>
</html>