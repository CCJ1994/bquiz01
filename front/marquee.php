<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
	<?php 
	$rows=$Ad->all(['sh'=>1]);
	$ad="";
	foreach ($rows as $key => $row) {
		$ad=$ad.$row['text']."&nbsp;&nbsp;&nbsp;";
	}
	echo $ad;
	?>
</marquee>