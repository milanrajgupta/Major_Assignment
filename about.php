<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>

<body>
	<!-- Include Header -->
	<?php include('common/header.php'); ?>
    
    <div class="hero_section_about">
        <div class="hero_text">
            <h1>About</h1>
            <!--<p>lorem ipsum clolo sit amet.</p>-->
            <a href="#about" class="btn_dark">Know Me...</a>
        </div>
    </div>
    
    <div class="home-articles max-width-1 m-auto font2" id="about">
        <h2>About Milan</h2>
        <div class="home-article">
            <div class="home-article-img">
                <img src="img/Milan.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="#">
                    <h3>Hey. This is Milan Kumar. I am pursuing MCA From University Of Hyderabad.</h3>
                </a>

                <div>Admin : Milan</div>
                <span>1 December 2020</span>
            </div>
        </div>
    </div>
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
    
</body>
</html>
