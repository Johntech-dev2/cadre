<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>cadre crown poly chapter</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<h1 class="header">CADRE Corps March 2023 camping/recruitment programme</h1>
<p class="sub-header">March 6th - March 10th</p>
<p class="sub-header">(Crown Poly Unit)</p>
</div>
<form action="userinformation.php" method="post">
<label for="fname">First Name</label><br>
<input type="text" id="fname" name="firstname" required><br>
<label for="lname">Last Name</label><br>
<input type="text" id="lname" name="lastname" required><br>
<label for="pnumber">Phone Number</label><br>
<input type="text" id="phonenumber" name="phonenumber" required><br>
<label for="Unit">Unit</label><br>
<select id="Unit" name="Unit"><br>
<option value="Eksu">Eksu</option>
<option value="Fuoye">Fuoye</option>
<option value="fedpoly">Fedpoly</option>
<option value="crownpoly">Crownpoly</option>
<option value="others">Others</option>
</select>
<br>
<label for="gender">Gender</label><br>
<select id="Gender" name="Gender"><br>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>