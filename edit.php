<?php
    session_start();

    include("connection.php");
	$mgs = '';
    $sno = 0;
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $tagline = $_POST['tagline'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
	$author = $_POST['author'];  
	
    $userquery = "SELECT * FROM posts WHERE title = '$title' ";
	
    $query = mysqli_query($conn, $userquery);

    $usercount = mysqli_num_rows($query);

    if($usercount>0){
			$mgs = "Title already exists !!! Please Choose different Title";            
    }
    else{
        //if(sno == 0){
            $insertquery = "INSERT INTO posts (title, tagline, slug, content, author) VALUES ('$title','$tagline','$slug', '$content', '$author' )";

            $iquery = mysqli_query($conn, $insertquery);

            if($iquery){
					$mgs = "Added  Successfully.  !!!";
				   	header("location:dashboard.php");
            }
            else{
				$mgs = "Data not Inserted ";
           
            }
       // }
        //else{
		//	$mgs = "Passwords does not matched ";
        //}
    }
}
?>




<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog/add</title>
	<link rel="stylesheet" href="css/style.css"> 
    <script src="js/form_validation.js"  type="text/javascript"></script>
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_about">
        <div class="hero_text">
            <h1>Basic Action</h1>
            <!--<p>lorem ipsum clolo sit amet.</p>-->
            <a href="#add_post" class="btn_dark">Add a New Post.</a>
        </div>
    </div>
    
    <div class="contact_div" id="add_post">
    
        <div class="contact-container">
              <form action="" method="post" onsubmit="return validation()">
            
                <label for="tilte">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter Title">
            
                <label for="tag-line">Tagline</label>
                <input type="text" id="tagline" name="tagline" placeholder="Enter Tagline">
            
                <label for="slug">Slug</label>
                 <input type="text" id="slug" name="slug" placeholder="Enter Slug">
                 
                 <label for="content">Content</label>
                 <textarea id="content" name="content" style="height:200px"></textarea>
                 
                 <label for="author">Author Name</label>
                 <input type="text" id="author" name="author" placeholder="Enter Author Name">

                <input type="submit" name="add" value="Submit">
            
              </form>
        </div>
    </div>
 
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
    
    
</body>
</html>
