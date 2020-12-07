<?php
$servername = "localhost";
$username = "root";
$userpassword = "";
$dbname = "my_blog";

$conn = mysqli_connect($servername, $username, $userpassword, $dbname);
$input= $_REQUEST["query"];
$query = "SELECT * FROM posts where title like '%$input%'";
$result = mysqli_query($conn, $query);
if ($input!==""){?>
	<table>
    <tr>
        <th colspan="2"><a href="index.php"><button class="button button_edit">Home</button></a></th>        
        <th colspan="2"><a href="edit.php"><button class="button button_add">Add A New Post</button></a></th>
        <th colspan="2"><a href="logout.php"><button class="button button_delete">Logout</button></th>
        
    </tr>
	<tr>
            <th>Serial No</th>
            <th>Title</th>
            <th>Tagline</th>
            <th>Edit</th>
            <th>Delete</th>        
     </tr>
     
<?php	
while($output = mysqli_fetch_assoc($result)){?>
  <!-- // echo '<a>'.$output['title'].'</a>';-->
	<tr>
        	<td><?php echo $output['sno']; ?></td>
            <td><?php echo $output['title']; ?></td>
            <td><?php echo $output['tagline']; ?></td>
            <td><a href="update.php?sno=<?php echo  $output['sno']; ?>"><button class="button button_edit">Update</button></a></td>
            <td><a href="delete.php?sno=<?php echo $output['sno']; ?>"><button class="button button_delete">Delete</button></a></td>
        </tr>
     </table>
     <?php
}
?>

<?php }	
?>

