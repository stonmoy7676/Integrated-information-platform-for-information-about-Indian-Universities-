
	


<!DOCTYPE html>
<html lang="en">

  <head>
  
        <title>Login Page</title>
        <link rel="stylesheet" href="signupcss.css">
  </head>
    <body>
       <div class="sign-up-form">
          <img src="icon.png">
    
         <form action="loginphp.php" method="Post">

                   <h1> Login</h1>

                   <input type="text" name= "username" class="input-box" placeholder="Username" required > 

                   <input type="password" name="password" class="input-box" placeholder="Password" required >
                   
                   <button type="submit" name="login" class="signup-btn" >Click to Login</button> 
                   
              

                   <p><b> New user to this website?</b> <a href="signupphp.php">Sign Up Now</a></p>
                   
                   <c>Copyright &copy; DC038 CAP463</c>
             


                   

            </form>
    
        </div>
    



 <?php 

session_start();

$server_name="localhost";
$username= "root";
$password= "";
$database_name="signupdata";

$conn=mysqli_connect($server_name, $username, $password,$database_name);

if(!$conn)
    
    {
    die("Connection Failed:".mysqli_connect_error());
     }



	 if(isset($_POST['login']))
     {
        $username= filter_input(INPUT_POST,'username');
        $password= filter_input(INPUT_POST,'password');
        

		

			//read from database
			$query = "SELECT * FROM signupdatatable WHERE  username = '$username' AND password = '$password' ";
			$result = mysqli_query($conn, $query);
			$user_data = mysqli_fetch_assoc($result);

			if (is_array($user_data ))
			{
				$_SESSION[ 'username'] = $user_data['username'];
				
			}
			else
			{
				echo ' <script type = "text/javascript">' ;
				echo 'alert ("Invalid Username or Password")';
				
				echo ' </script>';
			}
			if (isset($_SESSION["username"]))
			{
				header("Location: userinterfacephp.php");
			}
				





	}
			
?>


   </body>

</html>  