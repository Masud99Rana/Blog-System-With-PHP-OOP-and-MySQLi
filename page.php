<?php include "inc/header.php" ?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

		<?php 
		$pageid = mysqli_real_escape_string($db->link, $_GET['pageid']);
			if (!isset($pageid) || $pageid ==NULL ) {
				echo "<script>window.location = '404.php';</script>";

				//header("Location: catlist.php");
			} else {
				$id = $pageid;
			}

		?>
        <?php 
            $pagequery = "select * from tbl_page where id='$id' ";
            $pagedetails = $db->select($pagequery);
            if ($pagedetails) {
                while ($result = $pagedetails->fetch_assoc()) {
                
                    
        ?>  



			<div class="about">
				<h2><?php echo $result['name'];?></h2>
	
				<?php echo $result['body'];?>
	</div>

        <?php } ?> <!--end result while loop -->
			<?php } //end result if
				else{
					header("Location: 404.php"); } ?>
</div>

<?php include "inc/sidebar.php" ?>
<?php include "inc/footer.php" ?>