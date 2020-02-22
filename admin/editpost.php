<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>

<?php 
	if (!isset($_GET['editpostid']) || $_GET['editpostid'] ==NULL ) {
		echo "<script>window.location = 'postlist.php';</script>";

		//header("Location: catlist.php");
	} else {
		$postid = $_GET['editpostid'];
	} 

?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Post</h2>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

            $title = $_POST['title'];
            $cat = $_POST['cat'];
            $body = $_POST['body'];
            $tags = $_POST['tags'];
            $userid = $_POST['userid'];
            $author = $_POST['author'];

            $title = mysqli_real_escape_string($db->link, $title);
            $cat = mysqli_real_escape_string($db->link, $cat);
            $body = mysqli_real_escape_string($db->link, $body);
            $tags = mysqli_real_escape_string($db->link, $tags);
            $userid = mysqli_real_escape_string($db->link, $userid);
            $author = mysqli_real_escape_string($db->link, $author);


// for image start
    
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = "upload/".substr(md5(time()), 0, 10).'.'.$file_ext;
            //$uploaded_image = "upload/".$unique_image;



// for image end                       

            if ($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "") {
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
	                   	$query = " update tbl_post 
								set
	                   			cat = '$cat',
	                   			title = '$title',
	                   			body = '$body',
	                   			image = '$unique_image',
	                   			author = '$author',
                                tags = '$tags', 
	                   			userid = '$userid' 
	                   			where id = '$postid'
	                   			";
	                    

	                    $updated_rows = $db->update($query);
	                    if ($updated_rows) {
	                       echo "<span class='success'>Data Updated Successfully!!</span>";
	                    } else {
	                        echo "<span class='error'>Data Not Updated!!</span>";
	                    }
	                }	                       

		         }else {                     
	                                                
	                $query = " update tbl_post 
							set
	                   		cat = '$cat',
	                   		title = '$title',
	                   		body = '$body',	      
	                   		author = '$author',
                            tags = '$tags', 
	                   		userid = '$userid' 
	                   		where id = '$postid'
	                   		";
	                    

	                $updated_rows = $db->update($query);
	                if ($updated_rows) {
	                echo "<span class='success'>Data Updated Successfully!!</span>";
	                } else {
	                	echo "<span class='error'>Data Not Updated!!</span>";
	                }
	            }

		    }


        } 
    ?>

    <div class="block">   

<?php 
			$query = "select * from tbl_post where id ='$postid' order by id desc";
			$getpost = $db->select($query);
			while ($postresult = $getpost->fetch_assoc()) {
				
			
		?>


                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $postresult['title'];?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select"  name="cat">
                                    <option > Select Category</option>
                                    <?php 

                                        $query = "select * from tbl_category ";
                                        $category = $db->select($query);

                                        if ($category) {
                                            while ($result = $category->fetch_assoc()) {
                                                
                                    ?>
                                    <option 
								<?php	
									if ($postresult['cat'] == $result['id']) { ?>

										selected = "selected"
									<?php } ?>

									value="<?php echo $result['id']; ?>"><?php echo $result['name'];?></option>

                                    <?php } ?> <!--end result while loop -->
                                    <?php } //end result if
                                        else{
                                            echo "<li>No Category Created</li>"; } ?>   

                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="image" value=""  type="file" />
                                <br>
                            	<img src="<?php echo $postresult['image'];?>" alt="" height="80px" width="200">
                            	
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                	<?php echo $postresult['body'];?>
                                </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" value="<?php echo $postresult['tags'];?>"  class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo Session::get('username');?>"     class="medium" />
                                <input type="hidden" name="userid" value="<?php echo Session::get('userId'); ?>" class="medium" />
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