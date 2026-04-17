<form method="post" action=""?>
<label>Name</label>
<input type="text" name="fname" required>
<br><br>
<label>Mail</label>
<input type="email" name="email" required>
<br><br>
<input type="submit">

</form>
<?php
$name=$_POST['fname'];
$email=$_POST['email'];
if (empty($name)) {
    echo "Name is empty";
    
} else {
    echo $name;
   
}

if (empty($email)) {
    echo "Email is empty";
} else {
    echo $email;
   
}           

?>