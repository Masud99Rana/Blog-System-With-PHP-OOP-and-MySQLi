
<?php include "../lib/session.php"; 
Session::init();

?>
<?php include "../config/config.php"; ?>
<?php include "../lib/database.php"; ?>
<?php 

    $db = new Database();
?>

<?php 
	if (!isset($_GET['delpage']) || $_GET['delpage'] ==NULL ) {
		echo "<script>window.location = 'index.php';</script>";

		//header("Location: catlist.php");
	}else {

		$pageid = $_GET['delpage'];

	    $query = "delete from tbl_page where id='$pageid'";
		$deldata = $db->delete($query);
		if ($deldata) {
			echo "<script>alert('Page Deleted Successfully!!')</script>";
			echo "<script>window.location = 'index.php';</script>";

		} else{
	     	echo "<script>alert('Page Deleted Failed!!')</script>";
		}
	           
	}
?>