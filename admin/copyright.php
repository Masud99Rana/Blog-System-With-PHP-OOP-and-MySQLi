<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

                $copyright = $fm->validation($_POST['copyright']);
                $copyright = mysqli_real_escape_string($db->link, $copyright);

                if ($copyright == "" ) {
                echo "<span class='error'>Field must not be empty!!</span>";
                } else {                            
                        $query = " update tbl_footer 
                            set
                            text = '$copyright'
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
            $query = "select * from tbl_footer where id =1";
            $footertext = $db->select($query);
            if ($footertext) {
                while ($result = $footertext->fetch_assoc()) {
                
            
        ?> 
                 <form method="post" action="">
                    <table class="form" >					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['text'];?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
        <?php
            } }
        ?>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
   <?php include "inc/footer.php"?>