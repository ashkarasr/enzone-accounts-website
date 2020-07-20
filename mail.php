<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
 $to = "admin@enzoneaccountants.com"; 
$from = $_POST['email'];
$full_name = $_POST['fullname'];         
$subject = "Form submission";     
$subject2 = "Copy of your form submission";     
$message = "Name : ". $full_name . "\n\nMessage:" . $_POST['message'];  
$headers = "From:" . $from;      
$mail = mail($to,$subject,$message,$headers);     
if (isset($mail)) { ?>
<div class="container" style="margin:20px auto">
    <div class="row">
        <div class="alert alert-success">
           <span class="glyphicon glyphicon-ok"></span> <strong>Success Message</strong>
            <hr class="message-inner-separator">
            <p>
                Successfully Send Your message.</p>
            <hr class="message-inner-separator">
	      <p>
	        <a href="index.html" class="btn btn-success">Back to home</a>
	      </p>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="container" style="margin:20px auto">
	<div class="row">
    <div class="alert alert-danger fade in">
      <h4>Sorry! Your mail not send!</h4>
      <p>Please goto back in home page and try again click below.</p>
      <p>
        <a href="index.html#contact" class="btn btn-danger">Try Again</a>
      </p>
    </div>
	</div>
</div>

<?php } ?>