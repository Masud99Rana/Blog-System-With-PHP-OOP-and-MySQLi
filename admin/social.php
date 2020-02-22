<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

                $facebook = $fm->validation($_POST['facebook']);
                $twitter = $fm->validation($_POST['twitter']);
                $linkedin = $fm->validation($_POST['linkedin']);
                $googleplus = $fm->validation($_POST['googleplus']);

                $facebook = mysqli_real_escape_string($db->link, $facebook);
                $twitter = mysqli_real_escape_string($db->link, $twitter);
                $linkedin = mysqli_real_escape_string($db->link, $linkedin);
                $googleplus = mysqli_real_escape_string($db->link, $googleplus);

                if ($facebook == "" || $twitter == "" || $linkedin == "" || $googleplus == "") {
                echo "<span class='error'>Field must not be empty!!</span>";
            } else {                            
                    $query = " update tbl_social 
                        set
                        facebook = '$facebook',
                        twitter = '$twitter',
                        linkedin = '$linkedin',
                        googleplus = '$googleplus'
                        where id = '1'
                        ";
                

                    $updated_rows = $db->update($query);
                        if ($updated_rows) {
                        echo "<span class='success'>Data Updated Successfully!!</span>";
                        } else {
                            echo "<span class='error'>Data Not Updated!!</span>";
                        }
                    }                          

                 }

         ?>     
        <?php 
            $query = "select * from tbl_social where id =1";
            $socialmedia = $db->select($query);
            if ($socialmedia) {
                while ($result = $socialmedia->fetch_assoc()) {
                
            
        ?>     

                 <form method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="<?php echo $result['facebook'];?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="<?php echo $result['twitter'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="<?php echo $result['linkedin'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="<?php echo $result['googleplus'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php }} ?>
                </div>
            </div>
        </div>
    <?php include "inc/footer.php"?>