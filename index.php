<!DOCTYPE html> 
<?php
require_once('config.php');
require_once('kernel/calls.php');
require_once('inc/database.php');
require_once('inc/functions.php');
settings_db();
global $db_sett;
include ('plugins/terminal/term.php');
include ('themes/'.$db_sett['enabled_skin'].'/header.php');
global $applications;
//print_r($applications);
?>
<script type="text/javascript">
		var winh = $(window).height();
		$("#desktop").html(winh);
		$("#desktop").height(winh);
		$(window).resize(function() {
		  winh = $(window).height();
		  //$("#desktop").html(winh);
		  $("#desktop").height(winh);
		  //$("#testingb").html(parseInt(document.getElementById("testingb").style.left));
		});
</script>
<div id="container">
<?php //exec_application('terminal',''); ?>
<div id="desktop">
	<div id="drg_blargh" ondrag="draggingStuff('drg_blargh')" ondragstart="calculate_offset('drg_blargh')" style="position:absolute; top:0px; left:0px; width:200px; height:200px; border:solid; background:white; z-index:2;" draggable="true" onclick="focus_window('drg_blargh')">Test text on div number 1
	</div>
	<div id="drg_blargher" ondrag="draggingStuff('drg_blargher')" ondragstart="calculate_offset('drg_blargher')" style="position:absolute; top:0px; left:0px; width:200px; height:200px; border:solid; background:white; z-index:0;" draggable="true" onclick="focus_window('drg_blargher')">Test text on div number 2
	</div>
</div>
</div>
