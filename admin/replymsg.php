<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>

//https://www.w3schools.com/php/func_mail_mail.asp
//http://php.net/manual/en/function.mail.php



<?php 
	if (!isset($_GET['msgid']) || $_GET['msgid'] ==NULL ) {
		echo "<script>window.location = 'inbox.php';</script>";

		//header("Location: catlist.php");
	} else {
		$id = $_GET['msgid'];
	}

?>



        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>View Message</h2>

            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST')  {

                    $to 	  = $fm->validation($_POST['toEmail']);
                    $from 	  = $fm->validation($_POST['fromEmail']);
                    $subject  = $fm->validation($_POST['subject']);
                    $message  = $fm->validation($_POST['message']);
			

                    $sendmail = mail($to, $subject, $message, $from);

                    if ($sendmail) {
                        echo "<span class='success'>Message Sent Successfully!!</span>";
                    } else {
                        echo "<span class='error'>Message Sent Failed!!</span>";
                    }

                       
                }
            ?>

                <div class="block">               
                 <form action="" method="post" >
				<?php 

					$query = "select * from tbl_contact where id ='$id' order by id desc";
					$msg = $db->select($query);
					if ($msg) {
						while ($result = $msg->fetch_assoc()) {			

				?>
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>To</label>
                            </td>
                            <td>
                                <input  type="text" readonly name="toEmail"  value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr> 
                        <tr>
                        <td>
                            <label>From</label>
                        </td>
                        <td>
                            <input  type="text" name="fromEmail"  placeholder="Please Enter Your Email Address" class="medium" />
                        </td>
                        </tr> 
                        <tr>
                            <td>
                                <label>Subject</label>
                            </td>
                            <td>
                                 <input  type="text" name="subject"  placeholder="Please Enter Your Subject" class="medium" />
                            </td>
                        </tr>                 
                        <tr>
                            <td ">
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="message"> </textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Send" />
                            </td>
                        </tr>
                    </table>
                <?php } }?>
                    </form>
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