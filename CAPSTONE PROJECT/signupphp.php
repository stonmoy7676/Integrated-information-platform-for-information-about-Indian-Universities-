<!DOCTYPE html>
<html lang="en">

  <head>
  
        <title>Signup Page</title>
        <link rel="stylesheet" href="signupcss.css">
  </head>
    <body>
       <div class="sign-up-form">
          <img src="icon.png">
    
         <form action="signupphp.php" method="Post">

                   <h1> Sign Up </h1>

                   <input type="text" name= "username" class="input-box" placeholder="Username" required > 

                   <input type="email" name="email" class="input-box" placeholder="Your Email" required>  
              
                   <input type="password" name="password" class="input-box" placeholder="Password" required >

                   <input type="password" name="confirmpassowrd" class="input-box" placeholder="Confirm Password" required >
             
                   <p><span><input type="checkbox" name= "accept" required ></span> <b> I agree to the Terms and Services </b></p>

                   <button type="submit" name="signup" class="signup-btn" >Sign up</button> 

                   <p><b> Already have an account?</b> <a href="loginphp.php">Login Here</a></p>
                   
                   <c>Copyright &copy; DC038 CAP463</c>

            </form>
    
        </div>
    
    </body>

</html>  








<?php

$server_name="localhost";
$username= "root";
$password= "";
$database_name="signupdata";

$conn=mysqli_connect($server_name, $username, $password,$database_name);

if(!$conn)
    
    {
    die("Connection Failed:".mysqli_connect_error());
     }

        if(isset($_POST['signup']))
     {
        $username= filter_input(INPUT_POST,'username');
        $email= filter_input(INPUT_POST,'email');
        $password= filter_input(INPUT_POST,'password');
        $confirmpassword= filter_input(INPUT_POST,'confirmpassword');
    
        $sql_query = "INSERT INTO signupdatatable (username,email,password,confirmpassword)
        VALUES ('$username','$email','$password','$confirmpassword')";

    
        if (mysqli_query($conn, $sql_query))
          {
        echo ' <script type = "text/javascript">' ;
                echo 'alert ("You have signed up Successfully!")';
                
                echo ' </script>';

          }
        else
         {
        echo "Error:" .$sql ."" . mysqli_error($conn);
        }
      mysqli_close($conn);

     }
     
?>

