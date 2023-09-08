<?php
if(isset($_POST['submit'])){
	$name=trim($_POST["name"]);
	$number=trim($_POST["number"]);
	$email=trim($_POST["email"]);
	$errors=array();

if(empty($name)){
	$errors['name']="You did not enter a name.";
}else if (strlen($name)< 5){
	$errors['name']="Name must have at least 5 characters long";
}
if(empty($number)){
	$errors['number'] = "Please enter number";
}
//verificare daca e numeric
elseif(is_numeric($number)==false){
	$errors['number']="Enter a numeric  number";
}
elseif(strlen($number)!=10){
	$errors['number'] = "Number should be 10 digits. ";
}

if(empty($email)){
	$errors['email'] = "You did not enter a email .";
}
//verificam daca e valid un email
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9-a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-z]{2,6}$/i",$email)){
					$errors['email'] = "Nu este email-ul valid";
}
if(empty($errors)){
	echo "Success";
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Sample Html Form</title>
	<style type="text/css">
	.errors {border:1px solid red;}
	.message {color:red; font-weight:bold;}
	table {width:400px;}
	</style>
</head>

<body>
<?php
if(isset($errors)){
	foreach($errors as $error){
		echo "<p class='message'>Error:" .  $error . "</p>";
	}
}

?>

<form method="POST" action="">

	<table>
		<tr>
			<td>Employ Name:</td>
			<td> 
				<input name="name" type="text" value="<?php if (isset($name)){echo $name;} ?>"
				<?php if(isset($errors['name'])) { echo "class='errors'";}?> > 
			</td>		
		</tr>
	    <tr>
			<td>Number:</td>
			<td> 
				<input name="number" type="text" value="<?php if (isset($number)){echo $number;} ?>"
				<?php if(isset($errors['number'])) { echo "class='errors'";}?> > 
			</td>		
		</tr>
        <tr>
			<td>Email :</td>
			<td> 
				<input name="email" type="text" value="<?php if (isset($email)){echo $email;} ?>"
				<?php if(isset($errors['email'])) { echo "class='errors'";}?> > 
			</td>		
		</tr>
         <tr>
			<td></td>
			<td> 
				<input type="submit" name="submit" value="submit" > 
			</td>		
		</tr>		
	
	</table>



</html>
















