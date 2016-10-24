<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>Sign Up - 9jaWork</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	
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
	#mommy{
		border: 2px solid #e0e0e0;
		float: right;
		margin-right:3cm; 
		background: white;
		padding: 20px;
		-webkit-box-flex: 1;
		width: 80%;
		margin-bottom: 2cm;

}
		
	body{
		background-color: #f9f9f9;
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
 	
 	select{
 		width: 50%;
		border: 2px solid #e0e0e0; 
		height: 40px;
		color: green;
		display: inline-block;
		padding: 3px 6px;
		font-family: Gotham;
   	   font-size: 18px;
        -moz-appearance:none; 

 	}	
 	select:hover{
		border: 2px solid #a6d761; 
	    -webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	   
}

	select:focus{
		    border-color: green;
    		outline: none;
	}

	option{
		border: 1px solid #e0e0e0; 
		height: 40px;
		color: grey;
		font-family: Gotham;
   	    font-size: 18px;

   	    background-color: white;
		text-decoration-color: none;
   	   
	}

	option:hover{
		border: 1px solid green; 
		background-color: white;
		text-decoration-color: none;
	}
	#need { 

	    border: 2px solid #e0e0e0; 
	    outline:0; 
	    float: left;
	    padding-left: 25px;
	    height:35px; 
	    width: 600px; 
	    font-family: Gotham;
	    font-size: 14px;
	    font-style: #494949;
	    line-height: 34px;
  } 
	#need:hover{
		border: 2px solid #a6d761; 
	    -webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;	   
}

	#need:focus {
    border-color: green;
    outline: none;
}

textarea{
	    border: 2px solid #e0e0e0; 
	    outline:0; 
	    float: left;
	    padding-left: 25px;
	    height: 150px; 
	    width: 600px; 
	    font-family: Gotham;
	    font-size: 14px;
	    font-style: #494949;
	    line-height: 34px;
}

	textarea:hover{
		border: 2px solid #a6d761; 
	    -webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;	   
}

	textarea:focus {
    border-color: green;
    outline: none;
}

hr.horizontal{
	width:100%;
	height:0; 
	border: 1px solid #e0e0e0; 
	opacity: 0.90;
}


</style>
</head>
<body>
	<?php include 'header/header.php'; ?>
	
		<div class="main" align="center">
			<div align="left" id="head">Post a Job</div><br><br><br>
				<div id="mommy" align="center">
					<div align="left">
					Choose a category and subcategory<br><br>

					<select>

						 <option>Please Select...</option>	
						 <option value="SS3">Web, Mobile & Software Dev</option>
						 <option value="SS2">IT & Networking</option>
						 <option value="SS1">Data Science & Analytics</option>
						 <option value="JSS3">Engineering and Architecture</option>
						 <option value="JSS2">Design & Creative</option>
						 <option value="JSS1">Writing</option>
						 
					</select>
					</div>

					<div align="left" >
						<br><br>
						<br><br>
						<br><br>
						<hr class="horizontal"/>
						<br>
						<br>
						Name your job posting 
					</div>
					<div align="left">
							<br> <input type="text" placeholder="EXAMPLE: Need Help Devloping a Powerpoint Presentation for a Family Reunion" id="need">

							<br><br>
							<br><br>
							<br>
							Describe the work to be done<br><br>
							<textarea>

							</textarea>

								<br><br>
								<br><br>
								<br><br>
								<br><br><br>
							<p>	
								<span style="color:green; text-decoration: underline; " >Attach File</span>
								<br> <br><br> The file can be up to 5 Mb in size. 
							</p>
							<br>
						<div>
								<p><b>What type of project do you have?</b> <br><br>
								<label>
									One-time project<br><br>
									Ongoing project<br><br>
									I am not sure

								</label>
								<br><br>
								<p><b>How many freelancers do you need to hire for this job?</b> <br><br>
								<label>
									I want to hire one freelancer<br><br>
									I need to hire more than one freelancer<br><br>
								</label>
								<p>
							</div>
							<div>
							<br><br>
								<b>Select up to 3 skills your freelancer should know</b><br>
								<input type="text" placeholder="Type Here" id="need">
								
							</div>
							<br><br>
							<br><br>
							<br><br>
							<br><br>

							<hr class="horizontal"/>
							<br>
							<p><b>Desired Experience Level</b> <br><br>
							<label>
								Entry<br><br>
								Intermediate<br><br>
								Expert

							</label>
							<br><br>
							<p><b>How long do you expect this job to last?</b> <br><br>
							<label>
								More than 6 months<br><br>
								3 to 6 months<br><br>
								1 to 3 months<br><br>
								Less than 1 months<br><br>
								Less than 1 week<br><br>
							</label>
							<p>
							<br><br>
							<p><b>What time commitment is required for this job?</b> <br><br>
							<label>
								More than 30 hrs/week<br><br>
								Less than 30 hrs/week<br><br>
								I don't know yet<br><br>
								<br><br>
								<br><br>
							</label>
							<p>
							<hr class="horizontal"/>
							<br>
							<p><b>Screening Questions</b>
							<p>Add a few questions you'd like your candidates to answer when applying to your job.</p>
							
							<textarea>

							</textarea>
							<br><br>
							<br><br>
							<br><br>
							<br><br>
							<br><br>
							<br><br>
							<br><br>

							<hr class="horizontal"/>
							<br><br>	
							<input type="submit" value="Post Your Job" class="submit"><br><br>
					

			</div>		
		</div>

		<?php include 'footer/footer.php'; ?>
</body>
</html>