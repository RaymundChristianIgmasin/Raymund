<html>
<body>

<form action="welcome.php" method="post">

<?php
if (isset ($_GET['error'])){
echo '<p style="color:red";>Please enter a username and password to continue</p>';
}

Username: <br><input type="text" name="name"><br><br>
Password: <br><input type="password" name="pw"><br><br>
<input type="submit" value="Login"/>
<input type="reset" value="Clear" />
</form>

<p>Password: 12345</p>
<?php echo "<p>Encrypted sha1: ".sha1('12345')."</p>";

</body>
</html>