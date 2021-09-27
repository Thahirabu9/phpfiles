<!DOCTYPE> 
<html>
 <head>
  <title>SERVER SIDE VALIDATION</title> 
  <style> .error {color: #FF0000;} </style>
   </head> <body bgcolor="yellow">
    <?php $nameErr = $emailErr = $genderErr = $addressErr= $DOBErr = "";
     $name = $email = $gender = $address = $DOB = ""; 
     if ($_SERVER["REQUEST_METHOD"] = "POST") 
     { if (empty($_POST["name"]))
      { $nameErr = "Name is required"; }
       else { $name = test_input($_POST["name"]);
        }
         if (empty($_POST["email"])) 
        { $emailErr = "Email is required"; } 
        else { 
        $email = test_input($_POST["email"]); }
         if (empty($_POST["dob"]))
          {
           $dob = ""; }
            else { $dob= test_input($_POST["dob"]); 
        } 
        if (empty($_POST["address"]))
         { $address = ""; }
          else { $address = test_input($_POST["address"]);
           } if (empty($_POST["gender"]))
            { $genderErr = "Gender is required"; }
             else { $gender = test_input($_POST["gender"]); 
         } 
         
         }
          function test_input($data) 
          { $data = trim($data); 
          $data = stripslashes($data);
           $data = htmlspecialchars($data); 
           return $data; 
       } 
?> 
<h2>PHP Form Validation Example</h2> <p><span class="error">* required field</span></p> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "> Name: <input type="text" name="name"> <span class="error">* <?php echo $nameErr;?></span> <br><br> E-mail: <input type="text" name="email"> <span class="error">* <?php echo $emailErr;?></span> <br><br> DOB: <input type="text" name="dob"> <span class="error">*<?php echo $DOBErr;?></span> <br><br> Address: <textarea name="address" rows="5" cols="40"></textarea> <span class="error">*<?php echo $addressErr;?></span> <br><br> 
Gender: <input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="other">Other <span class="error">* <?php echo $genderErr;?></span> <br><br> <input type="submit" name="submit" value="Submit"> </form> <?php echo "<h2>Your Input:</h2>"; 
	echo $name; 
	echo "<br>"; 
	echo $email; 
	echo "<br>";
	 echo $dob; 
	 echo "<br>";
	  echo $address; 
	  echo "<br>";
	   echo $gender; 
?> </body> </html> 