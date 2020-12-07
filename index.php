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
	<?php //include('common/header.php'); ?>
    <div class="top">
    <h1>
        MY BLOG
    </h1>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="post.php">Post</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
    </div>
    
    <div class="hero_section">
        <div class="hero_text">
            <h1>Milan's Blog</h1>
           <!--<p>Search Post</p>-->
           <a href="#search" class="btn_dark">Click me & Search More post.</a>           
            <div>
                <form action="">
                 <input type="text" id="search" name="search" style="text-align:center; font-size:24px; border-radius:100px;" placeholder="SEARCH POST" onkeyup="search_data(this.value)" onMouseMove="">
                </form>
            </div>
            
        </div>
    </div>
	
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
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
   
    <!-- Ajax code for Searching  -->
     <script>
		function search_data(search){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (xhttp.readyState == 4 && xhttp.status == 200){
                    document.getElementById('post_content').innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "search_home_post.php?query=" + search, true);
            xhttp.send();
        }

	</script>
    
</body>
</html>
