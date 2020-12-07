<?php

    include("connection.php");
	$mgs = '';
	
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $mes = $_POST['mes'];
	
	 $insertquery = "INSERT INTO contacts (name, email, phone_num, mes) VALUES ('$name','$email','$phone_num', '$mes' )";

            $iquery = mysqli_query($conn, $insertquery);

            if($iquery){
					$mgs = "Added  Successfully.  !!!";
				    //header("location:login.php");
            }
            else{
				$mgs = "Data not Inserted ";
           
            }  
}
	
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
	<link rel="stylesheet" href="css/style.css">
    <script src="js/form_validation.js"  type="text/javascript"></script>
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_contact">
        <div class="hero_text">
            <h1>Contact</h1>
            <p>lorem ipsum clolo sit amet.</p>
            <a href="#contact_section" class="btn_dark">Contact me ...</a>
        </div>
    </div>
    <div class="contact_div" id="contact_section">
    
        <div class="contact-container">
              <form action="" method="post" onSubmit="return contact_validation()">
            
                <label for="fname">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
                 
                 <label for="country">Email ID:</label>
                 <input type="text" id="email" name="email" placeholder="Your Email Id">
                 
                 <label for="country">Mobile Numaber:</label>
                 <input type="text" id="phone_num" name="phone_num" placeholder="Your Mobile No.">
            
                <label for="subject">Message:</label>
                <textarea id="mes" name="mes" placeholder="Write Message.." style="height:200px"></textarea>
            
                <input type="submit" name="submit" value="Submit">
            
              </form>
        </div>
    </div>
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
        
</body>
</html>
