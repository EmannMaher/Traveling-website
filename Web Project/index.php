<!DOCTYPE html>
<html>

<head>
<title>Sign up Page </title>
<script src="https://kit.fontawesome.com/ce4e3beb40.js" crossorigin="anonymous"></script>

<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://www.youregypttours.com/images/homepage/1632749876.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
.box{
    position: relative;
    width: 550px;
    height: 750px;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://www.youregypttours.com/images/homepage/1632749876.jpg);
    border-radius: 8px;
    overflow: hidden;
}
.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 550px;
    height: 750px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 700px;
    height: 600px;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
@keyframes animate{
    0%{transform: rotate(0deg);}
    100%{transform: rotate(360deg);}
    
}
.form_box{
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://www.youregypttours.com/images/homepage/1632749876.jpg);
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}
.form_box h1{
    font-size: 30px;
    margin-bottom: 40px;
    color: #45f3ff;
    position: relative;
    text-align: center;
}
.form_box h1::after{
    content: '';
    width: 30px;
    height: 4px;
    border-radius: 3px;
    background: #45f3ff;
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
}


.form-control {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
    width: 440px;
}

.form-control input {
    position: relative;
    width: 100%;
    padding: 10px;
    background: transparent;
    border:1px solid #f0f0f0a4;
    outline: none;
    color: #fff;
    font-size: 1em;
    letter-spacing: 0.05em;
}

 .form-control span{
    position: absolute;
    left: 0;
    padding: 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
    font-size:large;
}  
.form-control input:valid ~ span,
.form-control input:focus ~ span{
    color: #45f3ff;
    transform: translateX(-10px) translateY(-34px);
    font-size: 0.9em;
}  
.form-control.error input {
	border-color: #e74c3c;
}

.form-control small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.form-control.error small {
	visibility: visible;
}

.form-check{
    color:#8f8f8f ;
}

.form button {
      border: none;
      outline: none;
      background: #45f3ff;
      padding: 11px 25px;
      width: 100px;
      margin-top: 20px;
      border-radius: 4px;
      font-weight: 600;
      cursor: pointer;
}
.success {
    color: #45f3ff;
    padding: 10px;
 }

</style>

</head>

<body>
	

   <div class="box">

    <div class="form_box">
		<h1>Sign Up</h1>

     	<form id="form" class="form" method="get" action="AddUser.php">

        <div class="form-control">
          <input type="text" required="required" id="fname" name="fname" />
		  <span>First Name</span>
		  <i></i>
          <small>Error message</small>
        </div>

		
		<div class="form-control">
			<input type="text" required="required" id="lname" name="lname" />
			<span>Last Name</span>
			<i></i>
			<small>Error message</small>
		  </div>

        <div class="form-control">
          <input type="email" required="required" id="email"  name="email"/>
		  <span>Email</span>
		  <i></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <input type="password" required="required" id="password" name="password"/>
		  <span>Password</span>
		  <i></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <input type="password" required="required" id="password2" />
		  <span>Re-Password</span>
		  <i></i>
          <small>Error message</small>
        </div>

		
  
		  <div class="form-control">
			<input type="text" required="required" id="dob" name="dob" />
			<span>Date Of Birth</span>
			<i></i>
			<small>Error message</small>
		  </div>
         
		  <div class="form-control">
			<input type="text" required="required" id="phone" name="phone"/>
			<span>Phone Number</span>
			<i></i>
			<small>Error message</small>
		  </div>
  


		<div class="form-check">
			<input type="checkbox" required="required" id="check"/>
			<label  for="form">I do accept the <a href="#!" >Terms and Conditions</a> of your site.</label>
		  </div>
        <!-- <button type="submit">Submit</button> -->
		<center>
		<button type="submit">Submit</button></a>
		</form>
		<?php if (isset($_GET['success'])) { ?>
			<button style="margin-left:100px" onclick="window.location.href='FirstPage.html'">Home</button>
			<p class="success"><?php echo $_GET['success']; ?></p>
         <?php } ?>
		</center>
      
	</div>

   </div>



   <script type="text/javascript">
	
	const form = document.getElementById('form');
	const lname = document.getElementById('lname');
	const fname = document.getElementById('fname');
	const dob = document.getElementById('dob');
	const phone = document.getElementById('phone');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const password2 = document.getElementById('password2');
	
	form.addEventListener('submit', e => {		
		checkInputs();
	});
	
	function checkInputs() {
		// trim to remove the whitespaces
		const fnameValue = fname.value.trim();
		const lnameValue = lname.value.trim();
		const dobValue = dob.value.trim();
		const phoneValue = phone.value.trim();
		const emailValue = email.value.trim();
		const passwordValue = password.value.trim();
		const password2Value = password2.value.trim();
		
		if(fnameValue === '') {
			setErrorFor(fname, 'First name cannot be blank');
		} else {
			setSuccessFor(fname);
		}

		if(lnameValue === '') {
			setErrorFor(lname, 'Last name cannot be blank');
		} else {
			setSuccessFor(lname);
		}

		if(dobValue === '') {
			setErrorFor(dob, 'Date of birth cannot be blank');
		} else {
			setSuccessFor(dob);
		}
		if(phoneValue === '') {
			setErrorFor(phone, 'Username cannot be blank');
		} else {
			setSuccessFor(phone);
		}

		
		if(emailValue === '') {
			setErrorFor(email, 'Email cannot be blank');
		} else if (!isEmail(emailValue)) {
			setErrorFor(email, 'Not a valid email');
		} else {
			setSuccessFor(email);
		}
		
		if(passwordValue === '') {
			setErrorFor(password, 'Password cannot be blank');
		}else if (!isPassword(passwordValue)){
			setErrorFor(password, 'Not a valid password');
		}
		 else {
			setSuccessFor(password);
		}
		
		if(password2Value === '') {
			setErrorFor(password2, 'Password2 cannot be blank');
		} else if(passwordValue !== password2Value) {
			setErrorFor(password2, 'Passwords does not match');
		} else if (!isPassword2(password2Value)){
			setErrorFor(password2, 'Not a valid password');
		}
		else{
			setSuccessFor(password2);
		}
	}
	
	function setErrorFor(input, message) {
		const formControl = input.parentElement;
		const small = formControl.querySelector('small');
		formControl.className = 'form-control error';
		small.innerText = message;
	}
	
	function setSuccessFor(input) {
		const formControl = input.parentElement;
		formControl.className = 'form-control success';
	}
		
	function isEmail(email) {
		return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
	}
	
	function isPassword(password){  //Minimum 8 characters,At least one uppercase character,At least one lowercase character ,At least one special character 
		return /^(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/.test(password);
	}
	function isPassword2(password2){  
		return /^(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/.test(password2);
	}


	  </script>

</body>
</html> 

