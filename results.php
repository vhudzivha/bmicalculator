<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];

$bmi = $weight / ($height * $height);

if($bmi < 18.5){
$category = "Underweight";
}
elseif($bmi < 25){
$category = "Normal weight";
}
elseif($bmi < 30){
$category = "Overweight";
}
else{
$category = "Obese";
}

}else{
header("Location:index.php");
exit();
}

?>

<!DOCTYPE html>
<html>
<head>

<title>BMI Result</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Your BMI Result</h1>

<p><strong>Name:</strong> <?php echo $firstname." ".$lastname; ?></p>

<p><strong>Age:</strong> <?php echo $age; ?></p>

<p><strong>BMI:</strong> <?php echo round($bmi,2); ?></p>

<p><strong>Category:</strong> <?php echo $category; ?></p>

<br>

<a class="back-btn" href="index.php">Calculate Again</a>

</div>

</body>
</html>