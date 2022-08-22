<?php

require_once 'core/init.php';
date_default_timezone_set("Africa/Lagos");
$now = date('Y-m-d H:i:s');

if (!isset($_POST['submit'])) {
	Redirect::to('addprojects.php');
} else {

	require_once 'core/init.php';

	$file = $_FILES['file'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$date = $now;

	if (empty($title) || empty($desc)) {
		Redirect::to('addprojects.php');
	}

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {

			if ($fileSize < 3000000) {
				$data = mt_rand();

				$fileNameNew = $data.".".$fileActualExt;

				$fileDestination = 'images/'.$fileNameNew;

				move_uploaded_file($fileTmpName, $fileDestination);

				try {
					DB::getInstance()->insert('projects', array(
				       'title' => $title,
				       'description' => $desc,
				       'pdate' => $date,
				       'banner' => $fileNameNew
				    ));
				} catch (Exception $e) {
					Redirect::to('addprojects.php?errrr');
				}

				Redirect::to('addprojects.php#');
			} else {
				Redirect::to('addprojects.php?update=imagelarge');
			}
		} else {
			Redirect::to('addprojects.php?update=error');
		}
	} else {
		Redirect::to('addprojects.php?update=invalidimage');
	}
}
