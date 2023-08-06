<?php include("head.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br><br>
<label for="username">USERNAME</label>
<input type="text" size="55" name="n" placeholder="enter your name" required />
<br><br>
<label for="age">AGE</label>
<input type="number" size="10" name="a"  />
<br><br>
<label for="dob">DOB</label>
<input type="date" name="d" />
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g" />MALE
<input type="radio" value="female" name="g" />FEMALE
<input type="radio" value="OTHERS" name="g" />OTHERS
<br><br>
<label for="email">EMAIL</label>
<input type="email" size="50" name="e" />
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="8" name="p" />
<br><br>
<label for="dept">DEPT</label>
<select name="s">
<option value="EEE">EEE</option>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="BCA">BCA</option>
</select>
<br><br>
<input type="submit" value="sumbit">
<input type="reset" value="reset">
</form>
</div>

</form>
</body>
<?php include("foot.html")
?>
