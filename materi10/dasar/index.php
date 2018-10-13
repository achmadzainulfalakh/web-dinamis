<?php
error_reporting(0);
$level=$_GET['level'];
?>
<div>
	<ul>
	<li>Dasboard</li>
	
	<?php if($level=="administrator"){ ?>
	<li>User</li>
	<li>Config</li>
	<?php } ?>
	<li>User Profile</li>
	</ul>
	</div>