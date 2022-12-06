<?php
if(isset($_POST['submit'])){
$Name = "Name:".$_POST['txtName']."
";
$Email = "Email:".$_POST['txtEmail']."
";
$msg = "Messafe:".$_POST['msg']."
";
$file=fopen("file.txt", "a");
fwrite($file, $firstName);
fwrite($file, $lastName);
fclose($file);
}
?>