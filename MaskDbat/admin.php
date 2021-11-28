<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 
	<link rel="stylesheet" href="stty.css"> -->
	<link rel="stylesheet" href="stty.css?v=<?php echo time(); ?>">
</head>

<body>
	<section class="hero">
		<div class="h">
			<h1 class="head">Admin</h1><Br>
		</div>
		<div class="form-box">
			<div class="btn">
				<div id="btn"></div>
				<button type="button" class="btnp" onclick="login()">login</button>
				<button type="button" class="btnp" onclick="reg()">Sign up</button>
				</a>
			</div>
			<form class="f" id="login" method="post">
				<input type="text" class="input-f" placeholder="user-id" required name="username">
				<input type="text" class="input-f" placeholder="password" required name="password">
				<button type="submit" class="submit-btn" name="log">Login</button>
			</form>
			<form class="f" id="reg" action="" method="post">
				<input type="text" class="input-f" placeholder="user-id" required name="username" onchange="myfun(this.value)">
				<input type="number" class="input-f" placeholder="phno" required name="phno">
				<input type="password" class="input-f" placeholder="password" required name="password">
				<button type="submit" class="submit-btn" name="submit">Register</button>
			</form>
		</div>
	</section>
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("reg");
		var z = document.getElementById("btn");
		var data="";
		function reg() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
		}
		
		function myfun(data)
		{
			alert(data);
			
		}
	</script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
	require_once "response.php";

$username =  $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$same ="";

// if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
					?>
					<script>alert("This username is already taken")</script>;<?php
                $username_err="same";
				$same="1qwe";
			}
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(empty($password_err)==false && empty($username_err)==false && empty($same)){
	?>
	<script>alert("Error in username & password")</script>;<?php
}
elseif(empty($username_err)==false && empty($same) ){
	?>
	<script>alert("Error in username")</script>;<?php
}
elseif(empty($password_err)==false){
	?>
	<script>alert("password too weak")</script>;<?php
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: admin.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
if(isset($_POST['log'])){
	require_once "response.php";

$username = $password = "";
$err = "";

// if request method is post
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: mysql.php");
                            
                        }
						else{
							?>
	<script>alert("password incorrect")</script>;<?php
						}
                    }

                }
				else{
					?>
	<script>alert("username incorrect")</script>;<?php
				}

    }
}    


}


?>