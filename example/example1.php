<?php
	// Jandi class 
	require('../src/jandi.php');
	
	$URL = "";
			
	$jandi = new Jandi($URL);
	$infos = array();
	
	$info["title"] = "title";
	$info["description"] = "description";
	
	$infos[0] = $info;
	
	$jandi->send("TITLE",$infos);