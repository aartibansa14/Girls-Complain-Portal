

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="login.css">
	<style>
		.button
		{
			margin-right:193px;
			
		}
		#branch
		{
			margin-left:15px;
		}
		
    </style>
</head>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
		
			<form action="signup.php" method="POST" enctype="multipart/form-data">

				<label for="chk" aria-hidden="true">Register</label>
				<div id="inputbox" class="box">
		

					<input name="username" type="text" class="capitalize-input" pattern="[A-Za-z\s]+" placeholder="Name" required="">
                    <input name="father" type="text" class="capitalize-input" pattern="[A-Za-z\s]+" placeholder="Father's Name" required="">
					<input name="mother" type="text" class="capitalize-input" pattern="[A-Za-z\s]+" placeholder="Mother's Name" required="">
					<input name="email" type="email" placeholder="Email" required="">
					<input name="mobile" type="tel" pattern="[6-9]\d{9}" placeholder="Mobile No." required>
                    <input name="alternative_mobile"  pattern="[6-9]\d{9}" type="tel" placeholder="Alternative Mobile No." required="">
					<input name="enrollment" type="text"  placeholder="Enrollment Number" required>
                 
					<input name="admission_year" type="date" placeholder="Addmission_Year" required>
					<!--<input name="department" type="text" placeholder="Department" required="">-->
					<select onchange="changePlaceholderColor()" name="department" id="branch" class="dep" required>
						<option value="" disabled selected>Select Department</option>
						<option value="MCA">MCA</option>
						<option value="MBA">MBA</option>
						<option value="Electrical">B.tech</option>
						<option value="Mechanical">BE</option>
						
					</select>
					<!-------------------------------------------------->
					<select onchange="changePlaceholderColor()" name="branch" id="branch"  required>
						<option value="" disabled selected>Select Branch</option>
				
						<option value="Electrical">Electrical</option>
						<option value="Mechanical">Mechanical</option>
						<option value="Civil">Civil</option>
						<option value="Computer Science">Computer Science</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Electronics">Electronics</option>
						<option value="Electronics">Other</option>
					</select>
					<input id="password" name="password" type="text" placeholder="Password" required="">
					<input id="cnfrmpswrd" name="confirm_pass" type="text" placeholder=" Confirm Password" required="">
				</div>
				<div id="btndiv">
				<!--<label for="image"></label>-->
				<input type="file"  id="input" name="image">
				<button name="submit" class="button">Submit</button>
			    </div>
			</form>
		</div>

		<div class="login" id="lo">
		
			<form action="login.php" method="POST" >
				<label for="chk" aria-hidden="true">Login</label>
				<div id="logininputbox">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="text"  name="enrollment" placeholder="Enrollment" required="">
				<input type="password" name="password" placeholder="Password" required="">
			    </div>
				<button name="login" class="login_button">Login</button>
			</form>
		</div>
	</div>
</body>

</html>
<script>
	function changePlaceholderColor() {
  var selectElement = document.getElementById('branch');
  selectElement.style.color = selectElement.value ? 'white' : '#999999';
}


var inputs = document.getElementsByClassName("capitalize-input");

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener("keyup", function(event) {
    var inputValue = event.target.value;
    if (inputValue.length > 0) {
      event.target.value = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
    }
  });
}


</script>