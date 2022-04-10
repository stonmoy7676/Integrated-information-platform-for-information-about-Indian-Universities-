<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>User Interface</title>
<link rel="stylesheet" href="userinterfacecss.css">
</head>

<body>
<div class="user_interface">
<img src="icon.png" > 

<form action="userinterfacephp.php" method="Post">

<input type="text" name= "username" class="input-box" placeholder=" Enter Username" required >
<h1> Kindly Select the Course </h1>

<p>Course Name</p>
 
<select name= "course" class= "input-box">

<OPTION>B.A(ENGLISH)</OPTION>
<OPTION>B.A(ECONOMICS)</OPTION>
<OPTION>B.A(HISTORY)</OPTION>
<OPTION>B.A(GEOGRAPHY)</OPTION>
<OPTION>B.A(POLITY)</OPTION>
<OPTION>B.ARCH</OPTION>
<OPTION>B.COM</OPTION>
<OPTION>B.B.A</OPTION>
<OPTION>B.Sc(AGRICULTURE)</OPTION>
<OPTION>B.Sc(MATHEMATICS)</OPTION>
<OPTION>B.Sc(CHEMISTRY)</OPTION>
<OPTION>B.Sc(PHYSICS)</OPTION>
<OPTION>B.Sc(INFORMATION TECHNOLOGY)</OPTION>
<OPTION>B.Sc(BIOTECHNOLOGY)</OPTION>
<OPTION>B.Sc(BIOCHEMISTRY)</OPTION>
<OPTION>B.SC(PHYSICAL EDUCATION)</OPTION>
<OPTION>B.B.A</OPTION>
<OPTION>B.C.A</OPTION>
<OPTION>B.C.A(HONS.)</OPTION>
<OPTION>B.C.A + MCA (DUAL DEGREE)</OPTION>
<OPTION>B.TECH(CSE)</OPTION>
<OPTION>B.TECH(CIVIL)</OPTION>
<OPTION>B.TECH(MECH)</OPTION>
<OPTION>B.TECH(CHEMICAL)</OPTION>
<OPTION>B.TECH(ELECTRICAL)</OPTION>
<OPTION>B.TECH(MECHATRONICS)</OPTION>
<OPTION>B.TECH(INFORMATION TECHNOLOGY)</OPTION>
<OPTION>B.TECH(BIOTECHNOLOGY)</OPTION>
<OPTION>B.Ed</OPTION>
<OPTION>B.PHARM</OPTION>
<OPTION>L.L.B.</OPTION>
<OPTION>M.A(HISTORY)</OPTION>
<OPTION>M.A(GEOGRAPHY)</OPTION>
<OPTION>M.A(ECONOMICS)</OPTION>
<OPTION>M.A(POLITY)</OPTION>
<OPTION>M.A(ENGLISH)</OPTION>
<OPTION>M.TECH(CSE)</OPTION>
<OPTION>M.TECH(CIVIL)</OPTION>
<OPTION>M.TECH(ELECTRICAL)</OPTION>
<OPTION>M.TECH(MECHATRONICS)</OPTION>
<OPTION>M.TECH(INFORMATION TCHNOLOGY)</OPTION>
<OPTION>M.B.A</OPTION>
<OPTION>MCA</OPTION>
<OPTION>M.PHARM</OPTION>
<OPTION>M.COM</OPTION>
<OPTION>PHD</OPTION>

</select>
<button type="submit" name="savedata" class= "user_interface" > Save your Course </button> 

<p><b> Need to Logout?</b><a href="logoutphp.php"> Click here for Logout</a></p>

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



     if(isset($_POST['savedata']))
     {
        $username= filter_input(INPUT_POST,'username');
        $course= filter_input(INPUT_POST,'course');
    
        
        

        

            

            $sql_query = "INSERT INTO course (username,course)
        VALUES ('$username','$course')";


if (mysqli_query($conn, $sql_query))
     {
        echo ' <script type = "text/javascript">' ;
                echo 'alert ("Your Data has been Saved Successfully!")';

                echo ' </script>';

          }
          else
{
     echo "Error:" .$sql ."" . mysqli_error($conn);
        }
      mysqli_close($conn);



    }
            
?>

</body>
</html>