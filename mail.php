<?php
$to = "nisamudheenm@hotmail.com"; 
$from = $_POST['email'];
$full_name = $_POST['name'];         
$subject = "Form submission";     
$subject2 = "Copy of your form submission";     
$message = "Name : ". $full_name . "\n\nMessage:" . $_POST['cmt'];  
$headers = "From:" . $from;      
$mail = mail($to,$subject,$message,$headers);     
if (isset($mail)) { 
echo "Form Submitted Succesfully";
} else { 
echo "Mail Not Send";
}?>
