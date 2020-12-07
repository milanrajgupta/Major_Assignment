<?php include('connection.php'); 
session_start();
if(!$_SESSION['username']){
		header('location:login.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">

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
        .button{
        border: none;
        color: white;
        padding: 15px;
        text-align: center;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button_edit{
            background-color: #3333ff;
        }
        .button_delete{
            background-color: #cc0000; 
        }
        .button_add{
            background-color:#33cc33;
        }
    </style>

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
            <li><a href="logout.php">Logout</a></li>
            <li><a><span style="color:#FF0;"><?php echo $_SESSION['username']?></span></a></li>
        </ul>
    </div>
    
    
    <div class="hero_section_about">
        <div class="hero_text">
                <h1>Dashboard</h1>
                <!--<p>Welcome to </p>-->
                <a href="#search" class="btn_dark">Search</a>
        <div>
            <form action="">
            <input type="text" id="search" name="search" style="text-align:center; font-size:24px; border-radius:100px;" placeholder="SEARCH POST" onkeyup="search_data(this.value)">
         	</form>
         </div>
            
        </div>
    </div>
     <!-- Include Middle -->
     <div class="contact_div">
        <table id="post">
            <tr>
                <th colspan="2"><a href="edit.php"><button class="button button_add">Add A New Post</button></a></th>
                
                <th colspan="2"><a href="index.php"><button class="button button_edit">Home</button></a></th>
                
                <th colspan="2"><a href="feedback.php"><button class="button button_delete">FeedBack</button></a></th>
                
            </tr>
            <tr>
                <th>Serial No</th>
                <th>Title</th>
                <th>Tagline</th>
                <th>Date/Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
             <?php
			$Show = mysqli_query($conn, "SELECT * FROM posts order by date");
			while($r = mysqli_fetch_array($Show)){ ?> 
            <tr>
                <td><?php echo $r['sno']; ?></td>
                <td><?php echo $r['title']; ?></td>
                <td><?php echo $r['tagline']; ?></td>
                <td><?php echo $r['date']; ?></td>
                <td><a href="update.php?sno=<?php echo $r['sno']; ?>"><button class="button button_edit">Update</button></a></td>
                <td><a href="delete.php?sno=<?php echo $r['sno']; ?>"><button class="button button_delete">Delete</button></a></td>
            </tr>
            <?php } ?>
           
        </table>
 
    </div>
    
    <!-- Ajax code for Searching  -->
    <script>
		function search_data(search){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (xhttp.readyState == 4 && xhttp.status == 200){
                    document.getElementById('post').innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "search_dash_post.php?query=" + search, true);
            xhttp.send();
        }

	</script>
    
    
    <!-- Include Foooter -->
    <?php include('common/footer.php'); ?>
    
</body>
</html>
