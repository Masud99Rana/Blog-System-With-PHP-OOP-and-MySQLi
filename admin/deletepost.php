
<?php include "../lib/session.php"; 
Session::init();

?>
<?php include "../config/config.php"; ?>
<?php include "../lib/database.php"; ?>
<?php 

    $db = new Database();
?>

<?php 
	if (!isset($_GET['delpost']) || $_GET['delpost'] ==NULL ) {
		echo "<script>window.location = 'postlist.php';</script>";

		//header("Location: catlist.php");
	}else {

		$postid = $_GET['delpost'];
		$query = "select * from tbl_post where id='$postid'";
		$getdata = $db->select($query);

		if ($getdata) {
			while ($delimg = $getdata->fetch_assoc()) {
				$dellink = $delimg['image'];
				unlink($dellink);
			}
	   		
	     }

	    $query = "delete from tbl_post where id='$postid'";
		$deldata = $db->delete($query);
		if ($deldata) {
			echo "<script>alert('Post Deleted Successfully!!')</script>";
			echo "<script>window.location = 'postlist.php';</script>";

		} else{
	     	echo "<script>alert('Post Deleted Failed!!')</script>";
		}
	           
	}
?>