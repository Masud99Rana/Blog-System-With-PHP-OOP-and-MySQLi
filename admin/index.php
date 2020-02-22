<?php include "inc/header.php" ?>
<?php include "inc/sidebar.php"?>
    <div class="grid_10">
	
        <div class="box round first grid">
            <h2> Dashbord</h2>
            <div class="block">               
            <h2>hey I am from admin index</h2>
			<br>
			<br>

              <h2>Dear, <?php echo Session::get('username'); ?></h2>                        
              <h2>login->   <?php echo Session::get('login'); ?></h2>                        
              <h2>User Id : <?php echo Session::get('userId'); ?></h2>             
              <h2>User Role: <?php echo Session::get('userRole'); ?></h2>             
              <h2>Dear, <?php echo Session::get('username'); ?></h2>             
            </div>
        </div>
    </div>

<?php include "inc/footer.php"?>