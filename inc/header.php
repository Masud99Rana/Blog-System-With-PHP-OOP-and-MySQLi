<?php include "config/config.php"; ?>

<?php include "lib/database.php"; ?>
<?php include "helpers/format.php"; ?>

<?php 

	$db = new Database();
	$fm = new Format();
?>
<!DOCTYPE html>
<html>
<head>

	<?php include 'scripts/meta.php'; ?>
	<?php include 'scripts/css.php'; ?>
	<?php include 'scripts/js.php'; ?>

	
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
		<?php 
            $query = "select * from title_slogan where id =1";
            $blog_title = $db->select($query);
            if ($blog_title) {
                while ($result = $blog_title->fetch_assoc()) {
                
            
        ?>   
            
			<div class="logo">
				<img src="admin/<?php echo $result['image'];?>" alt="Logo"/>
				<h2><?php echo $result['title'];?></h2>
				<p><?php echo $result['slogan'];?></p>
				
				<!-- <h2>Website Title</h2>

				<p>Our website description</p> -->
			</div>
		</a>

	<?php } } ?>

		<div class="social clear">
        <?php 
            $query = "select * from tbl_social where id =1";
            $socialmedia = $db->select($query);
            if ($socialmedia) {
                while ($result = $socialmedia->fetch_assoc()) {
                
            
        ?>  
			<div class="icon clear">
				<a href="<?php echo $result['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $result['twitter'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $result['linkedin'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $result['googleplus'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
			<?php } } ?>
		</div>
	</div>
<div class="navsection templete">
	<?php

		$path = $_SERVER['SCRIPT_FILENAME'];
		$currentpage = basename($path, '.php');



	 ?>
	<ul>
		<li> <a
		<?php
			if ($currentpage == 'index') {
				echo 'id="active"';
			}

		?>


		  href="index.php">Home</a></li>

		<?php 
		    $query = "select * from tbl_page";
		    $pages = $db->select($query);
		    if ($pages) {
		        while ($result = $pages->fetch_assoc()) {
		        
		            
		?> 
        <li><a 

		<?php 
			if (isset($_GET['pageid']) && $_GET['pageid'] == $result['id']) {
				echo 'id="active"';
			}

		?>

         href="page.php?pageid=<?php echo $result['id'];?>"><?php echo $result['name'];?></a></li>
	  	<?php } }?>  
		<li><a

		<?php
			if ($currentpage == 'contact') {
				echo 'id="active"';
			}

		?>


		 href="contact.php">Contact</a></li>
	</ul>
 
</div>
