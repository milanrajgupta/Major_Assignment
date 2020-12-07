<?php include('connection.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_post">
        <div class="hero_text">
            <h1>Posts</h1>
            <!--<p>lorem ipsum clolo sit amet.</p>-->
            <a href="#post_content" class="btn_dark">Show All Post...</a>
        </div>
    </div>
    
    
    
    <div class="max-width-1 m-auto"><hr></div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>People who read this also read</h2>
        <div class="row">

       
        <div class="home-articles max-width-1 m-auto font2" id="post_content">
        <h1 style="color:#C39; text-align:center;">Featured Articles</h1>
        <?php
			$Show = mysqli_query($conn, "SELECT * FROM posts order by date");
			while($r = mysqli_fetch_array($Show)){ ?> 
			
		
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/1.png" alt="article">
            </div>
            <div class="home-article-content font1">
            	
                <a href="post.php">
                    <h2 style="color:#C39"><?php echo $r['title']; ?></h2>
                    <h3 style="color:#C3C; margin:0"> <?php echo $r['tagline']; ?></h3>
                </a>
                <p style="color:#00F; font-style:italic; margin:0;">Author Name:<span style="color:#3F6"><?php echo $r['author']; ?></span></p>
                <p>Date/Time: <span><?php echo $r['date']; ?></span></p>
                <div>Post By: <span style="color:#F90;">Admin</span></div>
                <i><?php echo $r['content'];?></i>    
            </div>
        </div>
        <?php } ?>

    </div>
        
    </div>
    </div>
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
</body>
</html>
