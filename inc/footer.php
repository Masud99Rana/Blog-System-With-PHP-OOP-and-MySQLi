	</div>
	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  	<?php 
            $query = "select * from tbl_footer where id =1";
            $footertext = $db->select($query);
            if ($footertext) {
                while ($result = $footertext->fetch_assoc()) {
                
            
        ?> 
	  <p>&copy; <?php echo $result['text'];?> <?php echo date('Y')?></p>
	  <?php
	  	} }
	  ?>
	</div>

	    <?php 
            $query = "select * from tbl_social where id =1";
            $socialmedia = $db->select($query);
            if ($socialmedia) {
                while ($result = $socialmedia->fetch_assoc()) {
                
            
        ?> 
	<div class="fixedicon clear">
		<a href="<?php echo $result['facebook'];?>" target="_blank"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $result['twitter'];?>" target="_blank"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $result['linkedin'];?>" target="_blank"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $result['googleplus'];?>" target="_blank"><img src="images/gl.png" alt="GooglePlus"/></a>
	</div>
<?php }} ?>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>