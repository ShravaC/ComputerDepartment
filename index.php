<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
     <form action="connect.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" placeholder="Email" name="email><br>

		 <label>User Name</label>
     	<input type="text" placeholder="User Name" name="Username"><br>


     	<label>Gender</label>
     	<input type="gender" placeholder="Gender" name="gender"><br>

      <button type="submit">Login</button>
	//	 <a href="signup.php" class="ca">Create an account</a> 
     </form>
</body>
</html>