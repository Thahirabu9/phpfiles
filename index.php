<!DOCTYPE html>
<html>
<head>
	
	<title>server side validation</title>
	<style>
		
		body{
			background-color: #F694C1;
            font-family: ;
			text-align: center;
		}
		.common-btn{

	padding: 18px 40px;
	background: transparent;
	outline: none;
	border: 4px solid #f67c92;
	font-weight:bold;
	cursor: pointer;
}
.line-1{
	width: 15px;
	height: 15px;
	background:#FFFFFF;
	display: inline-block;
	text-align: right;
}
.line-2{
	width: 80px;
	height: 1px;
	background:#FFFFFF;
	display: inline-block;
}
.line-3{
	width: 60px;
	height: 1px;
	background:#FFFFFF;
	display: inline-block;
}
	</style>

</head>
<body>

<?php
$nameErr = $passwordErr =$dateErr =$emailErr = $genderErr = "";
$name = $password =$date = $email = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	<h2>Your Input:</h2>
	if (empty($_POST["name"])) {
		$nameErr="Name is Required";
	}
	else{
		$name=test_input($_POST["name"]);

	}
	if (empty($_POST["password"])) {
		$passwordErr="password is Required";
	}
	else{
		$password=test_input($_POST["password"]);

	}
	if (empty($_POST["date"])) {
		$dateErr="date is Required";
	}
	else{
		$date=test_input($_POST["date"]);

	}
    if (empty($_POST["email"])) {
		$emailErr="email is Required";
	}
	else{
		$email=test_input($_POST["email"]);

	}
	if (empty($_POST["gender"])) {
		$genderErr="gender is Required";
	}
	else{
		$gender=test_input($_POST["gender"]);

	}
}
	function test_input($data)
	{
		$data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
 <label for="ungaperu">Unga Peru  &#128512;</label><br>
 <input type="text" id="name" name="name" required><span></span><br>
 <label for="passwordpodra">passwordpodra:</label><br>
 <input type="password" id="password" name="password" required><br>
 <label for="date">date:</label><br>
 <input type="date" id="date" name="date" required><br>
 <label>Email-id:</label><br>
  <input type="email" id="email" name="email"  required><br>
 <label>Gender &#128104; &#128105;</label><br>
  <select id="gender" name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="others">Others</option>
  </select><br>
  <br>
 <input type="submit" id="submit" name="submit" required><br>
 </form>

<a href="https://bit.ly/3AyQE4w">SELECT THIS FOR MORE REFERENCE
</a>


<button class="common-btn">Read More</button>
        	<div class="line">
        		<span class="line-1"></span><br>
        		<span class="line-2"></span><br>
        		<span class="line-3"></span>

        
        	</div>


<?php echo "<h2>Your Input:</h2>"; 
	echo $name; 
	echo "<br>"; 
	echo $password; 
	echo "<br>";
	 echo $date; 
	 echo "<br>";
	  echo $email; 
	  echo "<br>";
	   echo $gender; 
?> 





</body>
</html>