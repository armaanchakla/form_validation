<?php

// Do rest of the validation in the form in this php tag along with the rest of the script inside it.

$f_name = $l_name = $email = $pass = $c_pass = "";
$f_name_err = $l_name_err = $email_err = $pass_err = $c_pass_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['f_name'])){
		$f_name_err = "First Name is required!";
	}
	else{
		$f_name = $_POST['f_name'];
	}
	
	if(empty($_POST['l_name'])){
		$l_name_err = "Last Name is required!";
	}
	else{
		$l_name = $_POST['l_name'];
	}
	
	if(empty($_POST['email'])){
		$email_err = "E-mail is required!";
	}
	else{
		$email = $_POST['email'];
	}
	
	if(empty($_POST['pass'])){
		$pass_err = "Password is required!";
	}
	else{
		$pass = $_POST['pass'];
	}
	
	if(empty($_POST['c_pass'])){
		$c_pass_err = "Confirmation Password is required!";
	}
	else{
		$c_pass = $_POST['c_pass'];
	}
	
	if(!(empty($_POST['pass'])) && !(empty($_POST['c_pass']))){
		if($pass != $c_pass){
			$c_pass_err="Passwords doesn't match!";
		}
	}
}

?>


<html>

	<head>
		<title>Registration</title>
	</head>
	
	<body>
		<h1>User Registration</h1>
		<label style="color:red">* Required field</label>
		<br><br>
		<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="POST">
			<label>First Name: </label><label style="color:red">*</label>
			<input type="text" name="f_name" value="<?php echo $f_name; ?>">
			<label style="color:red"><?php echo $f_name_err; ?></label>
			<br>
			<label>Last Name: </label><label style="color:red">*</label>
			<input type="text" name="l_name" value="<?php echo $l_name; ?>">
			<label style="color:red"><?php echo $l_name_err; ?></label>
			<br>
			<label>E-mail: </label><label style="color:red">*</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			<label style="color:red"><?php echo $email_err; ?></label>
			<br>
			<label>Password: </label><label style="color:red">*</label>
			<input type="password" name="pass" value="<?php echo $pass; ?>">
			<label style="color:red"><?php echo $pass_err; ?></label>
			<br>
			<label>Confirm Password: </label><label style="color:red">*</label>
			<input type="password" name="c_pass" value="<?php echo $c_pass; ?>">
			<label style="color:red"><?php echo $c_pass_err; ?></label>
			<br><br>
			<label>Bangladeshi Passport: </label><br>
			<input type="radio" name="passport" value="passport_yes" checked> Yes<br>
			<input type="radio" name="passport" value="passport_no" <?php if((isset($_POST['passport'])) && ($_POST['passport']=="passport_no")) echo "checked" ?>> No<br>
			<input type="radio" name="passport" value="passport_processing" <?php if((isset($_POST['passport'])) && ($_POST['passport']=="passport_processing")) echo "checked" ?>> Processing
			<br><br>
			<!-- I have done the retaining of selection part for the drop-down list for you -->
			<label>Gender: </label><br>
			<select name="gender">
				<option value="male" <?php if(isset($_POST['gender']) && ($_POST['gender']=="male")) echo "selected"; ?>> Male</option><br>
				<option value="female" <?php if(isset($_POST['gender']) && ($_POST['gender']=="female")) echo "selected"; ?>> Female</option><br>
				<option value="others"<?php if(isset($_POST['gender']) && ($_POST['gender']=="others")) echo "selected"; ?>> Others</option>
			</select>
			<br><br>
			<!-- Do the retaining of selection for the checkbox -->
			<label>Education: </label><br>
			<input type="checkbox" name="ssc" value="ssc"> SSC<br>
			<input type="checkbox" name="hsc" value="hsc"> HSC<br>
			<input type="checkbox" name="bsc" value="bsc"> BSC
			<br><br>
			<input type="submit" value="Submit">
			<input type="reset">
		</form>
		
		<br><br>
		
		<h2><u>Your Information: </u></h2><br>
		
		<label>First Name: <?php echo $f_name; ?></label><br>
		<label>Last Name: <?php echo $l_name; ?></label><br>
		<label>Email: <?php echo $email; ?></label><br>
		<label>Password: <?php echo $pass; ?></label><br>
		<label>Confirmation Password: <?php echo $c_pass; ?></label><br>
		<!-- Show rest of the information here -->
		
	</body>	
	
</html>













