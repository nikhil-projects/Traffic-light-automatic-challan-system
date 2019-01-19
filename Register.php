<?php include("registeration.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styleiot.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.active2
{
	color: #1b497a;
	text-shadow: -10px 4px 5px rgba(0,0,0,0.3);
	font-weight:bold;
}

</style>
</head>
<body>
	<?php include("header.php");?>
<div class="template1">
	
</div>
<?php include('error.php'); 
?>
<div id="parent">
<div class="form">
<form action="Register.php" method="post">
	<fieldset>
	<legend>Vehicle Details</legend>
	<label>Vehicle Plate Number</label><input type="text" name="pnumber" placeholder="Vehicle Number " title="Example HR-5963"  required/><br>
	<label>Brand Name</label><input type="text" name="brand" placeholder="Vehicle Brand" title="Example Honda"  required/><br>
	<label>Vehicle Type</label><input type="text" name="vtype" placeholder="Vehicle Type " title="Example car|Bike"  pattern="[a-zA-Z]+" required/><br>
</fieldset>
	<fieldset><legend>Personal Information</legend>
	<div class="name"><label>Applicant Name</label><br><input type="text" name="fname" title="First Name Example Rohit"  placeholder="First Name" pattern="[a-z|A-Z]+"  required/>
	<label></label><input type="text" name="lname"  title="Last Name Example Kansay" placeholder="Last Name"  pattern="[a-z|A-Z]*"  required/></div>
		
      <div class="father"><label>Parent Name</label><br>
		     <select>
			             
			                <option>Mr.</option> 
			                <option>Mrs.</option>                        
		     </select>
		                     <input type="text" name="father-name" title=""  placeholder="Father/Mother Name"  required/><br>
        </div>
<label>Gender</label><br>

<div class="radio">

	<span>Male:</span><input type="radio" name="nn" value="Male" required/><span>FeMale:</span><input type="radio" value="Female" name="nn" required/></div><br>
		

		<label>Date of Birth</label><input type="Date" name="dob" placeholder="Date Of Birth" title="28/04/1997"  pattern=""  required/><br>
		<label>Mobile No.</label><input type="text" name="phone" placeholder="Mobile Number " title="Enter 1o Digit Example  7890000000"  pattern="[7896]{1}[0-9]{9}"  required/><br>
		<label>Aadhar No.</label><input type="text" name="aadhar"  placeholder="Aadhar Number" title=" Enter 12 Digit Number Example 789456823652"  pattern="[0-9]{12}"  required/><br>
		<label>PAN card No.</label><input type="text" name="pan" placeholder=" Pan Card Number" title="Example AA458SS8SA"  required/><br>
		<label>Address</label><input type="text"  name="address" placeholder="Address" title="Full Address + State +City/Town  + Pincode "   required/><br>
		<label>Email</label><input type="text" name="email"  placeholder="Example@xyz.com" title="" required/><br>
</fieldset>


	<button type="submit" class="btn" name="reg_user">Register</button>
</form>

</div>
<div class="details">
	<div class="output">
	<h3>Read Rules before Registeration.</h3>
</div>
	
	<ul>
		<li> Enter Valid Plate Number</li><br>
		<li> Enter linked phone number which is regitser with Aadar number.</li><br>
		<li> Enter Pan Card Number </li><br>
		<li> Enter Full Address In One line with CITY Code </li><br>
		<li> Enter 6 digit OTP after Next window Redirect</li>
	</ul>
</div>




</body>
</html>