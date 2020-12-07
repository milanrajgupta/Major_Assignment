<?php
	session_start();

	include("connection.php");
    
    
	
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password']; 
	 
	$user_search = " SELECT * FROM users WHERE username = '$username' ";
	$query = mysqli_query($conn, $user_search);
	
	$user_count = mysqli_num_rows($query);
	if($user_count){
		$user_pass = mysqli_fetch_assoc($query);
		
		$db_pass = $user_pass['password'];
		
		$_SESSION['username'] = $user_pass['username'];
		
		$pass_decode = password_verify($password, $db_pass);
		
		if($pass_decode){
			echo "Login Successful";
			// Set Cookie username and password
            	if(isset($_POST['remember_me'])){
					setcookie('user_cookie', $username, time()+86400);
					setcookie('pass_cookie', $password, time()+86400);
					header("location:dashboard.php");
				}
				else{
					header("location:dashboard.php");
				}		
		}
		else{
			echo "<script>alert('Incorrect Password')</script>";
		}
	}
	else{
		echo "<script>alert('Invalid User Name Please check')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>login-form</title>
<link rel="stylesheet" href="css/style_login.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
   include('common/header.php');
?>
	<div class="container">
        <div class="form">
            <h1>Login Form</h1>
            <form action="" method="post">
                
                    <label><b>User Name</b></label>
					<!-- Username Cookie set in text field -->
                    <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE['user_cookie'])){ echo $_COOKIE['user_cookie'];} ?>"> 
        
                    <label><b>Password</b></label>
					<!-- Password Cookie set in text field -->
                    <input type="text" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE['pass_cookie'])){ echo $_COOKIE['pass_cookie'];} ?>">
                    
                    <input type="checkbox" name="remember_me"> Remember me
                    <p>Forgot Password <a href="reset-pass.php">Click here</a>.</p>
        
                    <div class="clearfix">
                        <button type="submit" name="login" class="loginbtn">Log In</button>
                        <a href="signup.php"><button type="submit" class="signupbtn">Sign Up</button></a>
                    </div>
			</form>
    	</div>
    </div>
     <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>

</body>

</html>
