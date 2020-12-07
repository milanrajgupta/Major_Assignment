<?php
	include("connection.php");
    session_start();
if(!$_SESSION['username']){
		header('location:login.php');
	}

    
	$mgs = '';
	
	$id = $_GET['sno'];
	$show_query = "SELECT * FROM posts WHERE sno = '$id' ";
	$show_data = mysqli_query($conn, $show_query);
	$arr_data = mysqli_fetch_array($show_data);
	
if(isset($_POST['update'])){
	$sno = $_GET['sno'];
    $title = $_POST['title'];
    $tagline = $_POST['tagline'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
	$author = $_POST['author']; 
	
	$update = "UPDATE posts SET sno = $sno, title = '$title', tagline = '$tagline' , slug = '$slug', content = '$content' , author = '$author'  WHERE sno = $sno"; 
	$query = mysqli_query($conn, $update);
	if($query){
		header('location:dashboard.php');
		$mgs = 'Updated..............';
	}
	else{
		$mgs = 'Not Updated..............';
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog/update</title>
	<link rel="stylesheet" href="css/style.css">
    <script src="js/form_validation.js"  type="text/javascript"></script>
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_about">
        <div class="hero_text">
            <h1>Update</h1>
            <!--<p>lorem ipsum clolo sit amet.</p>-->
            <a href="#post" class="btn_dark">Update</a>
        </div>
    </div>
    
    <div class="contact_div">
    
        <div class="contact-container">
              <form action="" method="post" onsubmit="return validation()">
            
                <label for="tilte">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter Title" value="<?php echo $arr_data['title']; ?>">
            
                <label for="tag-line">Tagline</label>
                <input type="text" id="tagline" name="tagline" placeholder="Enter Tagline" value="<?php echo $arr_data['tagline']; ?>">
            
                <label for="slug">Slug</label>
                 <input type="text" id="slug" name="slug" placeholder="Enter Slug" value="<?php echo $arr_data['slug']; ?>">
                 
                 <label for="content">Content</label>
                 <textarea id="content" name="content" value="<?php echo $arr_data['content']; ?>" style="height:200px"></textarea>
                 
                 <label for="file">Author Name</label>
                 <input type="text" id="file" name="author" placeholder="Enter Author Name" value="<?php echo $arr_data['author']; ?>">

                <input type="submit" name="update" value="Update">
            
              </form>
        </div>
    </div>
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
    
</body>
</html>
