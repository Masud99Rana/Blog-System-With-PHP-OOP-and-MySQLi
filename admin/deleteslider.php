
<?php include "../lib/session.php"; 
Session::init();

?>
<?php include "../config/config.php"; ?>
<?php include "../lib/database.php"; ?>
<?php 

    $db = new Database();
?>

<?php 
	if (!isset($_GET['delslider']) || $_GET['delslider'] ==NULL ) {
		echo "<script>window.location = 'sliderlist.php';</script>";

		//header("Location: catlist.php");
	}else {

		$sliderid = $_GET['delslider'];

		$query = "select * from tbl_slider where id='$sliderid'";
		$getdata = $db->select($query);

		if ($getdata) {
			while ($delimg = $getdata->fetch_assoc()) {
				$dellink = $delimg['image'];
				unlink($dellink);
			}
	   		
	     }

	    $delquery = "delete from tbl_slider where id='$sliderid'";
		$deldata = $db->delete($delquery);
		if ($deldata) {
			echo "<script>alert('Slider Deleted Successfully!!')</script>";
			echo "<script>window.location = 'sliderlist.php';</script>";

		} else{
	     	echo "<script>alert('Slider Deleted Failed!!')</script>";
		}
	           
	}
?>