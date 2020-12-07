<?php

    include("connection.php");
	$mgs = '';
	
if(isset($_POST['feedback'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mes = $_POST['mes'];
	
	 $insertquery = "INSERT INTO feedback (name, email, mes) VALUES ('$name', '$email', '$mes' )";

            $iquery = mysqli_query($conn, $insertquery);

            if($iquery){
					$mgs = "Added  Successfully.  !!!";
				    header("location:feedback.php");
            }
            else{
				$mgs = "Data not Inserted ";
				header("location:feedback.php");
           
            }  
}
	
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
	<link rel="stylesheet" href="css/style.css">
        <style>
        table {
		width:100%;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        }
        th{
            border: 2px solid #dddddd;
            text-align: center;
            padding: 8px;
            
        }
        td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        }

        tr:nth-child(odd) {
        background-color: #dddddd;
        }
		</style>
        <script src="js/form_validation.js"  type="text/javascript"></script>
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_contact">
        <div class="hero_text">
            <h1>FeedBack</h1>
            <p>Show feedback Click Feedback</p>
            <a href="#contact_section" class="btn_dark">Feedback</a>
        </div>
    </div>
    <div class="contact_div" id="contact_section">
        <table id="post">
            <tr>
                <th>Name</th>
                <th>Email ID</th>
                <th>FeedBack</th>
            </tr>
             <?php
			$Show = mysqli_query($conn, "SELECT * FROM feedback order by date");
			while($r = mysqli_fetch_array($Show)){ ?> 
            <tr>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['mes']; ?></td>
                
            </tr>
            <?php } ?>
           
        </table>
        </div>
        <div class="contact_div" id="contact_section">
        <div class="contact-container">
              <form action="" method="post" onSubmit="return feedback_validation()">
            
                <label for="fname">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
                 
                 <label for="country">Email ID:</label>
                 <input type="text" id="email" name="email" placeholder="Your Email Id">
            
                <label for="subject">Message:</label>
                <textarea id="mes" name="mes" placeholder="Write Message.." style="height:200px"></textarea>
            
                <input type="submit" name="feedback" value="FeedBack">
            
              </form>
        </div>
    </div>
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
        
</body>
</html>
