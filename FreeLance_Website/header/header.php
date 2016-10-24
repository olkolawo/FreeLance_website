<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1-strict.dtd">
 
 <html lang="en">
 
<head>
<meta charset="utf-8" /> 
<title>9jaWork</title>

<style type="text/css">

 	header{
	 	background: #ffffff;
	 	border-bottom: 1px solid #e0e0e0;
	 	margin-bottom: 2cm;
		height: 90px;
		width: 100%;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 100;
		opacity: 0.90;
		font-size: 12px;
		line-height: 70px;
		opacity: 0.99;
		font-family: Gotham;
 }

	#logo{
	float: left;
	width: 150px;
	height: 70px;
	background: url(kolawole.png) no-repeat center;
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .4s ease-in-out;
	transition: .4s ease-in-out;
 }

#logo:hover{
	-webkit-transform: scale(0.5);
	transform: scale(0.5);
	width: 150px;
	height: 70px;
	border: 2px solid green;
}

 .textbox { 

	    background: url(input-text-9.png) no-repeat 3px 10px; 
	    border: 2px solid #e0e0e0; 
	    margin-top: 0.7cm;
	    float: left;
	    margin-left: 35px;
	    outline:0; 
	    padding-left: 25px;
	    height:35px; 
	    width: 245px; 
	    font-family: Gotham;
	    font-size: 14px;
	    font-style: #494949;
	    line-height: 34px;
  } 
.textbox:hover{
		border: 2px solid #a6d761; 
	    -webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	   
}

.textbox:focus {
    border-color: green;
    outline: none;
     margin-left: 35px;
}
	
	.howitworks{
		color: #000;    
	    padding: 15px;
	   	font-size:14px;	
	   	opacity: 0.70;
	    font-style: bold;
		text-decoration:none;
		font-family: Gotham;
}
	.howitworks:hover{
		color: #5bbc2e;
	   	opacity: 0.70;
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
}
	
	.browse{
		margin-left: 20px;
	    display: inline-flex; 
	    color: #000;    
	    padding: 20px;
	   	font-size:14px;	
	   	opacity: 0.70;
		text-decoration:none;
		font-family: Gotham;
}
	
	.browse:hover{
		color: #5bbc2e;
	   	opacity: 0.70;
	    font-style: bold;
		text-decoration:none;
		font-family: Gotham;
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
}

	
	.becomeafreelancer{

	    padding: 15px;	
		text-decoration:none;
		font-family: Gotham;
		line-height: 6px; 
		float: right;
		margin-right: 1.5cm;
		margin-top: 0.7cm;
	    font-family: Gotham;
		border: 2px solid #e0e0e0;
		background-color: #ffffff;
		color: #008329;
		font-size: 18px;
		opacity: 0.99;

}

	.becomeafreelancer:hover{
		border-color: green;
		color: #008329;
}

	.becomeafreelancer:focus {
		border-color: green;
		color: #008329;
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
	    
}
	
	
	.signup {
		margin-left: 150px;
		display: inline-flex; 
	    color: #000;    
	    padding: 20px;
	   	font-size:14px;	
	   	opacity: 0.70;
		text-decoration:none;
		font-family: Gotham;
   
}
	.signup:hover{
		color: #5bbc2e;
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
}


	.login {
	  	display: inline-flex; 
	    color: #000;    
	    padding: 20px;
	   	font-size:14px;	
	   	opacity: 0.70;
		text-decoration:none;
		font-family: Gotham;
}
	.login:hover{
		color: #5bbc2e;
		-webkit-transition: .3s ease-in-out;
		transition: .3s ease-in-out;
}


</style>
</head>
<body>
	 <header>
   <a href="." id="logo"></a>
   <input type="text" placeholder="Find Freelancers" class="textbox" name="findfreelance">

   
   <a  class="browse" href="./becomeafreelancer.php"><b>BROWSE</b></a>
   <a  class="howitworks" href="./signup.php"><b>HOW IT WORKS</b></a>
   <a  class="signup" href="./signup.php"><b>SIGN UP</b></a> 
   <a  class="login" href="./login.php"><b>LOGIN</b></a>
   
   <a href="./becomeafreelancer.php" class="becomeafreelancer">Become a Freelancer</a>
 </header>
</body>
</html>