<link href="../css/dataform.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/dataform.js"></script>


<?php
$myfile = fopen("access.json", "a") or die("Unable to open file!");
$path_to_file = 'access.json';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("}];","",$file_contents);
file_put_contents($path_to_file,$file_contents);

$nameString = "Username:";
$nameValue = $_POST["username"];
$nametxt = "},{" . $nameString . "'" . $nameValue . "'" . ", ";

fwrite($myfile, $nametxt);
$passwordString = "Password:";
$passwordValue = $_POST["password"];
$passwordtxt =  $passwordString . "'" . $passwordValue . "'" . ", ";

fwrite($myfile, $passwordtxt);

$emailString = "Email:";
$emailValue = $_POST["email"];
$emailtxt =  $emailString . "'" . $emailValue . "'" . "}];";

fwrite($myfile, $emailtxt);
fclose($myfile);
?>

<html>

<title>Profile Form Complete</title>

<body>

<div class="complete_profile_form">
	<div class="complete_profile_form_title">Profile Complete</div>
	<button class="back">Back</button>
</div>

</body>
</html>

<script>CompleteInIt();</script>