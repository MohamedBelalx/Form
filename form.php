<!DOCTYPE html>
<html lang="en">
<?php
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
                  $name = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
                  $mail = filter_var($_POST['mail'],FILTER_SANITIZE_EMAIL);
                  $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
                  $msg = filter_var($_POST['mess'],FILTER_SANITIZE_STRING);
				  
                  /* Array of error */

                  $errors = array();

                  if(strlen($name) < 3){
                        $errors[] = '<h6>Name must be more than 3 characters</h6>';
				  }
		}
	
	?>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/Animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<!-- Start Form -->
	<section class="container">
		<div class="fadeInDown form-group" style="animation-duration:0s">
			<h2 class="text-center">registration form</h2>
			<form action="form.php" class="reg" method="POST">
				<?php if (! empty($errors)){ ?>
				<div class="er alert alert-danger">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				 </button>
					<?php
						
						foreach($errors as $error){
							echo $error ;
						}
					
					?>	
				</div>

					<?php } ?>

				<input type="text" name="username" class="form-control name" placeholder="Enter Your Name" value="<?php if(isset($name)){ echo $name ; } ?>">
				<i class="fas fa-user"></i>
				<div class="alert alert-danger custom-alert" id="name-alert">Name must be more than 3 characters</div>

				<input type="email" name="mail" class="form-control mail" placeholder="E-Mail" value="<?php if(isset($mail)){ echo $mail ; } ?>">
				<i class="fas fa-envelope"></i>
				<div class="alert alert-danger custom-alert" id="mail-alert">E-mail cannot be empty</div>
				
				<input type="tel" name="phone" class="form-control phone" placeholder="Phone Number" value="<?php if(isset($phone)){ echo $phone ; } ?>">
				<i class="fas fa-phone"></i>
				<div class="alert alert-danger custom-alert" id="phone-alert">phone number is require</div>
				
				<textarea name="mess" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"><?php if(isset($msg)){ echo $msg ; } ?></textarea>
				<input class="btn btn-primary btn-block" type="submit" value="Submit">
			</form>
		</div>
	</section>
	<!-- End Form -->
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="js/jQuery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>	
	</body>
</html>