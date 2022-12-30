<?php


$target_dir = "imgthumb/". date("Y-m-d") . "/" ;

if(!is_dir($target_dir))
	mkdir($target_dir,0755,true);


$target_file = $target_dir . basename($_FILES["image"]["name"]);

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

?>
ok
