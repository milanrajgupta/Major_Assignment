<?php
include('connection.php');
$mgs = "";
$input= $_REQUEST["query"];
$query = "SELECT * FROM posts where title like '%$input%'";
$result = mysqli_query($conn, $query);
if ($input!==""){?>
	 <div class="home-articles max-width-1 m-auto font2" id="#search">
        <h1 style="color:#C39; text-align:center;">Featured Articles</h1>
     
<?php	
while($output = mysqli_fetch_assoc($result)){?>
  
	<div class="home-article">
            <div class="home-article-img">
                <img src="img/1.png" alt="article">
            </div>
            <div class="home-article-content font1">
            	
                <a href="post.php">
                    <h2 style="color:#C39"><?php echo $output['title']; ?></h2>
                    <h3 style="color:#C3C"><?php echo $output['tagline']; ?></h3>
                    <p style="color:#00F; font-style:italic; margin:0;">Author Name:<span style="color:#3F6"><?php echo $output['author']; ?></span></p>    
                </a>
                <span><?php echo $output['date']; ?></span>
               <div>Post By: <span style="color:#F90;">Admin</span></div>
                <i><?php echo $output['content']; ?></i>    
            </div>
        </div>
        </div>
     <?php
}
?>

<?php }	
?>

