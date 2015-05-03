<?php
	include('session.php');
	$usern=$_SESSION['login_user'];
	$conn1=$_SESSION['conn'];

	$propic = mysqli_query($conn1,"select picture from user where id = (select id from login where username='$usern')");
	$row1 = mysqli_fetch_assoc($propic);
	$pic = mysqli_query($conn1,"SELECT * FROM pics WHERE photoid in (select bitemid from boards where bboardid in (select boardid from userboard where userid = (select id from login where username='$usern')))");
//	$comments = mysqli_query($conn1,"select count(cphotoid) from comments group by cphotoid having cphotoid='11'");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Your Home Page</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	</head>
	<body>
				<div class ="profile">
					<imgd><img src="<?php echo $row1['picture'] ?>" width="200px" height="100%">
					<nv>Navigation Bar</nv>
					</imgd>
					<usernam> <?php echo $login_session; ?></usernam>
					<logoutb><a href="logout.php">Log Out</a></logoutb>
				</div>


				<div class="contents">
					<?php while($row2 = mysqli_fetch_assoc($pic)) {  ?>
					<div class ="imge">
						<h3 align="center"><?php echo "- " . $row2["photoname"] ;?></h3>
						
						<img src=" <?php echo $row2["photo"]; ?>" ></img>
						<br>
						<input type="image" src="/project/like.png" width="60" height="25" name="like"></input>
						<like>
						<?php
							$likes = mysqli_query($conn1,"select likes from pics where photoid={$row2['photoid']}");
							$row4= mysqli_fetch_array($likes);
							?>
									<script type="text/javascript">
									$('#comment').click(function() {   
								     <?php
								   	$res1= mysqli_query($conn1,"UPDATE pics SET likes=likes+1 WHERE photoid={$row2['photoid']}");
								     $likes1= mysqli_query($conn1,"select likes from pics where photoid={$row2['photoid']}");
								      $row4= mysqli_fetch_array($likes1);
								     ?>
									});</script>
							<?php
							echo $row4[0]; 		
							if($row4[0]<1)
								{echo 0;}
							?>
						</like>

						<input type="image" src="/project/comment.png" width="60" height="25" name="comment"></input>
		
						<like>
						<?php
							$comments = mysqli_query($conn1,"select count(cphotoid) from comments group by cphotoid having cphotoid={$row2['photoid']}");
							$row3= mysqli_fetch_array($comments);
							echo $row3[0];
							if($row3[0]<1)
								{echo 0;}
							?>
						</like>
					<!--	<?php
					//	echo "- Name : " . $row["photoname"] ; ?>	
				-->	</div>
					<?php } ?>
				</div>
		
	</body>
</html>