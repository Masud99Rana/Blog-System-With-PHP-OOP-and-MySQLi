<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>

<?php 
	if (!isset($_GET['sliderid']) || $_GET['sliderid'] ==NULL ) {
		echo "<script>window.location = 'sliderlist.php';</script>";

		//header("Location: catlist.php");
	} else {
		$sliderid = $_GET['sliderid'];
	} 

?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Slider</h2>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

            $title = $_POST['title'];

            $title = mysqli_real_escape_string($db->link, $title);

// for image start
    
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = "upload/slider/".substr(md5(time()), 0, 10).'.'.$file_ext;
            //$uploaded_image = "upload/".$unique_image;



// for image end                       

            if ($title == "") {
                echo "<span class='error'>Field must not be empty!!</span>";
            } else {
            	if (!empty($file_name)) {
		            
	                if ($file_size >1048567) {
	                 echo "<span class='error'>Image Size should be less then 1MB!
	                 </span>";
	                } elseif (in_array($file_ext, $permited) === false) {
	                 	echo "<span class='error'>You can upload only:-"
	                 	.implode(', ', $permited)."</span>";
	                }else {
	                    move_uploaded_file($file_temp, $unique_image);                            
	                   	$query = " update tbl_slider 
								set
	                   			title = '$title',
	                   			image = '$unique_image'

	                   			where id = '$sliderid'
	                   			";
	                    

	                    $updated_rows = $db->update($query);
	                    if ($updated_rows) {
	                       echo "<span class='success'>Slider Updated Successfully!!</span>";
	                    } else {
	                        echo "<span class='error'>Slider Not Updated!!</span>";
	                    }
	                }	                       

		         }else {                     
	                                                
	                $query = " update tbl_slider 
							set
	                   		title = '$title'
	                   		where id = '$sliderid'
	                   		";
	                    

	                $updated_rows = $db->update($query);
	                if ($updated_rows) {
	                echo "<span class='success'>Slider Updated Successfully!!</span>";
	                } else {
	                	echo "<span class='error'>Slider Not Updated!!</span>";
	                }
	            }

		    }


        } 
    ?>

    <div class="block">   

<?php 
			$query = "select * from tbl_slider where id ='$sliderid' ";
			$getslider = $db->select($query);
			while ($sliderresult = $getslider->fetch_assoc()) {
				
			
		?>


                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $sliderresult['title'];?>" class="medium" />
                            </td>
                        </tr>
                     
                        
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="image" value=""  type="file" />
                                <br>
                            	<img src="<?php echo $sliderresult['image'];?>" alt="" height="80px" width="200">
                            	
                            </td>
                        </tr>               

						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                  <?php } ?>
                </div>
            </div>
        </div>


    <!-- /TinyMCE -->
    <style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>

 <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>

    <?php include "inc/footer.php"?>