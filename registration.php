<html>
	<head>
		<title>Registration</title>
	</head>
	
	<body>
		
		<form method="post" action="regcheck.php">
			<fieldset>
			<img src="t1.jpg" width=100% height="320 px">
				<legend>Registration</legend>
					<table>
					<tr valign="top">
						<td>FirstName</td></br>
						<td><input type="text" name= "fname"   value=""/></td>
					</tr>

					<tr valign="top">
						<td>LastName</td></br>
						<td><input type="text" name= "lname"   value=""/></td>
					</tr>
					<tr valign="top">
						<td>UserName</td></br>
						<td><input type="text" name= "uname"   value=""/></td>
					</tr>
					<tr valign="top">
						<td>Email </td><br>
						<td><input type="text" name="email" value=""/></td>
					</tr>
					<tr valign="top">	
						<td>Password </td>
						<td><input type="password" name="pass1" value=""/></td><br>
					</tr>
					<tr valign="top">
						<td>Confirm Password</td>
						<td><input type="password" name="pass2" value=""/></td><br>
					</tr>
					<tr valign="top">
						<td>Phone</td>
						<td><input type="text" name="phone" value="" /></td><br>
					</tr>
					<tr valign="top">
						<td>Passport Number</td>
						<td> <input type="text" name="passport" value="" /></td><br>
					</tr>
					</table>
						Male<input type="radio" name="gender" value="male" value="M"/></tr>
						Female<input type="radio" name="gender" value="female" value="F" />
						Other<input type="radio" name="gender" value="other"  value="O"/><br>

					
					 <button type="submit" class="btn" name="submit">Register</button>
          
                       <label>Already a member?</label>
                           <a href="login.php">Sign-In</a>
 
			</fieldset>

		</form>
	</body>
</html>