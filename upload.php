<?php

if (isset($_FILES['images']) && $_FILES['images']['error'] == 0) {
	
	$imgExt = explode('.', $_FILES['images']['name']);
	$imgExt = strtolower(end($imgExt));

	//$imgMaxSize = $imgExt == "gif" ? 78643200 : 26214400;
	$imgMaxSize = 104857600;

	$allowedExt = ['jpeg', 'jpg', 'png', 'gif', 'bmp', 'ico', 'tiff', 'webm'];

	if (!in_array($imgExt, $allowedExt)) {
		print json_encode(["error" => "File type not allowed!", "success" => false]);
		exit;
	}

	if ($_FILES['images']['size'] <= $imgMaxSize) {
		$imgHash = substr(strtolower(sha1(uniqid('', true).time())), 0, 4).'.'.$imgExt;

		if (file_exists('i/'.$imgHash)) {
			$imgHash = substr(strtolower(sha1(uniqid('', true).uniqid('', true).time())), 0, 10).'.'.$imgExt;

			if (file_exists('i/'.$imgHash)) {
				$imgHash = strtolower(sha1(uniqid('', true).uniqid('', true).uniqid('', true).time())).'.'.$imgExt;
			}
		}

		if (move_uploaded_file($_FILES['images']['tmp_name'], 'i/'.$imgHash)) {
			print json_encode(["error" => false, "success" => true, "name" => $_FILES['images']['name'], "hash" => $imgHash, "link" => 'i/'.$imgHash, "extension" => $imgExt]);
			exit;
		}
	} else {
		print json_encode(["error" => "Image size is too large!", "success" => false]);
		exit;
	}
} else {
	print json_encode(["error" => "Direct access to this file is prohibited!", "success" => false]);
	exit;
}